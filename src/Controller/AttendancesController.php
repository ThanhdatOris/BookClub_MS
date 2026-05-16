<?php

namespace App\Controller;

use App\Entity\Activities;
use App\Entity\Attendances;
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

#[Route('/attendances')]
final class AttendancesController extends AbstractController
{
    #[Route(name: 'app_attendances_index', methods: ['GET'])]
    public function index(ActivitiesRepository $activitiesRepository, AttendancesRepository $attendancesRepository, ActivityParticipantRepository $participantRepository): Response
    {
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

        // Đảm bảo addAttendanceForm được tạo và truyền vào template
        $addAttendance = new Attendances();
        $addAttendanceForm = $this->createForm(AttendancesType::class, $addAttendance, [
            'action' => $this->generateUrl('app_attendances_new'),
            'method' => 'POST',
        ]);

        return $this->render('activities/index.html.twig', [
            'activities' => $activities,
            'activityParticipants' => $activityParticipants,
            'attendances' => $attendances,
            'addActivityForm' => $this->createForm(\App\Form\ActivitiesType::class, new Activities())->createView(),
            'editActivityForms' => array_map(fn($activity) => $this->createForm(\App\Form\ActivitiesType::class, $activity)->createView(), array_combine(array_map(fn($a) => $a->getId(), $activities), $activities)),
            'addAttendanceForm' => $addAttendanceForm->createView(),
        ]);
    }

    #[Route('/new', name: 'app_attendances_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attendance = new Attendances();
        $attendance->setMarkedBy($this->getUser());
        $attendance->setMarkedAt(new \DateTime());

        $form = $this->createForm(AttendancesType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($attendance);
                $entityManager->flush();
                $this->addFlash('success', 'Thêm điểm danh thành công!');
                return new JsonResponse(['success' => true]);
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

    #[Route('/{id}', name: 'app_attendances_show', methods: ['GET'])]
    public function show(Attendances $attendance): Response
    {
        return $this->render('attendances/show.html.twig', [
            'attendance' => $attendance,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_attendances_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Attendances $attendance, EntityManagerInterface $entityManager): Response
    {
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
        $this->denyAccessUnlessGranted('DELETE', $attendance, 'Bạn không có quyền xóa điểm danh này.');

        if ($this->isCsrfTokenValid('delete' . $attendance->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($attendance);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa điểm danh thành công!');
                return new JsonResponse(['success' => true]);
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/by_activity/{activityId}', name: 'app_attendances_by_activity', methods: ['GET'])]
    public function byActivity(int $activityId, AttendancesRepository $attendancesRepository): Response
    {
        $attendances = $attendancesRepository->createQueryBuilder('a')
            ->where('a.activity_id = :activityId')
            ->setParameter('activityId', $activityId)
            ->orderBy('a.marked_at', 'DESC')
            ->getQuery()
            ->getResult();

        $data = array_map(function ($attendance) {
            return [
                'userName' => $attendance->getUserId()->getName(),
                'status' => $attendance->getStatus(),
                'remark' => $attendance->getRemark() ?? 'N/A',
                'markedAt' => $attendance->getMarkedAt()->format('Y-m-d H:i:s'),
                'markedBy' => $attendance->getMarkedBy()->getName(),
                'actions' => '
                    <a href="' . $this->generateUrl('app_attendances_show', ['id' => $attendance->getId()]) . '" class="btn btn-sm btn-info mb-0" onclick="event.stopPropagation();">Xem</a>
                    <button type="button" class="btn btn-sm btn-danger mb-0 delete-btn" data-id="' . $attendance->getId() . '" data-csrf-token="' . $this->container->get('security.csrf.token_manager')->getToken('delete' . $attendance->getId()) . '" onclick="event.stopPropagation();">Xóa</button>
                '
            ];
        }, $attendances);

        return new JsonResponse($data);
    }
}
