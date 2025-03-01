<?php

namespace App\Controller;

use App\Entity\Attendance;
use App\Entity\Activities;
use App\Form\AttendanceType;
use App\Repository\AttendanceRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\MemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/attendance')]
final class AttendanceController extends AbstractController
{
    #[Route('/', name: 'app_attendance_index', methods: ['GET'])]
    public function index(ActivitiesRepository $activityRepository): Response
    {
        $activities = $activityRepository->findAll();
        
        return $this->render('attendance/index.html.twig', [
            'activities' => $activities,
        ]);
    }

    #[Route('/activity/{id}', name: 'app_attendance_activity', methods: ['GET'])]
    public function activity(Activities $activity, AttendanceRepository $attendanceRepository): Response
    {
        $attendances = $attendanceRepository->findBy(['activity' => $activity]);

        return $this->render('attendance/activity.html.twig', [
            'activity' => $activity,
            'attendances' => $attendances,
        ]);
    }

    #[Route('/new', name: 'app_attendance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attendance = new Attendance();
        $form = $this->createForm(AttendanceType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $attendance->setCheckInTime(new \DateTime());
            $entityManager->persist($attendance);
            $entityManager->flush();

            return $this->redirectToRoute('app_attendance_activity', ['id' => $attendance->getActivity()->getId()]);
        }

        return $this->render('attendance/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_attendance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Attendance $attendance, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AttendanceType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_attendance_activity', ['id' => $attendance->getActivity()->getId()]);
        }

        return $this->render('attendance/edit.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_attendance_delete', methods: ['POST'])]
    public function delete(Request $request, Attendance $attendance, EntityManagerInterface $entityManager): Response
    {
        $activityId = $attendance->getActivityId()->getId();

        if ($this->isCsrfTokenValid('delete'.$attendance->getId(), $request->get('_token'))) {
            $entityManager->remove($attendance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_attendance_activity', ['id' => $activityId]);
    }
}
