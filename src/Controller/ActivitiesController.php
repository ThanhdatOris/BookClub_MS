<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Activities;
use App\Entity\Attendances;
use App\Form\ActivitiesType;
use App\Form\AttendancesType;
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
    public function index(ActivitiesRepository $activitiesRepository, ActivityParticipantRepository $participantRepository, AttendancesRepository $attendancesRepository): Response
    {
        // Filter out canceled activities (optional, uncomment if desired)
        $activities = $activitiesRepository->findBy(['status' => ['planned', 'ongoing', 'completed']], ['created_at' => 'DESC']);
        $activities = $activitiesRepository->findBy([], ['created_at' => 'DESC']);
        $activityParticipants = [];
        $attendances = [];

        foreach ($activities as $activity) {
            $activityId = $activity->getId();
            $activityParticipants[$activityId] = $participantRepository->createQueryBuilder('ap')
                ->where('ap.activityId = :activityId')
                ->setParameter('activityId', $activityId)
                ->orderBy('ap.joinedAt', 'DESC')
                ->getQuery()
                ->getResult();

            $attendances[$activityId] = $attendancesRepository->createQueryBuilder('a')
                ->where('a.activity_id = :activityId')
                ->setParameter('activityId', $activityId)
                ->orderBy('a.marked_at', 'DESC')
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

        $addAttendance = new Attendances();
        $addAttendanceForm = $this->createForm(AttendancesType::class, $addAttendance, [
            'action' => $this->generateUrl('app_attendances_new'),
            'method' => 'POST',
        ]);

        return $this->render('activities/index.html.twig', [
            'activities' => $activities,
            'activityParticipants' => $activityParticipants,
            'attendances' => $attendances,
            'addActivityForm' => $addActivityForm->createView(),
            'editActivityForms' => $editActivityForms,
            'addAttendanceForm' => $addAttendanceForm->createView(),
        ]);
    }

    #[Route('/{id}/cancel', name: 'app_activities_cancel', methods: ['POST'])]
    public function cancel(Request $request, Activities $activity, EntityManagerInterface $entityManager): Response
    {
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

    #[Route('/{id}/attendance', name: 'app_activities_attendance', methods: ['GET'])]
    public function attendance(Activities $activity, ActivityParticipantRepository $participantRepository, AttendancesRepository $attendancesRepository): JsonResponse
    {
        $participants = $participantRepository->findBy(['activityId' => $activity->getId(), 'status' => 'confirmed']);
        $attendances = $attendancesRepository->findBy(['activity_id' => $activity->getId()]);

        $participantData = array_map(function ($participant) use ($attendances) {
            $user = $participant->getUserId();
            $attendance = array_filter($attendances, fn($a) => $a->getUserId()->getId() === $user->getId());
            $attendance = reset($attendance);
            return [
                'userId' => $user->getId(),
                'studentId' => $user->getStudentId() ?: 'N/A',
                'name' => $user->getName(),
                'attendanceStatus' => $attendance ? $attendance->getStatus() : 'absent',
            ];
        }, $participants);

        return new JsonResponse([
            'participantCount' => count($participants),
            'attendedCount' => count(array_filter($attendances, fn($a) => $a->getStatus() === 'present')),
            'participants' => $participantData,
        ]);
    }

    #[Route('/attendance/toggle', name: 'app_activities_attendance_toggle', methods: ['POST'])]
    public function toggleAttendance(Request $request, AttendancesRepository $attendancesRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $userId = $request->request->getInt('userId');
        $activityId = $request->request->getInt('activityId');
        $status = $request->request->get('status') === 'present' ? 'absent' : 'present';

        $attendance = $attendancesRepository->findOneBy(['user_id' => $userId, 'activity_id' => $activityId]);
        if (!$attendance) {
            $attendance = new Attendances();
            $attendance->setUserId($entityManager->getRepository(Users::class)->find($userId));
            $attendance->setActivityId($entityManager->getRepository(Activities::class)->find($activityId));
            $attendance->setMarkedAt(new \DateTime());
            $attendance->setMarkedBy($this->getUser());
        }

        $attendance->setStatus($status);
        $entityManager->persist($attendance);
        $entityManager->flush();

        return new JsonResponse(['success' => true, 'newStatus' => $status]);
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

    #[Route('/activities/{id}/participants', name: 'app_activities_participants', methods: ['GET'])]
    public function getParticipants(Activities $activity): JsonResponse
    {
        $participants = $activity->getParticipants(); // Giả sử bạn có quan hệ giữa Activity và Participant
        $data = [
            'totalParticipants' => count($participants),
            'totalAttended' => count(array_filter($participants->toArray(), fn($p) => $p->isAttended())),
            'participants' => array_map(fn($p) => [
                'id' => $p->getId(),
                'studentId' => $p->getStudentId(),
                'name' => $p->getName(),
                'attended' => $p->isAttended(),
            ], $participants->toArray()),
        ];

        return new JsonResponse($data);
    }
}