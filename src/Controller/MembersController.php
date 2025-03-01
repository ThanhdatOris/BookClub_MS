<?php

namespace App\Controller;

use App\Entity\Members;
use App\Form\MembersType;
use App\Repository\MembersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/members')]
class MembersController extends AbstractController
{
    #[Route('/', name: 'app_members_index', methods: ['GET'])]
    public function index(Request $request, MembersRepository $membersRepository): Response
    {
        if ($request->isXmlHttpRequest()) {
            $members = $membersRepository->findAll();
            $data = [];

            foreach ($members as $member) {
                $data[] = [
                    'id' => $member->getId(),
                    'fullname' => $member->getFullName(),
                    'student_id' => $member->getStudentId(),
                    'email' => $member->getEmail(),
                    'phone' => $member->getPhoneNum(),
                    'faculty' => $member->getFaculty(),
                    'join_date' => $member->getJoinDate()?->format('d-m-Y'),
                ];
            }

            return new JsonResponse(['data' => $data]);
        }

        return $this->render('members/index.html.twig');
    }


    #[Route('/new', name: 'app_members_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $member = new Members();
        $form = $this->createForm(Members1Type::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($member);
            $entityManager->flush();

            return $this->redirectToRoute('app_members_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('members/new.html.twig', [
            'member' => $member,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_members_show', methods: ['GET'])]
    public function show(Members $member): Response
    {
        return $this->render('members/show.html.twig', [
            'member' => $member,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_members_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Members $member, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Members1Type::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_members_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('members/edit.html.twig', [
            'member' => $member,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_members_delete', methods: ['POST'])]
    public function delete(Request $request, Members $member, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$member->getId(), $request->get('_token'))) {
            $entityManager->remove($member);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_members_index', [], Response::HTTP_SEE_OTHER);
    }
}
