<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\UsersRepository;
use App\Repository\ActivityParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/members')]
final class UsersController extends AbstractController
{
    #[Route(name: 'app_users_index', methods: ['GET'])]
    public function index(UsersRepository $usersRepository): Response
    {
        return $this->render('users/index.html.twig', [
            'users' => $usersRepository->findAllOrderedByIdAndStatus(),
        ]);
    }

    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('users/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_users_show', methods: ['GET', 'POST'])]
    public function show(Users $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $editForm = $this->createForm(UsersType::class, $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $currentUser = $this->getUser();
            if ($currentUser instanceof Users && $currentUser->getId() === $user->getId()) {
                $originalRole = $entityManager->getUnitOfWork()->getOriginalEntityData($user)['role'] ?? $user->getRole();
                if ($user->getRole() !== $originalRole) {
                    $this->addFlash('warning', 'Bạn không được phép tự thay đổi vai trò của mình.');
                    return $this->redirectToRoute('app_users_show', ['id' => $user->getId()]);
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Thông tin thành viên đã được cập nhật.');
            return $this->redirectToRoute('app_users_show', ['id' => $user->getId()]);
        }

        return $this->render('users/show.html.twig', [
            'user' => $user,
            'editForm' => $editForm->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_users_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Users $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentUser = $this->getUser();
            if ($currentUser instanceof Users && $currentUser->getId() === $user->getId()) {
                $originalRole = $entityManager->getUnitOfWork()->getOriginalEntityData($user)['role'] ?? $user->getRole();
                if ($user->getRole() !== $originalRole) {
                    $this->addFlash('warning', 'Bạn không được phép tự thay đổi vai trò của mình.');
                    return $this->redirectToRoute('app_users_edit', ['id' => $user->getId()]);
                }
            }

            $entityManager->flush();
            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_users_delete', methods: ['POST'])]
    public function delete(Request $request, Users $user, EntityManagerInterface $entityManager): Response
    {
        // Kiểm tra nếu người dùng hiện tại tự vô hiệu hóa chính mình
        $currentUser = $this->getUser();
        if ($currentUser instanceof Users && $currentUser->getId() === $user->getId()) {
            $this->addFlash('warning', 'Bạn không được phép tự vô hiệu hóa tài khoản của mình.');
            return $this->redirectToRoute('app_users_show', ['id' => $user->getId()]);
        }

        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $user->setStatus('inactivate');
            $entityManager->flush();
            $this->addFlash('success', 'Thành viên đã được vô hiệu hóa.');
        }

        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/user/history', name: 'app_user_history')]
    public function history(ActivityParticipantRepository $participantRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Bạn cần đăng nhập.');
        }

        $participatedActivities = $participantRepository->findBy(['userId' => $user->getId()], ['joinedAt' => 'DESC']);

        return $this->render('user/history.html.twig', [
            'participatedActivities' => $participatedActivities,
        ]);
    }
}