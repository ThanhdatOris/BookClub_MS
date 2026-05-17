<?php

namespace App\Controller;

use App\Service\DashboardStatisticsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

class DashboardController extends AbstractController
{
    private $dashboardService;
    private $logger;

    public function __construct(DashboardStatisticsService $dashboardService, LoggerInterface $logger)
    {
        $this->dashboardService = $dashboardService;
        $this->logger = $logger;
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(Request $request): Response 
    {
        try {
            $year = filter_var($request->query->get('year', (new \DateTime())->format('Y')), FILTER_VALIDATE_INT);
            if ($year === false) {
                throw new \InvalidArgumentException('Năm không hợp lệ.');
            }

            $monthParam = $request->query->get('month');
            $month = null;
            if ($monthParam !== null && $monthParam !== '') {
                $month = filter_var($monthParam, FILTER_VALIDATE_INT);
                if ($month === false || $month < 1 || $month > 12) {
                    throw new \InvalidArgumentException('Tháng phải nằm trong khoảng từ 1 đến 12.');
                }
            }
            
            $type = $request->query->get('type', '');
            if (!in_array($type, ['income', 'expense', ''], true)) {
                throw new \InvalidArgumentException('Loại giao dịch không hợp lệ.');
            }

            $generalStats = $this->dashboardService->getGeneralStatistics();
            $fundStats = $this->dashboardService->getFundsStatistics();
            $chartData = $this->dashboardService->getChartData($year, $month, $type);

            return $this->render('dashboard/index.html.twig', [
                'user' => $this->getUser(),
                'balance' => $fundStats['balance'],
                'totalIncome' => $fundStats['totalIncome'],
                'totalExpense' => $fundStats['totalExpense'],
                'totalMembers' => $generalStats['totalMembers'],
                'totalActivities' => $generalStats['totalActivities'],
                'newActivities' => $generalStats['newActivities'],
                'participationCount' => $generalStats['participationCount'],
                'fundLabels' => $chartData['labels'],
                'incomeData' => $chartData['income'],
                'expenseData' => $chartData['expense'],
                'recentActivities' => $generalStats['recentActivities'],
                'pendingProposals' => $generalStats['pendingProposals'],
                'years' => $fundStats['years'],
                'currentYear' => $year,
                'currentMonth' => $month,
                'currentType' => $type,
                'error' => null
            ]);
        } catch (\InvalidArgumentException $e) {
            $this->logger->warning('Dashboard Parameter Error: ' . $e->getMessage());
            return $this->renderEmptyDashboard($e->getMessage());
        } catch (\Exception $e) {
            $this->logger->error('Dashboard Error: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return $this->renderEmptyDashboard('Có lỗi xảy ra khi tải dữ liệu. Vui lòng thử lại sau.');
        }
    }

    private function renderEmptyDashboard(string $errorMessage): Response
    {
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
            'error' => $errorMessage
        ]);
    }

    #[Route('/api/funds/chart', name: 'app_funds_chart', methods: ['GET'])]
    public function getFundsChartData(Request $request): JsonResponse
    {
        try {
            $startDate = new \DateTime($request->query->get('startDate'));
            $endDate = new \DateTime($request->query->get('endDate'));

            $chartData = $this->dashboardService->getApiChartData($startDate, $endDate);

            return new JsonResponse($chartData);
        } catch (\Exception $e) {
            $this->logger->error('Lỗi trong API chart data: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            
            return new JsonResponse([
                'error' => 'Có lỗi xảy ra khi lấy dữ liệu biểu đồ: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}