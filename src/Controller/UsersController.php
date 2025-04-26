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
use Knp\Component\Pager\PaginatorInterface;

#[Route('/members')]
final class UsersController extends AbstractController
{
    #[Route(name: 'app_users_index', methods: ['GET'])]
    public function index(Request $request, UsersRepository $usersRepository, ActivityParticipantRepository $participantRepository, PaginatorInterface $paginator): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $search = $request->query->get('search');
        $queryBuilder = $usersRepository->createQueryBuilder('u')
            ->orderBy('u.status', 'ASC') // Active users first
            ->addOrderBy('u.id', 'DESC');

        if ($search) {
            $queryBuilder->andWhere('u.name LIKE :search OR u.studentId LIKE :search OR u.email LIKE :search OR u.faculty LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $pagination = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        // Tính toán thống kê
        $totalUsers = $usersRepository->count([]);
        $activeUsers = $usersRepository->count(['status' => 'active']);
        $inactiveUsers = $usersRepository->count(['status' => 'inactive']);
        $adminUsers = $usersRepository->count(['role' => 'ROLE_ADMIN']);
        $treasurerUsers = $usersRepository->count(['role' => 'ROLE_TREASURER']);
        $memberUsers = $usersRepository->count(['role' => 'ROLE_MEMBER']);

        // Get activity statistics for each user
        $userStats = [];
        foreach ($pagination as $user) {
            $participations = $participantRepository->findBy(['userId' => $user->getId()]);
            $attended = 0;
            $total = count($participations);
            foreach ($participations as $participation) {
                if ($participation->getStatus() === 'attended') {
                    $attended++;
                }
            }
            $userStats[$user->getId()] = [
                'total_activities' => $total,
                'attended_activities' => $attended,
            ];
        }

        return $this->render('users/index.html.twig', [
            'users' => $pagination,
            'search' => $search,
            'total_users' => $totalUsers,
            'active_users' => $activeUsers,
            'inactive_users' => $inactiveUsers,
            'admin_users' => $adminUsers,
            'treasurer_users' => $treasurerUsers,
            'member_users' => $memberUsers,
            'user_stats' => $userStats,
        ]);
    }

    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Thêm thành viên mới thành công!');
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
        // Kiểm tra quyền truy cập
        if (!$this->isGranted('ROLE_ADMIN') && $this->getUser() !== $user) {
            throw $this->createAccessDeniedException('Bạn không có quyền xem thông tin này.');
        }

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
        // Kiểm tra quyền truy cập
        if (!$this->isGranted('ROLE_ADMIN') && $this->getUser() !== $user) {
            throw $this->createAccessDeniedException('Bạn không có quyền chỉnh sửa thông tin này.');
        }

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
            $this->addFlash('success', 'Cập nhật thông tin thành công!');
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
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Kiểm tra nếu người dùng hiện tại tự vô hiệu hóa chính mình
        $currentUser = $this->getUser();
        if ($currentUser instanceof Users && $currentUser->getId() === $user->getId()) {
            $this->addFlash('warning', 'Bạn không được phép tự vô hiệu hóa tài khoản của mình.');
            return $this->redirectToRoute('app_users_show', ['id' => $user->getId()]);
        }

        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $user->setStatus('inactive');
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

    #[Route('/{id}/toggle-status', name: 'app_users_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Users $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('toggle-status'.$user->getId(), $request->request->get('_token'))) {
            // Toggle the status
            $newStatus = $user->getStatus() === 'active' ? 'inactive' : 'active';
            $user->setStatus($newStatus);
            $entityManager->flush();

            $message = $newStatus === 'active' ? 'Thành viên đã được kích hoạt lại.' : 'Thành viên đã bị vô hiệu hóa.';
            $this->addFlash('success', $message);
        }

        return $this->redirectToRoute('app_users_index');
    }
}