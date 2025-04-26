<?php

namespace App\Controller;

use App\Entity\Funds;
use App\Form\FundsType;
use App\Repository\FundsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/funds')]
#[IsGranted('ROLE_MEMBER')]
final class FundsController extends AbstractController
{
    #[Route('/', name: 'app_funds_index', methods: ['GET'])]
    public function index(Request $request, FundsRepository $fundsRepository, PaginatorInterface $paginator): Response
    {
        $search = $request->query->get('search', '');
        $startDate = $request->query->get('start_date');
        $endDate = $request->query->get('end_date');

        // Tạo query để lấy dữ liệu từ database
        $queryBuilder = $fundsRepository->createQueryBuilder('f')
            ->leftJoin('f.created_by', 'u')
            ->orderBy('f.date', 'DESC');

        // Thêm điều kiện tìm kiếm nếu có
        if ($search) {
            $queryBuilder->andWhere('f.description LIKE :search OR f.transaction_type LIKE :search OR u.fullname LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        // Thêm điều kiện lọc theo ngày nếu có
        if ($startDate) {
            $queryBuilder->andWhere('f.date >= :startDate')
                ->setParameter('startDate', new \DateTime($startDate));
        }
        if ($endDate) {
            $queryBuilder->andWhere('f.date <= :endDate')
                ->setParameter('endDate', new \DateTime($endDate));
        }

        // Sử dụng KnpPaginator để phân trang
        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            10
        );

        // Tính tổng thu và chi
        $totalIncome = $fundsRepository->getTotalFundsByType('income');
        $totalExpense = $fundsRepository->getTotalFundsByType('expense');
        $balance = $totalIncome - $totalExpense;

        // Lấy dữ liệu thống kê theo tháng cho biểu đồ
        $currentYear = (new \DateTime())->format('Y');
        $monthlyStats = $fundsRepository->getMonthlyFunds($currentYear);

        // Tạo form để thêm giao dịch
        $addFund = new Funds();
        $addFundForm = $this->createForm(FundsType::class, $addFund);

        // Tạo form edit cho mỗi giao dịch
        $editFundForms = [];
        foreach ($pagination as $fund) {
            $editFundForms[$fund->getId()] = $this->createForm(FundsType::class, $fund, [
                'action' => $this->generateUrl('app_funds_edit', ['id' => $fund->getId()]),
            ])->createView();
        }

        return $this->render('funds/index.html.twig', [
            'funds' => $pagination,
            'addFundForm' => $addFundForm->createView(),
            'editFundForms' => $editFundForms,
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'balance' => $balance,
            'monthlyStats' => $monthlyStats,
            'search' => $search,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }

    #[Route('/new', name: 'app_funds_new', methods: ['POST'])]
    #[IsGranted('ROLE_TREASURER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fund = new Funds();
        $fund->setCreatedBy($this->getUser());
        $fund->setCreatedAt(new \DateTime());
        $fund->setUpdatedAt(new \DateTime());

        $form = $this->createForm(FundsType::class, $fund);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($fund);
                $entityManager->flush();
                $this->addFlash('success', 'Thêm giao dịch thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_funds_index')]);
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }
        return new JsonResponse(['error' => implode(', ', $errors)], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/{id}', name: 'app_funds_show', methods: ['GET'])]
    #[IsGranted('ROLE_TREASURER')]
    public function show(Funds $fund, Request $request): Response
    {
        $referer = $request->query->get('referer', $this->generateUrl('app_funds_index'));

        return $this->render('funds/show.html.twig', [
            'fund' => $fund,
            'referer' => $referer,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_funds_edit', methods: ['POST'])]
    #[IsGranted('ROLE_TREASURER')]
    public function edit(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FundsType::class, $fund);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fund->setUpdatedAt(new \DateTime());
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Cập nhật giao dịch thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_funds_index')]);
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }
        return new JsonResponse(['error' => implode(', ', $errors)], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/{id}', name: 'app_funds_delete', methods: ['POST'])]
    #[IsGranted('ROLE_TREASURER')]
    public function delete(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $fund->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($fund);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa giao dịch thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_funds_index')]);
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra khi xóa giao dịch: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/export', name: 'app_funds_export', methods: ['GET'])]
    #[IsGranted('ROLE_TREASURER')]
    public function export(FundsRepository $fundsRepository): Response
    {
        $funds = $fundsRepository->findBy([], ['date' => 'DESC']);
        
        $csvData = [];
        $csvData[] = ['ID', 'Loại giao dịch', 'Số tiền', 'Ngày', 'Mô tả', 'Người tạo', 'Ngày tạo', 'Ngày cập nhật'];
        
        foreach ($funds as $fund) {
            $csvData[] = [
                $fund->getId(),
                $fund->getTransactionType(),
                $fund->getAmount(),
                $fund->getDate()->format('Y-m-d'),
                $fund->getDescription(),
                $fund->getCreatedBy()->getFullname(),
                $fund->getCreatedAt()->format('Y-m-d H:i:s'),
                $fund->getUpdatedAt()->format('Y-m-d H:i:s'),
            ];
        }
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="funds_export.csv"');
        
        $handle = fopen('php://temp', 'r+');
        foreach ($csvData as $row) {
            fputcsv($handle, $row);
        }
        rewind($handle);
        $response->setContent(stream_get_contents($handle));
        fclose($handle);
        
        return $response;
    }
}