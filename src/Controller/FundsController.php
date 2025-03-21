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
        // Kiểm tra quyền truy cập
        // $this->denyAccessUnlessGranted(['ROLE_ADMIN', 'ROLE_TREASURER'], null, 'Chỉ có Admin hoặc Treasurer mới được truy cập trang này.');

        // Tải toàn bộ dữ liệu (không phân trang server-side)
        $funds = $fundsRepository->findAll();

        // Tạo form để thêm giao dịch
        $addFund = new Funds();
        $addFundForm = $this->createForm(FundsType::class, $addFund);

        // Tạo form để sửa giao dịch
        $editFundForms = [];
        foreach ($funds as $fund) {
            $editFundForms[$fund->getId()] = $this->createForm(FundsType::class, $fund)->createView();
        }

        return $this->render('funds/index.html.twig', [
            'funds' => $funds,
            'addFundForm' => $addFundForm->createView(),
            'editFundForms' => $editFundForms,
        ]);
    }

    #[Route('/new', name: 'app_funds_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Treasurer mới được thêm giao dịch.');

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
    public function show(Funds $fund, Request $request): Response
    {
        // $this->denyAccessUnlessGranted(['ROLE_TREASURER', 'ROLE_ADMIN'], null, 'Chỉ có Treasurer hoặc Admin mới được xem chi tiết quỹ.');

        $referer = $request->query->get('referer', $this->generateUrl('app_funds_index'));

        return $this->render('funds/show.html.twig', [
            'fund' => $fund,
            'referer' => $referer,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_funds_edit', methods: ['POST'])]
    public function edit(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Treasurer mới được chỉnh sửa quỹ này.');

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
    public function delete(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Treasurer mới được xóa quỹ này.');

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
}