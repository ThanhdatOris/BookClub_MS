<?php

namespace App\Controller;

use App\Entity\Activities;
use App\Entity\ActivityParticipant;
use App\Repository\ActivityParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/activity_participant')]
final class ActivityParticipantController extends AbstractController
{
    #[Route('/{activityId}', name: 'app_activity_participant_index', methods: ['GET'])]
    public function index(int $activityId, ActivityParticipantRepository $participantRepository, EntityManagerInterface $entityManager): Response
    {
        $activity = $entityManager->getRepository(Activities::class)->find($activityId);
        if (!$activity) {
            throw $this->createNotFoundException('Hoạt động không tồn tại.');
        }

        $participants = $participantRepository->createQueryBuilder('ap')
            ->where('ap.activityId = :activityId')
            ->setParameter('activityId', $activityId)
            ->orderBy('ap.joinedAt', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('activity_participant/index.html.twig', [
            'activity' => $activity,
            'participants' => $participants,
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

        $existingParticipant = $participantRepository->findByActivityAndUser($activityId, $user->getId());
        if ($existingParticipant) {
            $this->addFlash('error', 'Bạn đã tham gia hoạt động này rồi.');
            return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
        }

        if (!$this->isCsrfTokenValid('join' . $activityId, $request->request->get('_token'))) {
            $this->addFlash('error', 'CSRF token không hợp lệ.');
            return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
        }

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

        $participant = $participantRepository->findByActivityAndUser($activityId, $user->getId());
        if (!$participant) {
            $this->addFlash('error', 'Bạn chưa tham gia hoạt động này.');
            return $this->redirectToRoute('app_activities_show', ['id' => $activityId]);
        }

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

        $participant = $entityManager->getRepository(ActivityParticipant::class)->find($id);
        if (!$participant) {
            return new JsonResponse(['error' => 'Người tham gia không tồn tại.'], Response::HTTP_NOT_FOUND);
        }

        if ($this->isCsrfTokenValid('delete' . $id, $request->request->get('_token'))) {
            try {
                $activityId = $participant->getActivityId()->getId();
                $entityManager->remove($participant);
                $entityManager->flush();
                $this->addFlash('success', 'Xóa người tham gia thành công!');
                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_activities_index')]);
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'CSRF token không hợp lệ.'], Response::HTTP_BAD_REQUEST);
    }
}