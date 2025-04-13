<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UserEditType;
use App\Repository\ActivityParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Filesystem\Filesystem;
use Knp\Component\Pager\PaginatorInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile/{studentId}', name: 'profile')]
    public function index(string $studentId, ActivityParticipantRepository $activityParticipantRepository, ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Users::class)->findOneBy(['student_id' => $studentId]);

        if (!$user) {
            throw new NotFoundHttpException('Người dùng không tồn tại.');
        }

        $participatedActivities = $activityParticipantRepository->findBy(['userId' => $user->getId()]);
        $activityCount = count($participatedActivities);

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'activityCount' => $activityCount,
            'participatedActivities' => $participatedActivities,
        ]);
    }

    #[Route('/profile/{studentId}/edit', name: 'profile_edit')]
    public function edit(string $studentId, Request $request, ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Users::class)->findOneBy(['student_id' => $studentId]);

        if (!$user) {
            throw new NotFoundHttpException('Người dùng không tồn tại.');
        }

        $canEdit = false;
        if ($this->isGranted('ROLE_ADMIN') || 
            ($this->getUser() && $this->getUser()->getId() === $user->getId() && 
            ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_TREASURER')))) {
            $canEdit = true;
        }

        if (!$canEdit) {
            $this->addFlash('error', 'Bạn không có quyền chỉnh sửa thông tin của người dùng này.');
            return $this->redirectToRoute('profile', ['studentId' => $studentId]);
        }

        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $doctrine->getManager()->flush();
            
            $this->addFlash('success', 'Cập nhật thông tin thành công!');
            return $this->redirectToRoute('profile', ['studentId' => $user->getStudentId()]);
        }

        return $this->render('profile/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/profile/{studentId}/suggest', name: 'profile_suggest')]
    public function suggest(string $studentId): Response
    {
        return $this->redirectToRoute('app_proposals_new', [
            'type' => 'edit_profile',
            'studentId' => $studentId,
        ]);
    }

    #[Route('/admin/suggestions', name: 'admin_suggestions')]
    public function viewSuggestions(Request $request, PaginatorInterface $paginator): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Chỉ admin mới có quyền truy cập trang này.');
        }

        $filesystem = new Filesystem();
        $suggestionsFile = $this->getParameter('kernel.project_dir') . '/var/suggestions.json';
        
        $suggestions = [];
        if ($filesystem->exists($suggestionsFile)) {
            $suggestions = json_decode(file_get_contents($suggestionsFile), true);
        }

        // Tìm kiếm
        $search = $request->query->get('search', '');
        if ($search) {
            $suggestions = array_filter($suggestions, function ($suggestion) use ($search) {
                return stripos($suggestion['suggestedBy'], $search) !== false ||
                       stripos($suggestion['user'], $search) !== false ||
                       stripos($suggestion['suggestion'], $search) !== false;
            });
            // Đặt lại chỉ số mảng sau khi lọc
            $suggestions = array_values($suggestions);
        }

        // Phân trang mảng dữ liệu
        $pagination = $paginator->paginate(
            $suggestions,
            $request->query->getInt('page', 1),
            10 // Số bản ghi trên mỗi trang
        );

        return $this->render('profile/suggestions.html.twig', [
            'suggestions' => $pagination,
            'search' => $search,
        ]);
    }

    #[Route('/admin/suggestions/{index}/approve', name: 'admin_suggestions_approve')]
    public function approveSuggestion(int $index, Request $request): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Chỉ admin mới có quyền thực hiện hành động này.');
        }

        $filesystem = new Filesystem();
        $suggestionsFile = $this->getParameter('kernel.project_dir') . '/var/suggestions.json';
        
        $suggestions = [];
        if ($filesystem->exists($suggestionsFile)) {
            $suggestions = json_decode(file_get_contents($suggestionsFile), true);
        }

        if (!isset($suggestions[$index])) {
            $this->addFlash('error', 'Đề xuất không tồn tại.');
            return $this->redirectToRoute('admin_suggestions');
        }

        $suggestion = $suggestions[$index];
        $suggestions[$index]['status'] = 'approved';
        $filesystem->dumpFile($suggestionsFile, json_encode($suggestions, JSON_PRETTY_PRINT));

        $this->addFlash('success', 'Đã phê duyệt đề xuất. Vui lòng chỉnh sửa thông tin người dùng theo đề xuất.');
        return $this->redirectToRoute('profile_edit', ['studentId' => $suggestion['user']]);
    }

    #[Route('/admin/suggestions/{index}/reject', name: 'admin_suggestions_reject')]
    public function rejectSuggestion(int $index): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Chỉ admin mới có quyền thực hiện hành động này.');
        }

        $filesystem = new Filesystem();
        $suggestionsFile = $this->getParameter('kernel.project_dir') . '/var/suggestions.json';
        
        $suggestions = [];
        if ($filesystem->exists($suggestionsFile)) {
            $suggestions = json_decode(file_get_contents($suggestionsFile), true);
        }

        if (!isset($suggestions[$index])) {
            $this->addFlash('error', 'Đề xuất không tồn tại.');
            return $this->redirectToRoute('admin_suggestions');
        }

        $suggestions[$index]['status'] = 'rejected';
        $filesystem->dumpFile($suggestionsFile, json_encode($suggestions, JSON_PRETTY_PRINT));

        $this->addFlash('success', 'Đã từ chối đề xuất.');
        return $this->redirectToRoute('admin_suggestions');
    }
}