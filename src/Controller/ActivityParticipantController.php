<?php

namespace App\Controller;

use App\Entity\ActivityParticipants;
use App\Form\ActivityParticipantsType;
use App\Repository\ActivityParticipantsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/activity/participant')]
final class ActivityParticipantController extends AbstractController
{
    // note: Giữ nguyên action index để hiển thị danh sách thành viên tham gia hoạt động
    #[Route(name: 'app_activity_participant_index', methods: ['GET'])]
    public function index(ActivityParticipantsRepository $activityParticipantsRepository): Response
    {
        return $this->render('activity_participant/index.html.twig', [
            'activity_participants' => $activityParticipantsRepository->findAll(),
        ]);
    }
    // end note

    // note: Giữ nguyên action new để tạo thành viên tham gia mới
    #[Route('/new', name: 'app_activity_participant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activityParticipant = new ActivityParticipants();
        $form = $this->createForm(ActivityParticipantsType::class, $activityParticipant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($activityParticipant);
            $entityManager->flush();

            return $this->redirectToRoute('app_activity_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activity_participant/new.html.twig', [
            'activity_participant' => $activityParticipant,
            'form' => $form,
        ]);
    }
    // end note

    // note: Giữ nguyên action show để hiển thị chi tiết thành viên tham gia
    #[Route('/{id}', name: 'app_activity_participant_show', methods: ['GET'])]
    public function show(ActivityParticipants $activityParticipant): Response
    {
        return $this->render('activity_participant/show.html.twig', [
            'activity_participant' => $activityParticipant,
        ]);
    }
    // end note

    #[Route('/{id}/edit', name: 'app_activity_participant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ActivityParticipants $activityParticipant, EntityManagerInterface $entityManager): Response
    {
        // Kiểm tra quyền chỉnh sửa
        $this->denyAccessUnlessGranted('EDIT', $activityParticipant, 'Bạn không có quyền chỉnh sửa thành viên tham gia này.');

        $form = $this->createForm(ActivityParticipantsType::class, $activityParticipant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_activity_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activity_participant/edit.html.twig', [
            'activity_participant' => $activityParticipant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activity_participant_delete', methods: ['POST'])]
    public function delete(Request $request, ActivityParticipants $activityParticipant, EntityManagerInterface $entityManager): Response
    {
        // Kiểm tra quyền xóa
        $this->denyAccessUnlessGranted('DELETE', $activityParticipant, 'Bạn không có quyền xóa thành viên tham gia này.');

        if ($this->isCsrfTokenValid('delete'.$activityParticipant->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($activityParticipant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activity_participant_index', [], Response::HTTP_SEE_OTHER);
    }
}