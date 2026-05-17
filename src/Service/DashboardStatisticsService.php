<?php

namespace App\Service;

use App\Repository\UsersRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\FundsRepository;
use App\Repository\ProposalsRepository;
use App\Repository\ActivityParticipantRepository;

class DashboardStatisticsService
{
    private $usersRepository;
    private $activitiesRepository;
    private $fundsRepository;
    private $proposalsRepository;
    private $participantRepository;

    public function __construct(
        UsersRepository $usersRepository,
        ActivitiesRepository $activitiesRepository,
        FundsRepository $fundsRepository,
        ProposalsRepository $proposalsRepository,
        ActivityParticipantRepository $participantRepository
    ) {
        $this->usersRepository = $usersRepository;
        $this->activitiesRepository = $activitiesRepository;
        $this->fundsRepository = $fundsRepository;
        $this->proposalsRepository = $proposalsRepository;
        $this->participantRepository = $participantRepository;
    }

    public function getGeneralStatistics(): array
    {
        $startOfMonth = new \DateTime('first day of this month');

        return [
            'totalMembers' => $this->usersRepository->count([]),
            'totalActivities' => $this->activitiesRepository->count([]),
            'newActivities' => $this->activitiesRepository->countNewActivities($startOfMonth),
            'participationCount' => $this->participantRepository->count([]),
            'recentActivities' => $this->activitiesRepository->findRecentActivitiesWithImages(5),
            'pendingProposals' => $this->proposalsRepository->findBy(['status' => 'pending'], ['created_at' => 'DESC'], 5)
        ];
    }

    public function getFundsStatistics(): array
    {
        $totalIncome = $this->fundsRepository->getTotalIncome();
        $totalExpense = $this->fundsRepository->getTotalExpense();

        return [
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'balance' => $totalIncome - $totalExpense,
            'years' => $this->fundsRepository->getAvailableYears()
        ];
    }

    public function getChartData(int $year, ?int $month, string $type): array
    {
        $fundsByMonth = $this->fundsRepository->getChartData($year, $month, $type);

        $fundLabels = [];
        $incomeData = array_fill(0, 12, 0);
        $expenseData = array_fill(0, 12, 0);

        if ($month === null) {
            foreach (range(1, 12) as $m) {
                $fundLabels[] = (new \DateTime("$year-$m-01"))->format('M Y');
            }
        } else {
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

        return [
            'labels' => $fundLabels,
            'income' => array_values($incomeData),
            'expense' => array_values($expenseData)
        ];
    }

    public function getApiChartData(\DateTime $startDate, \DateTime $endDate): array
    {
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

        $results = $this->fundsRepository->getFundsBetweenDates($startDate, $endDate);

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

        return [
            'labels' => $labels,
            'income' => $incomeData,
            'expense' => $expenseData
        ];
    }
}
