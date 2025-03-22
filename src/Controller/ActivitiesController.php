<?php

namespace App\Controller;

use App\Entity\Activities;
use App\Form\ActivitiesType;
use App\Repository\ActivitiesRepository;
use App\Repository\ActivityParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/activities')]
final class ActivitiesController extends AbstractController
{
    #[Route(name: 'app_activities_index', methods: ['GET'])]
    public function index(ActivitiesRepository $activitiesRepository): Response
    {
        $activities = $activitiesRepository->findBy([], ['created_at' => 'DESC']);

        $addActivityForm = $this->createForm(ActivitiesType::class, new Activities());
        $editActivityForms = [];
        foreach ($activities as $activity) {
            $editActivityForms[$activity->getId()] = $this->createForm(ActivitiesType::class, $activity)->createView();
        }

        return $this->render('activities/index.html.twig', [
            'activities' => $activities,
            'addActivityForm' => $addActivityForm->createView(),
            'editActivityForms' => $editActivityForms,
        ]);
    }

    #[Route('/new', name: 'app_activities_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được thêm hoạt động.');
        // $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được thêm hoạt động.');

        $activity = new Activities();
        $activity->setCreatedBy($this->getUser());
        $activity->setCreatedAt(new \DateTime());
        $activity->setUpdatedAt(new \DateTime());

        $form = $this->createForm(ActivitiesType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('activity_images_directory'),
                    $newFilename
                );
                $activity->setImage('uploads/activities/' . $newFilename);
            }

            try {
                $entityManager->persist($activity);
                $entityManager->flush();
                $this->addFlash('success', 'Thêm hoạt động thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
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

    #[Route('/{id}', name: 'app_activities_show', methods: ['GET'])]
    public function show(Activities $activity, ActivityParticipantRepository $participantRepository): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được xem chi tiết hoạt động.');
        // $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được xem chi tiết hoạt động.');

        $user = $this->getUser();
        $hasJoined = $user ? $participantRepository->findByActivityAndUser($activity->getId(), $user->getId()) !== null : false;

        return $this->render('activities/show.html.twig', [
            'activity' => $activity,
            'hasJoined' => $hasJoined,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_activities_edit', methods: ['POST'])]
    public function edit(Request $request, Activities $activity, EntityManagerInterface $entityManager): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được chỉnh sửa hoạt động.');
        // $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được chỉnh sửa hoạt động.');

        $form = $this->createForm(ActivitiesType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('activity_images_directory'),
                    $newFilename
                );
                $activity->setImage('uploads/activities/' . $newFilename);
            }

            $activity->setUpdatedAt(new \DateTime());

            try {
                $entityManager->flush();
                $this->addFlash('success', 'Cập nhật hoạt động thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
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

    #[Route('/{id}', name: 'app_activities_delete', methods: ['POST'])]
    public function delete(Request $request, Activities $activity, EntityManagerInterface $entityManager): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được xóa hoạt động.');
        // $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được xóa hoạt động.');

        if ($this->isCsrfTokenValid('delete' . $activity->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($activity);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa hoạt động thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
    }
}