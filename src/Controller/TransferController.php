<?php

namespace App\Controller;

use App\Entity\Transfer;
use App\Form\TransferType;
use App\Repository\TransferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/transfer")
 */
class TransferController extends AbstractController
{
    /**
     * @Route("/", name="transfer_index", methods={"GET"})
     */
    public function index(TransferRepository $transferRepository): Response
    {
        $em = $this->getDoctrine()->getConnection();
        $query = "select transfer.id, count(transfer.id) as total,to_id,concat(t.first_name,' ',t.middle_name,' ',t.last_name) as tname, concat(f.first_name,' ',f.middle_name,' ',f.last_name) as fname, from_id, transfer.date ".
                 "from transfer ".
                 "join user f on f.id = from_id ".
                 "join user t on t.id = to_id ".
                 "where status = 0 ".
                 "group by from_id,to_id";
        $data = $em->query($query)->fetchAll();


        return $this->render('transfer/index.html.twig', [
            'transfer' => $data
        ]);
    }

    /**
     * @Route("/new", name="transfer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $transfer = new Transfer();
        $form = $this->createForm(TransferType::class, $transfer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transfer);
            $entityManager->flush();

            return $this->redirectToRoute('transfer_index');
        }

        return $this->render('transfer/new.html.twig', [
            'transfer' => $transfer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="transfer_show", methods={"GET"})
     */
    public function show(Transfer $transfer): Response
    {
        return $this->render('transfer/show.html.twig', [
            'transfer' => $transfer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="transfer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Transfer $transfer): Response
    {
        $form = $this->createForm(TransferType::class, $transfer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('transfer_index');
        }

        return $this->render('transfer/edit.html.twig', [
            'transfer' => $transfer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="transfer_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Transfer $transfer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transfer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($transfer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('transfer_index');
    }
}
