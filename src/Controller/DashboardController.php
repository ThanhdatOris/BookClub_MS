<?php

namespace App\Controller;

use App\Repository\FundTransactionsRepository;
use App\Repository\MembersRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\AttendanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(
        FundTransactionsRepository $fundTransactionsRepository,
        MembersRepository $membersRepository,
        ActivitiesRepository $activitiesRepository,
        AttendanceRepository $attendanceRepository
    ): Response {
        // Fetch data from the repositories
        $totalFunds = $fundTransactionsRepository->getTotalFunds();
        $totalMembers = $membersRepository->count([]);
        $newActivities = $activitiesRepository->getNewActivitiesCount();
        $participationCount = $attendanceRepository->getTotalAttendanceCount();

        return $this->render('dashboard/index.html.twig', [
            'totalFunds' => $totalFunds,
            'totalMembers' => $totalMembers,
            'newActivities' => $newActivities,
            'participationCount' => $participationCount,
        ]);
    }
}
