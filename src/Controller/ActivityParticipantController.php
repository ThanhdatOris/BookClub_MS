<?php

namespace App\Controller;

use App\Entity\Activities;
use App\Entity\ActivityParticipant;
use App\Repository\ActivityParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/activity_participant')]
final class ActivityParticipantController extends AbstractController
{
    #[Route('/{activityId}', name: 'app_activity_participant_index', methods: ['GET'])]
    public function index(int $activityId, Request $request, ActivityParticipantRepository $participantRepository, PaginatorInterface $paginator): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được quản lý người tham gia.');
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được quản lý người tham gia.');

        $activity = $this->getDoctrine()->getRepository(Activities::class)->find($activityId);
        if (!$activity) {
            throw $this->createNotFoundException('Hoạt động không tồn tại.');
        }

        $query = $participantRepository->createQueryBuilder('ap')
            ->where('ap.activityId = :activityId')
            ->setParameter('activityId', $activityId)
            ->orderBy('ap.joinedAt', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // Số bản ghi mỗi trang
        );

        return $this->render('activity_participant/index.html.twig', [
            'activity' => $activity,
            'participants' => $pagination,
        ]);
    }

    #[Route('/join/{activityId}', name: 'app_activity_participant_join', methods: ['POST'])]
    public function join(int $activityId, Request $request, EntityManagerInterface $entityManager, ActivityParticipantRepository $participantRepository): Response
    {
        $activity = $entityManager->getRepository(Activities::class)->find($activityId);
        if (!$activity) {
            throw $this->createNotFoundException('Hoạt động không tồn tại.');
        }

        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Bạn cần đăng nhập để tham gia hoạt động.');
        }

        // Kiểm tra xem user đã tham gia chưa
        $existingParticipant = $participantRepository->findByActivityAndUser($activityId, $user->getId());
        if ($existingParticipant) {
            $this->addFlash('error', 'Bạn đã tham gia hoạt động này rồi.');
            return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
        }

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('join' . $activityId, $request->request->get('_token'))) {
            $this->addFlash('error', 'CSRF token không hợp lệ.');
            return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
        }

        // Tạo bản ghi tham gia
        $participant = new ActivityParticipant();
        $participant->setActivityId($activity);
        $participant->setUserId($user);
        $participant->setJoinedAt(new \DateTime());
        $participant->setStatus('confirmed');

        try {
            $entityManager->persist($participant);
            $entityManager->flush();
            $this->addFlash('success', 'Tham gia hoạt động thành công!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Có lỗi xảy ra khi tham gia hoạt động: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
    }

    #[Route('/leave/{activityId}', name: 'app_activity_participant_leave', methods: ['POST'])]
    public function leave(int $activityId, Request $request, EntityManagerInterface $entityManager, ActivityParticipantRepository $participantRepository): Response
    {
        $activity = $entityManager->getRepository(Activities::class)->find($activityId);
        if (!$activity) {
            throw $this->createNotFoundException('Hoạt động không tồn tại.');
        }

        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Bạn cần đăng nhập để hủy tham gia hoạt động.');
        }

        // Kiểm tra xem user đã tham gia chưa
        $participant = $participantRepository->findByActivityAndUser($activityId, $user->getId());
        if (!$participant) {
            $this->addFlash('error', 'Bạn chưa tham gia hoạt động này.');
            return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
        }

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('leave' . $activityId, $request->request->get('_token'))) {
            $this->addFlash('error', 'CSRF token không hợp lệ.');
            return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
        }

        try {
            $entityManager->remove($participant);
            $entityManager->flush();
            $this->addFlash('success', 'Hủy tham gia hoạt động thành công!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Có lỗi xảy ra khi hủy tham gia: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
    }

    #[Route('/delete/{id}', name: 'app_activity_participant_delete', methods: ['POST'])]
    public function delete(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin hoặc Treasurer mới được xóa người tham gia.');
        $this->denyAccessUnlessGranted('ROLE_TREASURER', null, 'Chỉ có Admin hoặc Treasurer mới được xóa người tham gia.');

        $participant = $entityManager->getRepository(ActivityParticipant::class)->find($id);
        if (!$participant) {
            throw $this->createNotFoundException('Người tham gia không tồn tại.');
        }

        if ($this->isCsrfTokenValid('delete' . $id, $request->request->get('_token'))) {
            try {
                $activityId = $participant->getActivityId()->getId();
                $entityManager->remove($participant);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa người tham gia thành công!');
                return $this->redirectToRoute('app_activity_participant_index', ['activityId' => $activityId]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Có lỗi xảy ra khi xóa người tham gia: ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'CSRF token không hợp lệ.');
        }

        return $this->redirectToRoute('app_activity_participant_index', ['activityId' => $participant->getActivityId()->getId()]);
    }
}