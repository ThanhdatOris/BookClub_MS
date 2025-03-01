<?php

namespace App\Controller;

use App\Entity\Attendance;
use App\Entity\Activities;
use App\Form\AttendanceType;
use App\Repository\AttendanceRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\MemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/attendance')]
final class AttendanceController extends AbstractController
{
    #[Route('/', name: 'app_attendance_index', methods: ['GET'])]
    public function index(Request $request, ActivitiesRepository $activitiesRepository, AttendanceRepository $attendanceRepository): Response
    {
        if ($request->isXmlHttpRequest()) {
            $activities = $activitiesRepository->findAll();
            $data = [];

            foreach ($activities as $activity) {
                // Đếm số lượng người tham gia từ bảng Attendance
                $participantCount = $attendanceRepository->count(['activity' => $activity]);

                $data[] = [
                    'id' => $activity->getId(),
                    'title' => $activity->getTitle(),
                    'participant_count' => $participantCount,
                ];
            }

            return new JsonResponse(['data' => $data]);
        }

        // Nếu không phải yêu cầu Ajax, trả về trang index như bình thường
        return $this->render('attendance/index.html.twig');
    }

    // Action để trả về danh sách người tham gia của một hoạt động
    #[Route('/participants/{id}', name: 'app_attendance_participants', methods: ['GET'])]
    public function participants(int $id, AttendanceRepository $attendanceRepository): JsonResponse
    {
        // Tìm các bản ghi Attendance của hoạt động cụ thể
        $attendances = $attendanceRepository->findBy(['activity' => $id]);
    
        $data = [];
        foreach ($attendances as $attendance) {
            // Lấy danh sách thành viên từ quan hệ ManyToMany
            foreach ($attendance->getMembers() as $member) {
                $data[] = [
                    'attendance_id' => $attendance->getId(),
                    'member_id' => $member->getId(),
                    'member_name' => $member->getName(), // Giả sử Members có phương thức getName()
                    'check_in_time' => $attendance->getCheckInTime() ? $attendance->getCheckInTime()->format('Y-m-d H:i:s') : null,
                    'checked_in' => $attendance->isCheckedIn(),
                ];
            }
        }
    
        return new JsonResponse(['data' => $data]);
    }

    // Action để tick hoặc bỏ tick điểm danh
    #[Route('/toggle/{id}', name: 'app_attendance_toggle', methods: ['POST'])]
    public function toggle(Request $request, Attendance $attendance, EntityManagerInterface $entityManager): JsonResponse
    {
        if ($this->isCsrfTokenValid('toggle_attendance', $request->request->get('_token'))) {
            $checkedIn = filter_var($request->request->get('checked_in'), FILTER_VALIDATE_BOOLEAN);
    
            // Cập nhật trạng thái điểm danh
            $attendance->setCheckedIn($checkedIn);
            $attendance->setCheckInTime($checkedIn ? new \DateTime() : null); // Cập nhật thời gian nếu cần
            $entityManager->flush();
    
            return new JsonResponse(['status' => 'success']);
        }
    
        return new JsonResponse(['status' => 'error'], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/activity/{id}', name: 'app_attendance_activity', methods: ['GET'])]
    public function activity(Activities $activity, AttendanceRepository $attendanceRepository): Response
    {
        $attendances = $attendanceRepository->findBy(['activity' => $activity]);

        return $this->render('attendance/activity.html.twig', [
            'activity' => $activity,
            'attendances' => $attendances,
        ]);
    }

    #[Route('/new', name: 'app_attendance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attendance = new Attendance();
        $form = $this->createForm(AttendanceType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $attendance->setCheckInTime(new \DateTime());
            $entityManager->persist($attendance);
            $entityManager->flush();

            return $this->redirectToRoute('app_attendance_activity', ['id' => $attendance->getActivity()->getId()]);
        }

        return $this->render('attendance/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_attendance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Attendance $attendance, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AttendanceType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_attendance_activity', ['id' => $attendance->getActivity()->getId()]);
        }

        return $this->render('attendance/edit.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_attendance_delete', methods: ['POST'])]
    public function delete(Request $request, Attendance $attendance, EntityManagerInterface $entityManager): Response
    {
        $activityId = $attendance->getActivity()->getId();

        if ($this->isCsrfTokenValid('delete'.$attendance->getId(), $request->get('_token'))) {
            $entityManager->remove($attendance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_attendance_activity', ['id' => $activityId]);
    }

    #[Route('/add', name: 'app_attendance_add', methods: ['POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager, ActivitiesRepository $activitiesRepository, MemberRepository $memberRepository): JsonResponse
    {
        if ($this->isCsrfTokenValid('add_attendance', $request->request->get('_token'))) {
            $activityId = $request->request->get('activity_id');
            $memberId = $request->request->get('member_id');

            $activity = $activitiesRepository->find($activityId);
            $member = $memberRepository->find($memberId);

            if ($activity && $member) {
                $attendance = new Attendance();
                $attendance->setActivity($activity);
                $attendance->addMember($member);
                $attendance->setCheckedIn(false);

                $entityManager->persist($attendance);
                $entityManager->flush();

                return new JsonResponse(['status' => 'success']);
            }
        }

        return new JsonResponse(['status' => 'error'], Response::HTTP_BAD_REQUEST);
    }
}
