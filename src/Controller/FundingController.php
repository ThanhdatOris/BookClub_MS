<?php

namespace App\Controller;

use App\Entity\FundTransactions;
use App\Form\FundTransactionsType;
use App\Repository\FundTransactionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/funding')]
final class FundingController extends AbstractController
{
    #[Route('/', name: 'app_funding_index', methods: ['GET'])]
    public function index(Request $request, FundTransactionsRepository $fundTransactionsRepository): Response
    {
        if ($request->isXmlHttpRequest()) {
            $fundTransactions = $fundTransactionsRepository->findAll();
            $data = [];

            foreach ($fundTransactions as $fundTransaction) {
                $executedBy = $fundTransaction->getExecutedById();
                $createdBy = '';

                if ($executedBy) {
                    $member = $executedBy->getMemberId();
                    $createdBy = $member ? $member->getFullname() : $executedBy->getUsername();
                }

                $data[] = [
                    'id' => $fundTransaction->getId(),
                    'type' => $fundTransaction->getType(),
                    'amount' => $fundTransaction->getAmount(),
                    'description' => $fundTransaction->getDescription(),
                    'date' => $fundTransaction->getDate() ? $fundTransaction->getDate()->format('Y-m-d H:i:s') : '',
                    'created_by' => $createdBy,
                ];
            }

            return new JsonResponse(['data' => $data]);
        }

        return $this->render('funding/index.html.twig', [
            'fund_transactions' => $fundTransactionsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_funding_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fundTransaction = new FundTransactions();
        $form = $this->createForm(FundTransactionsType::class, $fundTransaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fundTransaction);
            $entityManager->flush();

            return $this->redirectToRoute('app_funding_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('funding/new.html.twig', [
            'fund_transaction' => $fundTransaction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_funding_show', methods: ['GET'])]
    public function show(FundTransactions $fundTransaction): Response
    {
        return $this->render('funding/show.html.twig', [
            'fund_transaction' => $fundTransaction,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_funding_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FundTransactions $fundTransaction, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FundTransactionsType::class, $fundTransaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_funding_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('funding/edit.html.twig', [
            'fund_transaction' => $fundTransaction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_funding_delete', methods: ['POST'])]
    public function delete(Request $request, FundTransactions $fundTransaction, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fundTransaction->getId(), $request->request->get('_token'))) {
            $entityManager->remove($fundTransaction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_funding_index', [], Response::HTTP_SEE_OTHER);
    }
}
