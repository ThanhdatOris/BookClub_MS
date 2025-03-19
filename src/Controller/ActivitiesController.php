<?php

namespace App\Controller;

use App\Entity\Activities;
use App\Repository\ActivitiesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/activities')]
final class ActivitiesController extends AbstractController
{
    #[Route(name: 'app_activities_index', methods: ['GET'])]
    public function index(Request $request, ActivitiesRepository $activitiesRepository, PaginatorInterface $paginator): Response
    {
        $query = $activitiesRepository->createQueryBuilder('a')
            ->orderBy('a.created_at', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // Số bản ghi mỗi trang
        );

        return $this->render('activities/index.html.twig', [
            'activities' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_activities_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activity = new Activities();
        $activity->setCreatedBy($this->getUser());
        $activity->setCreatedAt(new \DateTime());
        $activity->setUpdatedAt(new \DateTime());

        // Lấy dữ liệu từ form
        $title = $request->request->get('title');
        $description = $request->request->get('description');
        $date = $request->request->get('date');
        $time = $request->request->get('time');
        $location = $request->request->get('location');
        $status = $request->request->get('status');
        $imageFile = $request->files->get('image');

        // Validate dữ liệu
        if (empty($title)) {
            return new JsonResponse(['error' => 'Tiêu đề không được để trống.'], Response::HTTP_BAD_REQUEST);
        }
        if (!in_array($status, ['planned', 'ongoing', 'completed', 'cancelled'])) {
            return new JsonResponse(['error' => 'Trạng thái không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if ($date && !\DateTime::createFromFormat('Y-m-d', $date)) {
            return new JsonResponse(['error' => 'Ngày không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if ($time && !\DateTime::createFromFormat('H:i', $time)) {
            return new JsonResponse(['error' => 'Thời gian không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        // Gán dữ liệu
        $activity->setTitle($title);
        $activity->setDescription($description);
        $activity->setDate($date ? \DateTime::createFromFormat('Y-m-d', $date) : null);
        $activity->setTime($time ? \DateTime::createFromFormat('H:i', $time) : null);
        $activity->setLocation($location);
        $activity->setStatus($status);

        // Xử lý upload hình ảnh
        if ($imageFile) {
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('activity_images_directory'),
                $newFilename
            );
            $activity->setImage('uploads/activities/' . $newFilename);
        }

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('activity_new', $request->request->get('_token'))) {
            return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
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

    #[Route('/{id}', name: 'app_activities_show', methods: ['GET'])]
    public function show(Activities $activity, ActivityParticipantRepository $participantRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được xem chi tiết hoạt động.');
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được xem chi tiết hoạt động.');
    
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
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được chỉnh sửa hoạt động.');
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được chỉnh sửa hoạt động.');

        // Lấy dữ liệu từ form
        $title = $request->request->get('title');
        $description = $request->request->get('description');
        $date = $request->request->get('date');
        $time = $request->request->get('time');
        $location = $request->request->get('location');
        $status = $request->request->get('status');
        $imageFile = $request->files->get('image');

        // Validate dữ liệu
        if (empty($title)) {
            return new JsonResponse(['error' => 'Tiêu đề không được để trống.'], Response::HTTP_BAD_REQUEST);
        }
        if (!in_array($status, ['planned', 'ongoing', 'completed', 'cancelled'])) {
            return new JsonResponse(['error' => 'Trạng thái không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if ($date && !\DateTime::createFromFormat('Y-m-d', $date)) {
            return new JsonResponse(['error' => 'Ngày không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }
        if ($time && !\DateTime::createFromFormat('H:i', $time)) {
            return new JsonResponse(['error' => 'Thời gian không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        // Gán dữ liệu
        $activity->setTitle($title);
        $activity->setDescription($description);
        $activity->setDate($date ? \DateTime::createFromFormat('Y-m-d', $date) : null);
        $activity->setTime($time ? \DateTime::createFromFormat('H:i', $time) : null);
        $activity->setLocation($location);
        $activity->setStatus($status);
        $activity->setUpdatedAt(new \DateTime());

        // Xử lý upload hình ảnh
        if ($imageFile) {
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('activity_images_directory'),
                $newFilename
            );
            $activity->setImage('uploads/activities/' . $newFilename);
        }

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('activity_edit' . $activity->getId(), $request->request->get('_token'))) {
            return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $entityManager->flush();
            $this->addFlash('success', 'Cập nhật hoạt động thành công!');
            return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/{id}', name: 'app_activities_delete', methods: ['POST'])]
    public function delete(Request $request, Activities $activity, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được xóa hoạt động.');
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được xóa hoạt động.');

        if ($this->isCsrfTokenValid('delete' . $activity->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($activity);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa hoạt động thành công!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Có lỗi xảy ra khi xóa hoạt động: ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'CSRF token không hợp lệ.');
        }

        return $this->redirectToRoute('app_activities_index', [], Response::HTTP_SEE_OTHER);
    }
}