<?php

namespace App\Controller;

use App\Entity\ActivityParticipant;
use App\Form\ActivityParticipantType;
use App\Repository\ActivityParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/activity/participant')]
final class ActivityParticipantController extends AbstractController
{
    #[Route(name: 'app_activity_participant_index', methods: ['GET'])]
    public function index(ActivityParticipantRepository $activityParticipantRepository): Response
    {
        return $this->render('activity_participant/index.html.twig', [
            'activity_participants' => $activityParticipantRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_activity_participant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activityParticipant = new ActivityParticipant();
        $form = $this->createForm(ActivityParticipantType::class, $activityParticipant);
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

    #[Route('/{id}', name: 'app_activity_participant_show', methods: ['GET'])]
    public function show(ActivityParticipant $activityParticipant): Response
    {
        return $this->render('activity_participant/show.html.twig', [
            'activity_participant' => $activityParticipant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_activity_participant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ActivityParticipant $activityParticipant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActivityParticipantType::class, $activityParticipant);
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
    public function delete(Request $request, ActivityParticipant $activityParticipant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activityParticipant->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($activityParticipant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activity_participant_index', [], Response::HTTP_SEE_OTHER);
    }
}
