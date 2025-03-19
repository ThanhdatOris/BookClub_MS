<?php

namespace App\Controller;

use App\Entity\Attendances;
use App\Form\AttendancesType;
use App\Repository\AttendancesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/attendances')]
final class AttendancesController extends AbstractController
{
    #[Route(name: 'app_attendances_index', methods: ['GET'])]
    public function index(AttendancesRepository $attendancesRepository): Response
    {
        return $this->render('attendances/index.html.twig', [
            'attendances' => $attendancesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_attendances_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attendance = new Attendances();
        $form = $this->createForm(AttendancesType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($attendance);
            $entityManager->flush();

            return $this->redirectToRoute('app_attendances_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attendances/new.html.twig', [
            'attendance' => $attendance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_attendances_show', methods: ['GET'])]
    public function show(Attendances $attendance): Response
    {
        return $this->render('attendances/show.html.twig', [
            'attendance' => $attendance,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_attendances_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Attendances $attendance, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AttendancesType::class, $attendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_attendances_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attendances/edit.html.twig', [
            'attendance' => $attendance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_attendances_delete', methods: ['POST'])]
    public function delete(Request $request, Attendances $attendance, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$attendance->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($attendance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_attendances_index', [], Response::HTTP_SEE_OTHER);
    }
}
