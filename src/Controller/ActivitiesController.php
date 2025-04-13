<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Activities;
use App\Entity\Attendances;
use App\Form\ActivitiesType;
use App\Repository\ActivitiesRepository;
use App\Repository\ActivityParticipantRepository;
use App\Repository\AttendancesRepository;
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
    public function index(ActivitiesRepository $activitiesRepository, ActivityParticipantRepository $participantRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được truy cập trang này.');

        // Lấy tất cả hoạt động, sắp xếp theo created_at DESC
        $activities = $activitiesRepository->findBy([], ['created_at' => 'DESC']);
        $activityParticipants = [];

        foreach ($activities as $activity) {
            $activityId = $activity->getId();
            $activityParticipants[$activityId] = $participantRepository->createQueryBuilder('ap')
                ->where('ap.activityId = :activityId')
                ->setParameter('activityId', $activityId)
                ->orderBy('ap.joinedAt', 'DESC')
                ->getQuery()
                ->getResult();
        }

        $addActivityForm = $this->createForm(ActivitiesType::class, new Activities(), [
            'action' => $this->generateUrl('app_activities_new'),
            'method' => 'POST',
        ]);

        $editActivityForms = [];
        foreach ($activities as $activity) {
            $editActivityForms[$activity->getId()] = $this->createForm(ActivitiesType::class, $activity, [
                'action' => $this->generateUrl('app_activities_edit', ['id' => $activity->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        return $this->render('activities/index.html.twig', [
            'activities' => $activities,
            'activityParticipants' => $activityParticipants,
            'addActivityForm' => $addActivityForm->createView(),
            'editActivityForms' => $editActivityForms,
        ]);
    }

    #[Route('/{id}/cancel', name: 'app_activities_cancel', methods: ['POST'])]
    public function cancel(Request $request, Activities $activity, EntityManagerInterface $entityManager): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được hủy hoạt động.');

        if ($this->isCsrfTokenValid('cancel' . $activity->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $activity->setStatus('cancelled');
                $activity->setUpdatedAt(new \DateTime());
                $entityManager->flush();
                $this->addFlash('success', 'Hủy hoạt động thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/{id}/participants', name: 'app_activities_participants', methods: ['GET'])]
    public function participants(Activities $activity, ActivityParticipantRepository $participantRepository, AttendancesRepository $attendancesRepository): JsonResponse
    {
        $participants = $participantRepository->findBy(['activityId' => $activity->getId()]);
        $data = [
            'success' => true,
            'participants' => array_map(function ($participant) use ($attendancesRepository) {
                $user = $participant->getUserId();
                $attendance = $attendancesRepository->findOneBy(['activity_id' => $participant->getActivityId()->getId(), 'user_id' => $user->getId()]);
                return [
                    'id' => $user->getId(),
                    'studentId' => $user->getStudentId() ?: 'N/A',
                    'name' => $user->getName(),
                    'attended' => $attendance ? $attendance->getStatus() === 'present' : false,
                ];
            }, $participants),
            'totalParticipants' => count($participants),
            'totalAttended' => count($attendancesRepository->findBy(['activity_id' => $activity->getId(), 'status' => 'present'])),
        ];

        return new JsonResponse($data);
    }

    #[Route('/attendance/toggle', name: 'app_activities_attendance_toggle', methods: ['POST'])]
    public function toggleAttendance(Request $request, AttendancesRepository $attendancesRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được điểm danh.');

        $data = json_decode($request->getContent(), true);
        if (!$data || !isset($data['activity_id'], $data['user_id'], $data['status'])) {
            return new JsonResponse(['error' => 'Dữ liệu không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        $activityId = $data['activity_id'];
        $userId = $data['user_id'];
        $status = $data['status'];

        if (!in_array($status, ['present', 'absent'])) {
            return new JsonResponse(['error' => 'Trạng thái không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        $attendance = $attendancesRepository->findOneBy(['activity_id' => $activityId, 'user_id' => $userId]);
        if (!$attendance) {
            $attendance = new Attendances();
            $attendance->setUserId($entityManager->getRepository(Users::class)->find($userId));
            $attendance->setActivityId($entityManager->getRepository(Activities::class)->find($activityId));
            $attendance->setMarkedAt(new \DateTime());
            $attendance->setMarkedBy($this->getUser());
        }

        $attendance->setStatus($status);
        try {
            $entityManager->persist($attendance);
            $entityManager->flush();
            return new JsonResponse(['success' => true, 'newStatus' => $status]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/new', name: 'app_activities_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được thêm hoạt động.');

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

    #[Route('/{id}/edit', name: 'app_activities_edit', methods: ['POST'])]
    public function edit(Request $request, Activities $activity, EntityManagerInterface $entityManager): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được chỉnh sửa hoạt động.');

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

    // Giữ lại nhưng không dùng trong index.html.twig hiện tại
    #[Route('/{id}', name: 'app_activities_show', methods: ['GET'])]
    public function show(Activities $activity, ActivityParticipantRepository $participantRepository): Response
    {
        $user = $this->getUser();
        $hasJoined = $user ? $participantRepository->findByActivityAndUser($activity->getId(), $user->getId()) !== null : false;

        return $this->render('activities/show.html.twig', [
            'activity' => $activity,
            'hasJoined' => $hasJoined,
        ]);
    }

    #[Route('/{id}', name: 'app_activities_delete', methods: ['POST'])]
    public function delete(Request $request, Activities $activity, EntityManagerInterface $entityManager): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được xóa hoạt động.');

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