<?php

namespace App\Controller;

use App\Entity\Attendances;
use App\Form\AttendancesType;
use App\Repository\AttendancesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/attendances')]
final class AttendancesController extends AbstractController
{
    // note: Giữ nguyên action index để hiển thị danh sách điểm danh
    #[Route(name: 'app_attendances_index', methods: ['GET'])]
    public function index(AttendancesRepository $attendancesRepository): Response
    {
        return $this->render('attendances/index.html.twig', [
            'attendances' => $attendancesRepository->findAll(),
        ]);
    }
    // end note

    // note: Giữ nguyên action new để tạo điểm danh mới
    #[Route('/new', name: 'app_attendances_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attendance = new Attendances();
        $form = $this->createForm(AttendancesType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($attendance);
            $entityManager->flush();

            return $this->redirectToRoute('app_attendances_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attendances/new.html.twig', [
            'attendance' => $attendance,
            'form' => $form,
        ]);
    }
    // end note

    // note: Giữ nguyên action show để hiển thị chi tiết điểm danh
    #[Route('/{id}', name: 'app_attendances_show', methods: ['GET'])]
    public function show(Attendances $attendance): Response
    {
        return $this->render('attendances/show.html.twig', [
            'attendance' => $attendance,
        ]);
    }
    // end note

    #[Route('/{id}/edit', name: 'app_attendances_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Attendances $attendance, EntityManagerInterface $entityManager): Response
    {
        // Kiểm tra quyền chỉnh sửa
        $this->denyAccessUnlessGranted('EDIT', $attendance, 'Bạn không có quyền chỉnh sửa điểm danh này.');

        $form = $this->createForm(AttendancesType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_attendances_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attendances/edit.html.twig', [
            'attendance' => $attendance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_attendances_delete', methods: ['POST'])]
    public function delete(Request $request, Attendances $attendance, EntityManagerInterface $entityManager): Response
    {
        // Kiểm tra quyền xóa
        $this->denyAccessUnlessGranted('DELETE', $attendance, 'Bạn không có quyền xóa điểm danh này.');

        if ($this->isCsrfTokenValid('delete'.$attendance->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($attendance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_attendances_index', [], Response::HTTP_SEE_OTHER);
    }
}