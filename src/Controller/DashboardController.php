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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    // #[IsGranted('ROLE_MEMBER')] // Chỉ cho phép user có role ROLE_MEMBER trở lên
    public function index(
        UsersRepository $usersRepository,
        ActivitiesRepository $activitiesRepository,
        FundsRepository $fundsRepository,
        ProposalsRepository $proposalsRepository,
        ActivityParticipantRepository $activityParticipantRepository
    ): Response {
        try {
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

            // Số lượt tham gia hoạt động
            $participationCount = $activityParticipantRepository->createQueryBuilder('ap')
                ->select('COUNT(ap.id)')
                ->getQuery()
                ->getSingleScalarResult();

            // Dữ liệu cho biểu đồ biến động quỹ (theo tháng trong năm hiện tại)
            $currentYear = (new \DateTime())->format('Y');
            $fundsByMonth = $fundsRepository->createQueryBuilder('f')
                ->select("MONTH(f.date) as month, SUM(f.amount) as total")
                ->where('YEAR(f.date) = :year')
                ->setParameter('year', $currentYear)
                ->groupBy('month')
                ->getQuery()
                ->getArrayResult();

            // Khởi tạo mảng dữ liệu cho biểu đồ
            $fundLabels = [];
            $fundData = array_fill(1, 12, 0); // Khởi tạo mảng 12 tháng với giá trị 0
            foreach (range(1, 12) as $month) {
                $fundLabels[] = (new \DateTime("$currentYear-$month-01"))->format('M');
            }
            foreach ($fundsByMonth as $fund) {
                $fundData[$fund['month']] = (float) $fund['total']; // Chuyển sang float để biểu đồ hiển thị đúng
            }

            // Các hoạt động gần đây (cho carousel)
            $recentActivities = $activitiesRepository->findBy([], ['created_at' => 'DESC'], 3);

            // Đề xuất đang chờ xử lý
            $pendingProposals = $proposalsRepository->findBy(['status' => 'pending'], ['created_at' => 'DESC'], 5);

            return $this->render('dashboard/index.html.twig', [
                'user' => $this->getUser(),
                'totalFunds' => $totalFunds,
                'totalMembers' => $totalMembers,
                'totalActivities' => $totalActivities,
                'newActivities' => $newActivities,
                'participationCount' => $participationCount,
                'fundLabels' => $fundLabels,
                'fundData' => array_values($fundData), // Đảm bảo mảng là tuần tự
                'recentActivities' => $recentActivities,
                'pendingProposals' => $pendingProposals,
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Có lỗi xảy ra khi tải dashboard: ' . $e->getMessage());
            return $this->render('dashboard/index.html.twig', [
                'user' => $this->getUser(),
                'totalFunds' => 0,
                'totalMembers' => 0,
                'totalActivities' => 0,
                'newActivities' => 0,
                'participationCount' => 0,
                'fundLabels' => [],
                'fundData' => [],
                'recentActivities' => [],
                'pendingProposals' => [],
            ]);
        }
    }
}