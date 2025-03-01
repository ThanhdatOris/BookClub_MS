<?php

namespace App\Controller;

use App\Entity\FundTransactions;
use App\Form\FundTransactionsType;
use App\Repository\FundTransactionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/funding')]
final class FundingController extends AbstractController
{
    #[Route(name: 'app_funding_index', methods: ['GET'])]
    public function index(FundTransactionsRepository $fundTransactionsRepository): Response
    {
        return $this->render('funding/index.html.twig', [
            'fund_transactions' => $fundTransactionsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_funding_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fundTransaction = new FundTransactions();
        $form = $this->createForm(FundTransactions1Type::class, $fundTransaction);
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
        $form = $this->createForm(FundTransactions1Type::class, $fundTransaction);
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
        if ($this->isCsrfTokenValid('delete'.$fundTransaction->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($fundTransaction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_funding_index', [], Response::HTTP_SEE_OTHER);
    }
}
