<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\FundsRepository;
use App\Repository\ProposalsRepository;
use App\Repository\ActivityParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    // #[IsGranted('ROLE_MEMBER')] // Chỉ cho phép user có role ROLE_MEMBER trở lên
    public function index(
        Request $request,
        UsersRepository $usersRepository,
        ActivitiesRepository $activitiesRepository,
        FundsRepository $fundsRepository,
        ProposalsRepository $proposalsRepository,
        ActivityParticipantRepository $activityParticipantRepository
    ): Response {
        try {
            // Lấy tham số filter từ request
            $year = $request->query->get('year', (new \DateTime())->format('Y'));
            $month = $request->query->get('month', null);
            $type = $request->query->get('type', null);

            // Tổng số thành viên và hoạt động
            $totalMembers = $usersRepository->count([]);
            $totalActivities = $activitiesRepository->count([]);
            
            // Số hoạt động mới (trong tháng hiện tại)
            $startOfMonth = new \DateTime('first day of this month');
            $newActivities = $activitiesRepository->createQueryBuilder('a')
                ->where('a.created_at >= :startOfMonth')
                ->setParameter('startOfMonth', $startOfMonth)
                ->select('COUNT(a.id)')
                ->getQuery()
                ->getSingleScalarResult();

            // Tính toán số dư quỹ
            // Tổng thu
            $totalIncome = $fundsRepository->createQueryBuilder('f')
                ->select('COALESCE(SUM(f.amount), 0)')
                ->where('f.transactionType = :incomeType')
                ->setParameter('incomeType', 'income')
                ->getQuery()
                ->getSingleScalarResult() ?? 0;

            // Tổng chi
            $totalExpense = $fundsRepository->createQueryBuilder('f')
                ->select('COALESCE(SUM(ABS(f.amount)), 0)')
                ->where('f.transactionType = :expenseType')
                ->setParameter('expenseType', 'expense')
                ->getQuery()
                ->getSingleScalarResult() ?? 0;

            // Số dư = Tổng thu - Tổng chi
            $balance = $totalIncome - $totalExpense;
            
            // Số lượt tham gia hoạt động
            $participationCount = $activityParticipantRepository->count([]);
            
            // Dữ liệu cho biểu đồ biến động quỹ
            $qbChart = $fundsRepository->createQueryBuilder('f')
                ->where('YEAR(f.date) = :year')
                ->setParameter('year', $year);

            if ($month) {
                $qbChart->andWhere('MONTH(f.date) = :month')
                   ->setParameter('month', $month);
            }

            if ($type === 'income') {
                $qbChart->andWhere('f.amount > 0');
            } elseif ($type === 'expense') {
                $qbChart->andWhere('f.amount < 0');
            }

            $fundsByMonth = $qbChart
                ->select("MONTH(f.date) as month, 
                         SUM(CASE WHEN f.amount > 0 THEN f.amount ELSE 0 END) as income,
                         SUM(CASE WHEN f.amount < 0 THEN ABS(f.amount) ELSE 0 END) as expense")
                ->groupBy('month')
                ->getQuery()
                ->getResult();

            // Khởi tạo mảng dữ liệu cho biểu đồ
            $fundLabels = [];
            $incomeData = array_fill(1, 12, 0);
            $expenseData = array_fill(1, 12, 0);

            foreach (range(1, 12) as $m) {
                $fundLabels[] = (new \DateTime("$year-$m-01"))->format('M');
            }

            foreach ($fundsByMonth as $fund) {
                $incomeData[$fund['month']] = (float) $fund['income'];
                $expenseData[$fund['month']] = (float) $fund['expense'];
            }
            
            // Các hoạt động gần đây (cho carousel)
            $recentActivities = $activitiesRepository->createQueryBuilder('a')
                ->where('a.image IS NOT NULL')
                ->orderBy('a.created_at', 'DESC')
                ->setMaxResults(5)
                ->getQuery()
                ->getResult();
            
            // Đề xuất đang chờ xử lý
            $pendingProposals = $proposalsRepository->findBy(
                ['status' => 'pending'], 
                ['created_at' => 'DESC'], 
                5
            );
            
            // Danh sách năm cho filter
            $years = $fundsRepository->createQueryBuilder('f')
                ->select('DISTINCT YEAR(f.date) as year')
                ->orderBy('year', 'DESC')
                ->getQuery()
                ->getArrayResult();

            return $this->render('dashboard/index.html.twig', [
                'user' => $this->getUser(),
                'balance' => $balance,
                'totalIncome' => $totalIncome,
                'totalExpense' => $totalExpense,
                'totalMembers' => $totalMembers,
                'totalActivities' => $totalActivities,
                'newActivities' => $newActivities,
                'participationCount' => $participationCount,
                'fundLabels' => $fundLabels,
                'incomeData' => array_values($incomeData),
                'expenseData' => array_values($expenseData),
                'recentActivities' => $recentActivities,
                'pendingProposals' => $pendingProposals,
                'years' => array_column($years, 'year'),
                'currentYear' => $year,
                'currentMonth' => $month,
                'currentType' => $type
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Có lỗi xảy ra khi tải dashboard: ' . $e->getMessage());
            return $this->redirectToRoute('app_dashboard');
        }
    }
}