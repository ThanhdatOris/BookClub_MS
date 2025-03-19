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

#[Route('/funds')]
final class FundsController extends AbstractController
{
    #[Route(name: 'app_funds_index', methods: ['GET'])]
    public function index(Request $request, FundsRepository $fundsRepository, PaginatorInterface $paginator): Response
    {
        $query = $fundsRepository->createQueryBuilder('f')
            ->orderBy('f.created_at', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // Số bản ghi mỗi trang
        );

        return $this->render('funds/index.html.twig', [
            'funds' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_funds_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fund = new Funds();
        $fund->setCreatedBy($this->getUser());
        $fund->setCreatedAt(new \DateTime());
        $fund->setUpdatedAt(new \DateTime());

        // Lấy dữ liệu từ form
        $transactionType = $request->request->get('transaction_type');
        $amount = $request->request->get('amount');
        $date = $request->request->get('date');
        $description = $request->request->get('description');

        // Validate dữ liệu
        if (!in_array($transactionType, ['income', 'expense'])) {
            return new JsonResponse(['error' => 'Loại giao dịch không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if (!is_numeric($amount) || $amount <= 0) {
            return new JsonResponse(['error' => 'Số tiền không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if (!$date || !\DateTime::createFromFormat('Y-m-d', $date)) {
            return new JsonResponse(['error' => 'Ngày không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        // Gán dữ liệu
        $fund->setTransactionType($transactionType);
        $fund->setAmount($amount);
        $fund->setDate(\DateTime::createFromFormat('Y-m-d', $date));
        $fund->setDescription($description);

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('fund_new', $request->request->get('_token'))) {
            return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $entityManager->persist($fund);
            $entityManager->flush();
            $this->addFlash('success', 'Thêm giao dịch thành công!');
            return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_funds_index')]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/{id}', name: 'app_funds_show', methods: ['GET'])]
    public function show(Funds $fund): Response
    {
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Treasurer mới được xem chi tiết quỹ.');

        return $this->render('funds/show.html.twig', [
            'fund' => $fund,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_funds_edit', methods: ['POST'])]
    public function edit(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Treasurer mới được chỉnh sửa quỹ này.');

        // Lấy dữ liệu từ form
        $transactionType = $request->request->get('transaction_type');
        $amount = $request->request->get('amount');
        $date = $request->request->get('date');
        $description = $request->request->get('description');

        // Validate dữ liệu
        if (!in_array($transactionType, ['income', 'expense'])) {
            return new JsonResponse(['error' => 'Loại giao dịch không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if (!is_numeric($amount) || $amount <= 0) {
            return new JsonResponse(['error' => 'Số tiền không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if (!$date || !\DateTime::createFromFormat('Y-m-d', $date)) {
            return new JsonResponse(['error' => 'Ngày không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        // Gán dữ liệu
        $fund->setTransactionType($transactionType);
        $fund->setAmount($amount);
        $fund->setDate(\DateTime::createFromFormat('Y-m-d', $date));
        $fund->setDescription($description);
        $fund->setUpdatedAt(new \DateTime());

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('fund_edit' . $fund->getId(), $request->request->get('_token'))) {
            return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $entityManager->flush();
            $this->addFlash('success', 'Cập nhật giao dịch thành công!');
            return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_funds_index')]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/{id}', name: 'app_funds_delete', methods: ['POST'])]
    public function delete(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Treasurer mới được xóa quỹ này.');

        if ($this->isCsrfTokenValid('delete' . $fund->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($fund);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa giao dịch thành công!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Có lỗi xảy ra khi xóa giao dịch: ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'CSRF token không hợp lệ.');
        }

        return $this->redirectToRoute('app_funds_index', [], Response::HTTP_SEE_OTHER);
    }
}