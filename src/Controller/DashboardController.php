<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\FundsRepository;
use App\Repository\ProposalsRepository;
use App\Repository\ActivityParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(
        UsersRepository $usersRepository,
        ActivitiesRepository $activitiesRepository,
        FundsRepository $fundsRepository,
        ProposalsRepository $proposalsRepository,
        ActivityParticipantRepository $activityParticipantRepository
    ): Response {
        // Tổng số thành viên
        $totalMembers = $usersRepository->count([]);

        // Tổng số hoạt động
        $totalActivities = $activitiesRepository->count([]);

        // Số hoạt động mới (trong tháng hiện tại)
        $startOfMonth = new \DateTime('first day of this month');
        $newActivities = $activitiesRepository->createQueryBuilder('a')
            ->where('a.created_at >= :startOfMonth')
            ->setParameter('startOfMonth', $startOfMonth)
            ->select('COUNT(a.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Tổng quỹ
        $totalFunds = $fundsRepository->createQueryBuilder('f')
            ->select('SUM(f.amount)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        $participationCount = $activityParticipantRepository->createQueryBuilder('a')
            ->select('COUNT(ap.id)')
            ->leftJoin('a.user_id', 'ap')
            ->getQuery()
            ->getSingleScalarResult();

        // Dữ liệu cho biểu đồ biến động quỹ (theo tháng trong năm hiện tại)
        $fundLabels = [];
        $fundData = [];
        $currentYear = (new \DateTime())->format('Y');
        for ($month = 1; $month <= 12; $month++) {
            $startDate = new \DateTime("$currentYear-$month-01");
            $endDate = (clone $startDate)->modify('last day of this month');
            $fundAmount = $fundsRepository->createQueryBuilder('f')
                ->select('SUM(f.amount)')
                ->where('f.date >= :startDate AND f.date <= :endDate')
                ->setParameter('startDate', $startDate)
                ->setParameter('endDate', $endDate)
                ->getQuery()
                ->getSingleScalarResult() ?? 0;
            $fundLabels[] = $startDate->format('M');
            $fundData[] = $fundAmount;
        }

        // Các hoạt động gần đây (cho carousel)
        $recentActivities = $activitiesRepository->findBy([], ['created_at' => 'DESC'], 3);

        // Đề xuất đang chờ xử lý
        $pendingProposals = $proposalsRepository->findBy(['status' => 'pending'], ['created_at' => 'DESC'], 5);

        return $this->render('dashboard/index.html.twig', [
            'totalFunds' => $totalFunds,
            'totalMembers' => $totalMembers,
            'newActivities' => $newActivities,
            'participationCount' => $participationCount,
            'fundLabels' => $fundLabels,
            'fundData' => $fundData,
            'recentActivities' => $recentActivities,
            'pendingProposals' => $pendingProposals,
        ]);
    }
}