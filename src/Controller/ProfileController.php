<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UserEditType;
use App\Repository\ActivityParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Filesystem\Filesystem;

class ProfileController extends AbstractController
{
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
            $doctrine->getManager()->flush();

            $this->addFlash('success', 'Cập nhật thông tin thành công!');
            return $this->redirectToRoute('profile', ['studentId' => $user->getStudentId()]);
        }

        return $this->render('profile/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    public function suggest(string $studentId, Request $request, ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Users::class)->findOneBy(['student_id' => $studentId]);

        if (!$user) {
            throw new NotFoundHttpException('Người dùng không tồn tại.');
        }

        if (!$this->isGranted('ROLE_USER') || $this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_TREASURER') || 
            ($this->getUser() && $this->getUser()->getId() === $user->getId())) {
            $this->addFlash('error', 'Bạn không có quyền đề xuất chỉnh sửa cho người dùng này.');
            return $this->redirectToRoute('profile', ['studentId' => $studentId]);
        }

        $suggestion = $request->request->get('suggestion');
        if ($request->isMethod('POST') && $suggestion) {
            $filesystem = new Filesystem();
            $suggestionsFile = $this->getParameter('kernel.project_dir') . '/var/suggestions.json';
            
            $suggestions = [];
            if ($filesystem->exists($suggestionsFile)) {
                $suggestions = json_decode(file_get_contents($suggestionsFile), true);
            }

            $suggestions[] = [
                'suggestedBy' => $this->getUser()->getStudentId(),
                'user' => $user->getStudentId(),
                'suggestion' => $suggestion,
                'createdAt' => (new \DateTime())->format('Y-m-d H:i:s'),
                'status' => 'pending',
            ];

            $filesystem->dumpFile($suggestionsFile, json_encode($suggestions, JSON_PRETTY_PRINT));

            $this->addFlash('success', 'Đề xuất chỉnh sửa đã được gửi!');
            return $this->redirectToRoute('profile', ['studentId' => $user->getStudentId()]);
        }

        return $this->render('profile/suggest.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/admin/suggestions', name: 'admin_suggestions')]
    public function viewSuggestions(): Response
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

        return $this->render('profile/suggestions.html.twig', [
            'suggestions' => $suggestions,
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