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
use Symfony\Component\HttpFoundation\JsonResponse;

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
            $year = filter_var($request->query->get('year', (new \DateTime())->format('Y')), FILTER_VALIDATE_INT);
            if ($year === false) {
                throw new \InvalidArgumentException('Năm không hợp lệ.');
            }

            // Xử lý tham số tháng
            $monthParam = $request->query->get('month');
            $month = null;
            if ($monthParam !== null && $monthParam !== '') {
                $month = filter_var($monthParam, FILTER_VALIDATE_INT);
                if ($month === false || $month < 1 || $month > 12) {
                    throw new \InvalidArgumentException('Tháng phải nằm trong khoảng từ 1 đến 12.');
                }
            }
            
            $type = $request->query->get('type', '');
            $validTypes = ['income', 'expense', ''];
            if (!in_array($type, $validTypes, true)) {
                throw new \InvalidArgumentException('Loại giao dịch không hợp lệ.');
            }

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
                ->where('f.transaction_type = :type')
                ->setParameter('type', 'income')
                ->getQuery()
                ->getSingleScalarResult() ?? 0;

            // Tổng chi
            $totalExpense = $fundsRepository->createQueryBuilder('f')
                ->select('COALESCE(SUM(ABS(f.amount)), 0)')
                ->where('f.transaction_type = :type')
                ->setParameter('type', 'expense')
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

            if ($month !== null) {
                $qbChart->andWhere('MONTH(f.date) = :month')
                   ->setParameter('month', $month);
            }

            if ($type === 'income') {
                $qbChart->andWhere('f.transaction_type = :type')
                    ->setParameter('type', 'income');
            } elseif ($type === 'expense') {
                $qbChart->andWhere('f.transaction_type = :type')
                    ->setParameter('type', 'expense');
            }

            $fundsByMonth = $qbChart
                ->select("MONTH(f.date) as month, 
                         SUM(CASE WHEN f.transaction_type = 'income' THEN f.amount ELSE 0 END) as income,
                         SUM(CASE WHEN f.transaction_type = 'expense' THEN ABS(f.amount) ELSE 0 END) as expense")
                ->groupBy('month')
                ->orderBy('month', 'ASC')
                ->getQuery()
                ->getResult();

            // Khởi tạo mảng dữ liệu cho biểu đồ
            $fundLabels = [];
            $incomeData = array_fill(0, 12, 0);
            $expenseData = array_fill(0, 12, 0);

            if ($month === null) {
                // Nếu không chọn tháng cụ thể, hiển thị cả 12 tháng
                foreach (range(1, 12) as $m) {
                    $fundLabels[] = (new \DateTime("$year-$m-01"))->format('M Y');
                }
            } else {
                // Nếu chọn tháng cụ thể, chỉ hiển thị tháng đó
                $fundLabels[] = (new \DateTime("$year-$month-01"))->format('M Y');
                $incomeData = [0];
                $expenseData = [0];
            }

            foreach ($fundsByMonth as $fund) {
                if ($month === null) {
                    $monthIndex = $fund['month'] - 1;
                    $incomeData[$monthIndex] = (float) $fund['income'];
                    $expenseData[$monthIndex] = (float) $fund['expense'];
                } else {
                    $incomeData[0] = (float) $fund['income'];
                    $expenseData[0] = (float) $fund['expense'];
                }
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
                'currentType' => $type,
                'error' => null
            ]);
        } catch (\InvalidArgumentException $e) {
            // Log lỗi tham số không hợp lệ
            error_log('Dashboard Parameter Error: ' . $e->getMessage());
            
            return $this->render('dashboard/index.html.twig', [
                'user' => $this->getUser(),
                'balance' => 0,
                'totalIncome' => 0,
                'totalExpense' => 0,
                'totalMembers' => 0,
                'totalActivities' => 0,
                'newActivities' => 0,
                'participationCount' => 0,
                'fundLabels' => [],
                'incomeData' => [],
                'expenseData' => [],
                'recentActivities' => [],
                'pendingProposals' => [],
                'years' => [],
                'currentYear' => (new \DateTime())->format('Y'),
                'currentMonth' => null,
                'currentType' => '',
                'error' => $e->getMessage()
            ]);
        } catch (\Exception $e) {
            // Log lỗi chi tiết
            error_log('Dashboard Error: ' . $e->getMessage());
            error_log($e->getTraceAsString());
            
            return $this->render('dashboard/index.html.twig', [
                'user' => $this->getUser(),
                'balance' => 0,
                'totalIncome' => 0,
                'totalExpense' => 0,
                'totalMembers' => 0,
                'totalActivities' => 0,
                'newActivities' => 0,
                'participationCount' => 0,
                'fundLabels' => [],
                'incomeData' => [],
                'expenseData' => [],
                'recentActivities' => [],
                'pendingProposals' => [],
                'years' => [],
                'currentYear' => (new \DateTime())->format('Y'),
                'currentMonth' => null,
                'currentType' => '',
                'error' => 'Có lỗi xảy ra khi tải dữ liệu. Vui lòng thử lại sau.'
            ]);
        }
    }

    #[Route('/api/funds/chart', name: 'app_funds_chart', methods: ['GET'])]
    public function getFundsChartData(Request $request, FundsRepository $fundsRepository): JsonResponse
    {
        try {
            error_log('Bắt đầu xử lý API chart data');
            
            $startDate = new \DateTime($request->query->get('startDate'));
            $endDate = new \DateTime($request->query->get('endDate'));
            
            error_log('Ngày bắt đầu: ' . $startDate->format('Y-m-d'));
            error_log('Ngày kết thúc: ' . $endDate->format('Y-m-d'));

            // Tạo mảng ngày trong khoảng thời gian
            $labels = [];
            $incomeData = [];
            $expenseData = [];
            
            $interval = new \DateInterval('P1D');
            $period = new \DatePeriod($startDate, $interval, $endDate);

            foreach ($period as $date) {
                $dateStr = $date->format('Y-m-d');
                $labels[] = $dateStr;
                $incomeData[] = 0;
                $expenseData[] = 0;
            }

            // Lấy dữ liệu thu chi theo ngày trong khoảng thời gian
            $results = $fundsRepository->createQueryBuilder('f')
                ->select('f.date', 'f.transaction_type', 'SUM(f.amount) as total')
                ->where('f.date BETWEEN :startDate AND :endDate')
                ->setParameter('startDate', $startDate)
                ->setParameter('endDate', $endDate)
                ->groupBy('f.date', 'f.transaction_type')
                ->orderBy('f.date', 'ASC')
                ->getQuery()
                ->getResult();

            error_log('Số lượng kết quả tìm thấy: ' . count($results));

            // Cập nhật dữ liệu vào mảng theo ngày
            foreach ($results as $result) {
                $dateStr = $result['date']->format('Y-m-d');
                $index = array_search($dateStr, $labels);

                if ($index !== false) {
                    if ($result['transaction_type'] === 'income') {
                        $incomeData[$index] = (float) $result['total'];
                    } else {
                        $expenseData[$index] = (float) $result['total'];
                    }
                }
            }

            $responseData = [
                'labels' => $labels,
                'income' => $incomeData,
                'expense' => $expenseData
            ];
            
            error_log('Dữ liệu trả về: ' . json_encode($responseData));

            return new JsonResponse($responseData);
        } catch (\Exception $e) {
            error_log('Lỗi trong API chart data: ' . $e->getMessage());
            error_log('Stack trace: ' . $e->getTraceAsString());
            
            return new JsonResponse([
                'error' => 'Có lỗi xảy ra khi lấy dữ liệu biểu đồ: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}