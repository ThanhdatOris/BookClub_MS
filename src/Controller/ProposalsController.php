<?php

namespace App\Controller;

use App\Entity\Proposals;
use App\Entity\Users;
use App\Form\ProposalsType;
use App\Repository\ProposalsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/proposals')]
final class ProposalsController extends AbstractController
{
    #[Route(name: 'app_proposals_index', methods: ['GET'])]
    public function index(ProposalsRepository $proposalsRepository): Response
    {
        return $this->render('proposals/index.html.twig', [
            'proposals' => $proposalsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_proposals_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $proposal = new Proposals();
        $proposal->setUserId($this->getUser());
        $proposal->setStatus('pending');
    
        $form = $this->createForm(ProposalsType::class, $proposal);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            if ($proposal->getType() === 'edit_profile') {
                $proposedChanges = [];
                if ($form->get('name')->getData()) {
                    $proposedChanges['name'] = $form->get('name')->getData();
                }
                if ($form->get('email')->getData()) {
                    $proposedChanges['email'] = $form->get('email')->getData();
                }
                if ($form->get('class_id')->getData()) {
                    $proposedChanges['class_id'] = $form->get('class_id')->getData();
                }
                if ($form->get('faculty')->getData()) {
                    $proposedChanges['faculty'] = $form->get('faculty')->getData();
                }
                if ($form->get('contact_info')->getData()) {
                    $proposedChanges['contact_info'] = $form->get('contact_info')->getData();
                }
                $proposal->setProposedChanges($proposedChanges);
                $proposal->setContent('Đề xuất chỉnh sửa thông tin cá nhân');
            }
    
            $entityManager->persist($proposal);
            $entityManager->flush();
    
            $this->addFlash('success', 'Đề xuất đã được gửi thành công!');
            return $this->redirectToRoute('app_proposals_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('proposals/new.html.twig', [
            'proposal' => $proposal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proposals_show', methods: ['GET'])]
    public function show(Proposals $proposal): Response
    {
        return $this->render('proposals/show.html.twig', [
            'proposal' => $proposal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proposals_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Proposals $proposal, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProposalsType::class, $proposal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Cập nhật đề xuất thành công!');
            return $this->redirectToRoute('app_proposals_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proposals/edit.html.twig', [
            'proposal' => $proposal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proposals_delete', methods: ['POST'])]
    public function delete(Request $request, Proposals $proposal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proposal->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($proposal);
            $entityManager->flush();

            $this->addFlash('success', 'Xóa đề xuất thành công!');
        } else {
            $this->addFlash('error', 'Xác thực CSRF không hợp lệ.');
        }

        return $this->redirectToRoute('app_proposals_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/approve', name: 'app_proposals_approve', methods: ['POST'])]
    public function approve(Request $request, Proposals $proposal, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin mới được duyệt đề xuất.');

        if ($proposal->getStatus() !== 'pending') {
            $this->addFlash('error', 'Đề xuất này đã được xử lý.');
            return $this->redirectToRoute('app_proposals_show', ['id' => $proposal->getId()]);
        }

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('approve'.$proposal->getId(), $request->getPayload()->getString('_token'))) {
            $this->addFlash('error', 'Xác thực CSRF không hợp lệ.');
            return $this->redirectToRoute('app_proposals_show', ['id' => $proposal->getId()]);
        }

        $data = $request->request->all();
        $approvedFields = $data['approved_fields'] ?? [];

        if ($proposal->getType() === 'edit_profile' && !empty($proposal->getProposedChanges())) {
            if (empty($approvedFields)) {
                $this->addFlash('error', 'Vui lòng chọn ít nhất một trường để phê duyệt.');
                return $this->redirectToRoute('app_proposals_show', ['id' => $proposal->getId()]);
            }

            $user = $proposal->getUserId();
            $proposedChanges = $proposal->getProposedChanges();

            foreach ($proposedChanges as $field => $value) {
                if (in_array($field, $approvedFields)) {
                    switch ($field) {
                        case 'name':
                            $user->setName($value);
                            break;
                        case 'email':
                            $user->setEmail($value);
                            break;
                        case 'class_id':
                            $user->setClassId($value);
                            break;
                        case 'faculty':
                            $user->setFaculty($value);
                            break;
                        case 'contact_info':
                            $user->setContactInfo($value);
                            break;
                    }
                }
            }

            $entityManager->persist($user);
        }

        $proposal->setStatus('approved');
        $entityManager->flush();

        $this->addFlash('success', 'Đề xuất đã được duyệt thành công!');
        return $this->redirectToRoute('app_proposals_show', ['id' => $proposal->getId()]);
    }

    #[Route('/{id}/reject', name: 'app_proposals_reject', methods: ['POST'])]
    public function reject(Request $request, Proposals $proposal, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Chỉ có Admin mới được từ chối đề xuất.');

        if ($proposal->getStatus() !== 'pending') {
            $this->addFlash('error', 'Đề xuất này đã được xử lý.');
            return $this->redirectToRoute('app_proposals_show', ['id' => $proposal->getId()]);
        }

        // Kiểm tra CSRF token
        if (!$this->isCsrfTokenValid('reject'.$proposal->getId(), $request->getPayload()->getString('_token'))) {
            $this->addFlash('error', 'Xác thực CSRF không hợp lệ.');
            return $this->redirectToRoute('app_proposals_show', ['id' => $proposal->getId()]);
        }

        $proposal->setStatus('rejected');
        $entityManager->flush();

        $this->addFlash('success', 'Đề xuất đã bị từ chối.');
        return $this->redirectToRoute('app_proposals_show', ['id' => $proposal->getId()]);
    }
}