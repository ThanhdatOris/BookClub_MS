<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\UsersRepository;
use App\Repository\ActivityParticipantRepository;
use App\Service\UserManagerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

#[Route('/members')]
final class UsersController extends AbstractController
{
    private $userManager;
    private $logger;

    public function __construct(UserManagerService $userManager, LoggerInterface $logger)
    {
        $this->userManager = $userManager;
        $this->logger = $logger;
    }

    #[Route(name: 'app_users_index', methods: ['GET'])]
    public function index(Request $request, UsersRepository $usersRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $form = $this->createForm(UsersType::class, new Users());
        $search = $request->query->get('search');
        
        $data = $this->userManager->getUsersWithActivityStats($search);
        $stats = $usersRepository->getUsersStatistics();

        return $this->render('users/index.html.twig', [
            'users' => $data['users'],
            'users_json' => json_encode($data['usersData']),
            'search' => $search,
            'total_users' => $stats['total'],
            'active_users' => $stats['active'],
            'inactive_users' => $stats['inactive'],
            'admin_users' => $stats['admin'],
            'treasurer_users' => $stats['treasurer'],
            'member_users' => $stats['member'],
            'user_stats' => $data['userStats'],
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse|Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($request->isXmlHttpRequest() && $request->isMethod('GET')) {
            return new JsonResponse([
                'form' => $this->renderView('users/_form.html.twig', [
                    'form' => $form->createView(),
                    'button_label' => 'Thêm thành viên',
                    'action' => $this->generateUrl('app_users_new'),
                    'id' => 'addUserForm'
                ])
            ]);
        }

        if ($form->isSubmitted()) {
            if ($entityManager->getRepository(Users::class)->findOneBy(['student_id' => $user->getStudentId()])) {
                return new JsonResponse(['success' => false, 'error' => 'Mã sinh viên đã tồn tại trong hệ thống.'], Response::HTTP_BAD_REQUEST);
            }

            if ($entityManager->getRepository(Users::class)->findOneBy(['email' => $user->getEmail()])) {
                return new JsonResponse(['success' => false, 'error' => 'Email đã tồn tại trong hệ thống.'], Response::HTTP_BAD_REQUEST);
            }

            if ($form->isValid()) {
                try {
                    $user->setStatus('active');
                    $user->setPassword('not_used');
                    $user->setCreateAt(new \DateTime());
                    $user->setUpdateAt(new \DateTime());

                    $entityManager->persist($user);
                    $entityManager->flush();

                    return new JsonResponse(['success' => true, 'message' => 'Thêm thành viên mới thành công!']);
                } catch (\Exception $e) {
                    $this->logger->error('New User Error: ' . $e->getMessage());
                    return new JsonResponse(['success' => false, 'error' => 'Có lỗi hệ thống xảy ra.'], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
            }

            $errors = array_map(fn($error) => $error->getMessage(), iterator_to_array($form->getErrors(true)));
            return new JsonResponse(['success' => false, 'error' => implode(', ', $errors)], Response::HTTP_BAD_REQUEST);
        }

        return $this->redirectToRoute('app_users_index');
    }

    #[Route('/{id}', name: 'app_users_show', methods: ['GET', 'POST'])]
    public function show(Users $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && $this->getUser() !== $user) {
            throw $this->createAccessDeniedException('Bạn không có quyền xem thông tin này.');
        }

        $editForm = $this->createForm(UsersType::class, $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($this->getUser() === $user) {
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
        if (!$this->isGranted('ROLE_ADMIN') && $this->getUser() !== $user) {
            throw $this->createAccessDeniedException('Bạn không có quyền chỉnh sửa thông tin này.');
        }

        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($request->isXmlHttpRequest() && $request->isMethod('GET')) {
            return new JsonResponse([
                'form' => $this->renderView('users/_form.html.twig', [
                    'form' => $form->createView(),
                    'button_label' => 'Cập nhật'
                ])
            ]);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->getUser() === $user) {
                $originalRole = $entityManager->getUnitOfWork()->getOriginalEntityData($user)['role'] ?? $user->getRole();
                if ($user->getRole() !== $originalRole) {
                    $error = 'Bạn không được phép tự thay đổi vai trò của mình.';
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse(['success' => false, 'error' => $error], Response::HTTP_BAD_REQUEST);
                    }
                    $this->addFlash('warning', $error);
                    return $this->redirectToRoute('app_users_edit', ['id' => $user->getId()]);
                }
            }

            try {
                $entityManager->flush();
                if ($request->isXmlHttpRequest()) {
                    return new JsonResponse(['success' => true, 'message' => 'Cập nhật thông tin thành công!']);
                }
                $this->addFlash('success', 'Cập nhật thông tin thành công!');
                return $this->redirectToRoute('app_users_index');
            } catch (\Exception $e) {
                if ($request->isXmlHttpRequest()) {
                    return new JsonResponse(['success' => false, 'error' => 'Có lỗi xảy ra: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
                $this->addFlash('error', 'Có lỗi xảy ra: ' . $e->getMessage());
                return $this->redirectToRoute('app_users_edit', ['id' => $user->getId()]);
            }
        }

        if ($request->isXmlHttpRequest()) {
            $errors = array_map(fn($error) => $error->getMessage(), iterator_to_array($form->getErrors(true)));
            return new JsonResponse(['success' => false, 'error' => implode(', ', $errors)], Response::HTTP_BAD_REQUEST);
        }

        return $this->render('users/edit.html.twig', ['user' => $user, 'form' => $form]);
    }

    #[Route('/{id}/toggle-status', name: 'app_users_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Users $user): JsonResponse
    {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(['success' => false, 'error' => 'Chỉ chấp nhận AJAX request'], Response::HTTP_BAD_REQUEST);
        }

        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('toggle-status', $request->request->get('_token'))) {
            return new JsonResponse(['success' => false, 'error' => 'CSRF token không hợp lệ'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $newStatus = $this->userManager->toggleUserStatus($user, $this->getUser());
            $message = $newStatus === 'active' ? 'Thành viên đã được kích hoạt lại.' : 'Thành viên đã bị vô hiệu hóa.';
            return new JsonResponse(['success' => true, 'message' => $message, 'newStatus' => $newStatus]);
        } catch (\LogicException $e) {
            return new JsonResponse(['success' => false, 'error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        } catch (\Exception $e) {
            $this->logger->error('Toggle Status Error: ' . $e->getMessage());
            return new JsonResponse(['success' => false, 'error' => 'Có lỗi hệ thống xảy ra.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
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