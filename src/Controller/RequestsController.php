<?php

namespace App\Controller;

use App\Entity\ApprovalLog;
use App\Entity\Requests;
use App\Entity\UserGroup;
use App\Form\RequestsType;
use App\Repository\RequestsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/requests")
 */
class RequestsController extends AbstractController
{
    /**
     * @Route("/", name="requests_index", methods={"GET"})
     */
    public function index(RequestsRepository $requestsRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $rowsPerPage = 10;
        $queryBuilder=$requestsRepository->findByName($request->query->get('search'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            $rowsPerPage
        );
        return $this->render('requests/index.html.twig', [
            'requests' => $data,
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
        // dd($approver);
        foreach ($approver as $key => $level) {
          
            $alreadyApproved = $em->getRepository(ApprovalLog::class)->findOneBy(['request'=>$requests,'approver'=>$this->getUser(),'approvalLevel'=>$level]);
            if(!$alreadyApproved)
            {
                if($level==3) //ask two questions: are 1 and 2 approved
                {
                    $alreadyApproved1 = $em->getRepository(ApprovalLog::class)->findOneBy(['request'=>$requests,'approver'=>$this->getUser(),'approvalLevel'=>1]);
                    $alreadyApproved2 = $em->getRepository(ApprovalLog::class)->findOneBy(['request'=>$requests,'approver'=>$this->getUser(),'approvalLevel'=>2]);
                    if(!$alreadyApproved1 || !$alreadyApproved2) continue;
                    $requests->setClosed(1);
                     
                }
                if ($level==2) //ask one question is 1 approved
                {
                    $alreadyApproved1 = $em->getRepository(ApprovalLog::class)->findOneBy(['request'=>$requests,'approver'=>$this->getUser(),'approvalLevel'=>1]);
                    if(!$alreadyApproved1) continue;
                }
                
                    $appLog = new ApprovalLog();
                    $appLog->setApprover($this->getUser());
                    $appLog->setApprovalLevel($level);
                    $appLog->setRequest($requests);
                    $appLog->setApprovalDate(new \DateTime());
                    if($approve)
                    {
                        $appLog->setStatus(1);
                    }
                    else if($reject)
                    {
                        $appLog->setStatus(2);
                    }
                    else
                    {
                    // dd("Neither approved nor Rejected");
                    }
                    $em->persist($appLog);
            }
            
            
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
        $em = $this->getDoctrine()->getManager();

       
        $ug = $em->getRepository(UserGroup::class)->find();
        $ugList = $this->getUser()->getUserGroup(1);
        $permissions = array();
        $approver = array();
        foreach ($ugList  as $key => $ug) {
            $temp = $ug->getPermission();
            foreach ($temp  as $key => $perm) {
                // $permissions[] = $perm;
                if($perm->getCode()=="approver1")
                {
                    $approver[] = 1;
                }
                elseif($perm->getCode()=="approver2")
                {
                    $approver[] = 2;
                }
                elseif($perm->getCode()=="approver3")
                {
                    $approver[] = 3;
                }
                else{
                    //ignore
                }
            }
             
        }
        
     //   $approver =$ug->getPermission();
        // dd($approver);
        $this->doApprovalOrReject($requests, $approve, $reject, $approver);
    
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
