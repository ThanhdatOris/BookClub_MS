<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Activities;
use App\Entity\Attendances;
use App\Form\ActivitiesType;
use App\Repository\ActivitiesRepository;
use App\Repository\ActivityParticipantRepository;
use App\Repository\AttendancesRepository;
use App\Entity\ActivityParticipant;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\ImageService;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/activities')]
final class ActivitiesController extends AbstractController
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    #[Route('/', name: 'app_activities_index', methods: ['GET'])]
    public function index(Request $request, ActivitiesRepository $activitiesRepository, ActivityParticipantRepository $participantRepository, PaginatorInterface $paginator): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được truy cập trang này.');

        $search = $request->query->get('search');
        $status = $request->query->get('status');
        
        $queryBuilder = $activitiesRepository->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC');

        if ($search) {
            $queryBuilder->andWhere('a.title LIKE :search OR a.location LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($status && in_array($status, ['planned', 'ongoing', 'completed', 'cancelled'], true)) {
            $queryBuilder->andWhere('a.status = :status')
                ->setParameter('status', $status);
        }

        $activities = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        $totalActivities = $activitiesRepository->count([]);
        $pendingActivities = $activitiesRepository->count(['status' => 'planned']);
        $ongoingActivities = $activitiesRepository->count(['status' => 'ongoing']);
        $completedActivities = $activitiesRepository->count(['status' => 'completed']);
        $cancelledActivities = $activitiesRepository->count(['status' => 'cancelled']);

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
            'totalActivities' => $totalActivities,
            'pendingActivities' => $pendingActivities,
            'ongoingActivities' => $ongoingActivities,
            'completedActivities' => $completedActivities,
            'cancelledActivities' => $cancelledActivities,
            'search' => $search,
            'status' => $status,
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
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được xem danh sách người tham gia.');

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

    #[Route('/new', name: 'app_activities_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // try {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được thêm hoạt động.');

            $activity = new Activities();
            $form = $this->createForm(ActivitiesType::class, $activity);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $imageFile = $form->get('image')->getData();
                    
                    if ($imageFile) {
                        try {
                            $this->imageService->validateImage($imageFile);
                            $fileName = $this->imageService->upload($imageFile);
                            $activity->setImage($fileName);
                        } catch (\Exception $e) {
                            if ($request->isXmlHttpRequest()) {
                                return new JsonResponse(['success' => false, 'error' => 'Lỗi khi tải lên ảnh: ' . $e->getMessage()]);
                            }
                            $this->addFlash('error', 'Lỗi khi tải lên ảnh: ' . $e->getMessage());
                            return $this->redirectToRoute('app_activities_index');
                        }
                    }

                    $activity->setCreatedBy($this->getUser());
                    $activity->setCreatedAt(new \DateTime());
                    $activity->setUpdatedAt(new \DateTime());

                    try {
                        $entityManager->persist($activity);
                        $entityManager->flush();

                        if ($request->isXmlHttpRequest()) {
                            return new JsonResponse([
                                'success' => true,
                                'message' => 'Thêm hoạt động thành công!',
                                'redirect' => $this->generateUrl('app_activities_index')
                            ]);
                        }

                        $this->addFlash('success', 'Thêm hoạt động thành công!');
                        return $this->redirectToRoute('app_activities_index');
                    } catch (\Exception $e) {
                        if ($request->isXmlHttpRequest()) {
                            return new JsonResponse(['success' => false, 'error' => 'Lỗi khi lưu hoạt động: ' . $e->getMessage()]);
                        }
                        $this->addFlash('error', 'Lỗi khi lưu hoạt động: ' . $e->getMessage());
                    }
                } else {
                    $errors = [];
                    foreach ($form->getErrors(true) as $error) {
                        $errors[] = $error->getMessage();
                    }
                    
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse([
                            'success' => false,
                            'error' => 'Vui lòng kiểm tra lại thông tin nhập vào.',
                            'errors' => $errors
                        ]);
                    }
                    
                    $this->addFlash('error', 'Vui lòng kiểm tra lại thông tin nhập vào.');
                }
            }

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['success' => false, 'error' => 'Yêu cầu không hợp lệ.']);
            }

            return $this->redirectToRoute('app_activities_index');
        // } catch (\Exception $e) {
        //     if ($request->isXmlHttpRequest()) {
        //         return new JsonResponse(['success' => false, 'error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        //     }
        //     $this->addFlash('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        //     return $this->redirectToRoute('app_activities_index');
        // }
    }

    #[Route('/{id}/edit', name: 'app_activities_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activities $activity, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ admin mới được chỉnh sửa hoạt động.');

        $form = $this->createForm(ActivitiesType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            
            if ($imageFile) {
                try {
                    // Delete old image if exists
                    if ($activity->getImage()) {
                        $this->imageService->delete($activity->getImage());
                    }
                    
                    $this->imageService->validateImage($imageFile);
                    $fileName = $this->imageService->upload($imageFile);
                    $activity->setImage($fileName);
                } catch (\Exception $e) {
                    $this->addFlash('error', $e->getMessage());
                    return $this->redirectToRoute('app_activities_edit', ['id' => $activity->getId()]);
                }
            }

            $activity->setUpdatedAt(new \DateTime());

            try {
                $entityManager->flush();
                $this->addFlash('success', 'Cập nhật hoạt động thành công!');
                return $this->redirectToRoute('app_activities_index');
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return $this->render('activities/edit.html.twig', [
            'activity' => $activity,
            'form' => $form,
        ]);
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
            // Delete image if exists
            if ($activity->getImage()) {
                $this->imageService->delete($activity->getImage());
            }
            
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

    #[Route('/{id}/join', name: 'activity_join', methods: ['POST'])]
    public function joinActivity(Request $request, Activities $activity, EntityManagerInterface $em, ActivityParticipantRepository $participantRepository): JsonResponse
    {
        if ($activity->getStatus() !== 'planned') {
            return $this->json(['success' => false, 'error' => 'Chỉ có thể tham gia hoạt động đang lên kế hoạch.']);
        }

        $user = $this->getUser();
        if (!$user) {
            return $this->json(['success' => false, 'error' => 'Bạn cần đăng nhập để tham gia.']);
        }

        if (!$this->isCsrfTokenValid('join' . $activity->getId(), $request->getPayload()->getString('_token'))) {
            return $this->json(['success' => false, 'error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        // Kiểm tra người dùng đã tham gia chưa
        $existingParticipant = $participantRepository->findByActivityAndUser($activity->getId(), $user->getId());
        if ($existingParticipant) {
            return $this->json(['success' => false, 'error' => 'Bạn đã tham gia hoạt động này.']);
        }

        try {
            $participant = new ActivityParticipant();
            $participant->setActivityId($activity);
            $participant->setUserId($user);
            $participant->setJoinedAt(new \DateTime());
            $participant->setStatus('confirmed'); // Giả định có cột status
            $em->persist($participant);
            $em->flush();
            return $this->json(['success' => true]);
        } catch (\Exception $e) {
            return $this->json(['success' => false, 'error' => 'Lỗi khi tham gia: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
