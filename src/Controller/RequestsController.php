<?php

namespace App\Controller;

use App\Entity\Requests;
use App\Form\RequestsType;
use App\Repository\RequestsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/requests")
 */
class RequestsController extends AbstractController
{
    /**
     * @Route("/", name="requests_index", methods={"GET"})
     */
    public function index(RequestsRepository $requestsRepository): Response
    {
        return $this->render('requests/index.html.twig', [
            'requests' => $requestsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="requests_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $requests = new Requests();
        $form = $this->createForm(RequestsType::class, $requests);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($requests);
            $entityManager->flush();

            return $this->redirectToRoute('requests_index');
        }

        return $this->render('requests/new.html.twig', [
            'request' => $requests,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="requests_show", methods={"GET"})
     */
    public function show(Requests $request): Response
    {
        return $this->render('requests/show.html.twig', [
            'requests' => $request,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="requests_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Requests $requests): Response
    {
        $form = $this->createForm(RequestsType::class, $requests);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('requests_index');
        }

        return $this->render('requests/edit.html.twig', [
            'request' => $requests,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="requests_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Requests $requests): Response
    {
        if ($this->isCsrfTokenValid('delete'.$requests->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($requests);
            $entityManager->flush();
        }

        return $this->redirectToRoute('requests_index');
    }

     public function doApprovalOrReject(Requests $requests, $approve, $reject, $approver)
    {
        $em = $this->getDoctrine()->getManager();

        if($approve)
        {
            
            switch ($approver) 
            {
                case '1':
                $requests->setApproval1($this->getUser());
                $requests->setStatus(1);
                    break;
                case '2':
                //if($isLastApprover && $order->getStatus()==1) $order->setClosed(1);
                $requests->setApproval2($this->getUser());
                $requests->setStatus(2);
                
                    break;
                case '3':
                $requests->setApproval3($this->getUser());
                $requests->setStatus(3);
                $requests->setClosed(1);
                
                    break;
                default:
                    # code...
                    break;
            }
        }
        else if($reject)
        {
           
            switch ($approver) 
            {
                case '1':
                $requests->setApproval1($this->getUser());
                $requests->setStatus(10);
                    break;
                case '2':
                $requests->setApproval2($this->getUser());
                $requests->setStatus(20);
                    break;
                case '3':
                $requests->setApproval3($this->getUser());
                $requests->setStatus(30);
                $requests->setClosed(0);
                    break;
                default:
                dd("CASE DEFAULT....");
                    break;
            }
        }
        else
        {
            dd("Neither approved nor Rejected");
        }
       
            $em->flush();

    }
    /**
     * @Route("/{id}/approve", name="requests_approve", methods={"GET","POST"})
     */
    public function ApproveOrReject(Request $request, Requests $requests): Response
    {
        $approve = $request->request->get('approve');
        $reject = $request->request->get('reject');
       
        $approver = 3;
        self::doApprovalOrReject($requests, $approve, $reject, $approver);
    
        return $this->redirectToRoute('requests_index');
    }

    /** 
     * @Route("/model22/{id}", name="model22", methods={"GET","POST"})
     */
    public function model22(Requests $requests): Response
    {
        return $this->render('requests/model22.html.twig', [
           // 'orders' => $orderRepository->findAll(),
            'requests' => $requests
        ]);
    }
}
