<?php

namespace App\Controller;

use App\Entity\Funds;
use App\Form\FundsType;
use App\Repository\FundsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/funds')]
final class FundsController extends AbstractController
{
    // note: Giữ nguyên action index để hiển thị danh sách quỹ
    #[Route(name: 'app_funds_index', methods: ['GET'])]
    public function index(FundsRepository $fundsRepository): Response
    {
        return $this->render('funds/index.html.twig', [
            'funds' => $fundsRepository->findAll(),
        ]);
    }
    // end note

    // note: Giữ nguyên action new để tạo quỹ mới
    #[Route('/new', name: 'app_funds_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fund = new Funds();
        $form = $this->createForm(FundsType::class, $fund);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fund);
            $entityManager->flush();

            return $this->redirectToRoute('app_funds_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('funds/new.html.twig', [
            'fund' => $fund,
            'form' => $form,
        ]);
    }
    // end note

    // note: Giữ nguyên action show để hiển thị chi tiết quỹ
    #[Route('/{id}', name: 'app_funds_show', methods: ['GET'])]
    public function show(Funds $fund): Response
    {
        return $this->render('funds/show.html.twig', [
            'fund' => $fund,
        ]);
    }
    // end note

    #[Route('/{id}/edit', name: 'app_funds_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        // Kiểm tra quyền chỉnh sửa
        $this->denyAccessUnlessGranted('EDIT', $fund, 'Chỉ có Treasurer mới được chỉnh sửa quỹ này.');

        $form = $this->createForm(FundsType::class, $fund);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_funds_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('funds/edit.html.twig', [
            'fund' => $fund,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_funds_delete', methods: ['POST'])]
    public function delete(Request $request, Funds $fund, EntityManagerInterface $entityManager): Response
    {
        // Kiểm tra quyền xóa
        $this->denyAccessUnlessGranted('DELETE', $fund, 'Chỉ có Treasurer mới được xóa quỹ này.');

        if ($this->isCsrfTokenValid('delete'.$fund->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($fund);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_funds_index', [], Response::HTTP_SEE_OTHER);
    }
}