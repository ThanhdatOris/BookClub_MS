<?php

namespace App\Controller;

use App\Entity\Activities;
use App\Form\ActivitiesType;
use App\Repository\ActivitiesRepository;
use App\Service\ActivityManagerService;
use App\Service\ImageService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

#[Route('/activities')]
final class ActivitiesController extends AbstractController
{
    private $imageService;
    private $activityManager;
    private $logger;

    public function __construct(ImageService $imageService, ActivityManagerService $activityManager, LoggerInterface $logger)
    {
        $this->imageService = $imageService;
        $this->activityManager = $activityManager;
        $this->logger = $logger;
    }

    #[Route('/', name: 'app_activities_index', methods: ['GET'])]
    public function index(Request $request, ActivitiesRepository $activitiesRepository, PaginatorInterface $paginator): Response
    {
        $search = $request->query->get('search');
        $status = $request->query->get('status');

        // Fetch paginated activities with participants loaded to avoid N+1
        $queryBuilder = $activitiesRepository->getFilteredActivitiesQueryBuilder($search, $status);
        $activities = $paginator->paginate($queryBuilder->getQuery(), $request->query->getInt('page', 1), 10);

        $stats = $activitiesRepository->getActivitiesStatistics();

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
            'addActivityForm' => $addActivityForm->createView(),
            'editActivityForms' => $editActivityForms,
            'totalActivities' => $stats['total'],
            'pendingActivities' => $stats['pending'],
            'ongoingActivities' => $stats['ongoing'],
            'completedActivities' => $stats['completed'],
            'cancelledActivities' => $stats['cancelled'],
            'search' => $search,
            'status' => $status,
        ]);
    }

    #[Route('/{id}/cancel', name: 'app_activities_cancel', methods: ['POST'])]
    public function cancel(Request $request, Activities $activity): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('cancel' . $activity->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $this->activityManager->cancelActivity($activity);
                $this->addFlash('success', 'Hủy hoạt động thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
            } catch (\Exception $e) {
                $this->logger->error('Cancel Error: ' . $e->getMessage());
                return new JsonResponse(['error' => 'Có lỗi xảy ra khi hủy.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/{id}/participants', name: 'app_activities_participants', methods: ['GET'])]
    public function participants(Activities $activity): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return new JsonResponse(
            ['success' => true] + $this->activityManager->getParticipantsWithAttendance($activity)
        );
    }

    #[Route('/attendance/toggle', name: 'app_activities_attendance_toggle', methods: ['POST'])]
    public function toggleAttendance(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $data = json_decode($request->getContent(), true);
        if (!$data || !isset($data['activity_id'], $data['user_id'], $data['status'])) {
            return new JsonResponse(['error' => 'Dữ liệu không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $status = $this->activityManager->toggleAttendance($data['activity_id'], $data['user_id'], $data['status'], $this->getUser());
            return new JsonResponse(['success' => true, 'newStatus' => $status]);
        } catch (\InvalidArgumentException $e) {
            return new JsonResponse(['error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        } catch (\Exception $e) {
            $this->logger->error('Toggle Attendance Error: ' . $e->getMessage());
            return new JsonResponse(['error' => 'Có lỗi hệ thống xảy ra.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/new', name: 'app_activities_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $activity = new Activities();
        $form = $this->createForm(ActivitiesType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                try {
                    $this->imageService->validateImage($imageFile);
                    $activity->setImage($this->imageService->upload($imageFile));
                } catch (\Exception $e) {
                    return $this->handleFormError($request, 'Lỗi khi tải lên ảnh: ' . $e->getMessage());
                }
            }

            $activity->setCreatedBy($this->getUser());
            $activity->setCreatedAt(new \DateTime());
            $activity->setUpdatedAt(new \DateTime());

            try {
                $entityManager->persist($activity);
                $entityManager->flush();
                return $this->handleFormSuccess($request, 'Thêm hoạt động thành công!');
            } catch (\Exception $e) {
                $this->logger->error('New Activity Error: ' . $e->getMessage());
                return $this->handleFormError($request, 'Lỗi khi lưu hoạt động.');
            }
        }

        return $this->handleFormError($request, 'Vui lòng kiểm tra lại thông tin nhập vào.');
    }

    #[Route('/{id}/edit', name: 'app_activities_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activities $activity, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(ActivitiesType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                try {
                    if ($activity->getImage()) {
                        $this->imageService->delete($activity->getImage());
                    }
                    $this->imageService->validateImage($imageFile);
                    $activity->setImage($this->imageService->upload($imageFile));
                } catch (\Exception $e) {
                    $this->addFlash('error', $e->getMessage());
                    return $this->redirectToRoute('app_activities_edit', ['id' => $activity->getId()]);
                }
            }

            $activity->setUpdatedAt(new \DateTime());
            $entityManager->flush();
            $this->addFlash('success', 'Cập nhật hoạt động thành công!');
            return $this->redirectToRoute('app_activities_index');
        }

        return $this->render('activities/edit.html.twig', [
            'activity' => $activity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activities_delete', methods: ['POST'])]
    public function delete(Request $request, Activities $activity, EntityManagerInterface $entityManager): JsonResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete' . $activity->getId(), $request->getPayload()->getString('_token'))) {
            if ($activity->getImage()) {
                $this->imageService->delete($activity->getImage());
            }
            try {
                $entityManager->remove($activity);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa hoạt động thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
            } catch (\Exception $e) {
                $this->logger->error('Delete Activity Error: ' . $e->getMessage());
                return new JsonResponse(['error' => 'Lỗi hệ thống khi xóa.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
        return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/{id}/join', name: 'activity_join', methods: ['POST'])]
    public function joinActivity(Request $request, Activities $activity): JsonResponse
    {
        if (!$this->getUser()) {
            return $this->json(['success' => false, 'error' => 'Bạn cần đăng nhập để tham gia.']);
        }

        if (!$this->isCsrfTokenValid('join' . $activity->getId(), $request->getPayload()->getString('_token'))) {
            return $this->json(['success' => false, 'error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $this->activityManager->joinActivity($activity, $this->getUser());
            return $this->json(['success' => true]);
        } catch (\LogicException $e) {
            return $this->json(['success' => false, 'error' => $e->getMessage()]);
        } catch (\Exception $e) {
            $this->logger->error('Join Activity Error: ' . $e->getMessage());
            return $this->json(['success' => false, 'error' => 'Lỗi hệ thống.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function handleFormSuccess(Request $request, string $message): Response
    {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['success' => true, 'message' => $message, 'redirect' => $this->generateUrl('app_activities_index')]);
        }
        $this->addFlash('success', $message);
        return $this->redirectToRoute('app_activities_index');
    }

    private function handleFormError(Request $request, string $error): Response
    {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['success' => false, 'error' => $error]);
        }
        $this->addFlash('error', $error);
        return $this->redirectToRoute('app_activities_index');
    }
}
