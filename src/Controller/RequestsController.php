<?php

namespace App\Controller;

use App\Entity\ApprovalLog;
use App\Entity\ItemApprovalStatus;
use App\Entity\Requests;
use App\Entity\UserGroup;
use App\Form\RequestsType;
use App\Entity\Orders;
use App\Entity\Serials;
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
        $user = $this->getUser();
        $minLevel = 0;
        $userGroups = $user->getUserGroup();
        foreach ($userGroups as   $ugrp) {
           $ugrpperm = $ugrp->getPermission();
       foreach ($ugrpperm as   $perm) {
          if(strtoupper($perm->getCode())==strtoupper("Approver1"))
          {
            $minLevel = 1;
          }
          else if(strtoupper($perm->getCode())==strtoupper("Approver2"))
          {
              if($minLevel != 1)
              {
                $minLevel = 2;
              }
           
          }
          else if(strtoupper($perm->getCode())==strtoupper("Approver3"))
          {
            if($minLevel != 2 && $minLevel != 1)
            {
              $minLevel = 3;
            }
          }
       }

        }
      
        $queryBuilder = $requestsRepository->findByName($request->query->get('search'),$minLevel);
        $data = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
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
            $requests->setCurrentApprovalStep(0);
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
       
         
        //   $this->denyAccessUnlessGranted('approver3');
        $em = $this->getDoctrine()->getManager();
        $approvalLevel = 0;//this should be dynamic
        $user = $this->getUser();
        $permissionList = array();
        $userGroupsList = $user->getUserGroup();

        foreach ($userGroupsList as $group) {
            $tempPermissinList = $group->getPermission();
            foreach ($tempPermissinList  as $perm) {
                $permissionList[] = strtoupper($perm->getCode());
            }
        }

        // var_dump($permissionList);
        // die();

        if (in_array(strtoupper("Approver3"), $permissionList)) {
            $approvalLevel = 3;
        } 

        // if ($approvalLevel == 3) {
        //     $orders = $em->getRepository(orders::class)->findBy(['request' => $request, 'serial' => null]);
        //     foreach ($orders as $order) {
        //         $quantity = $order->getApprovedQuantity();
        //         for ($i = 1; $i <= $quantity; $i++) {
        //             $serial = new Serials();
        //             $serial->setOrders($order);
        //             $order->setSerial(1); //generated.
        //             $em->persist($serial);
        //         }
        //     }
        //     // $itemApprovalStatus = 
        //     $request->getApprovalLogs();
        //     $em->flush();
        // }

        // dd($permissionList);
     
// dd($request->getOrders());
        return $this->render('requests/show.html.twig', [
            'requests' => $request,
            'approvalLevel' => $approvalLevel,
            // 'serials'=>$serials


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
     * @Route("/delete/{id}", name="requests_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Requests $requests): Response
    {
        if ($this->isCsrfTokenValid('delete' . $requests->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($requests);
            $entityManager->flush();
        }

        return $this->redirectToRoute('requests_index');
    }

    public function doApprovalOrReject($requests, $request, $approve, $reject, $approver)
    {
        
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository(Orders::class)->findBy(['request' => $requests]);
        $modifiedQuantities = $request->all();
        //   dd($modifiedQuantities);
        //   dd($approver);
        foreach ($approver as $key => $level) {

            $alreadyApproved = $em->getRepository(ApprovalLog::class)->findOneBy(['request' => $requests, 'approver' => $this->getUser(), 'approvalLevel' => $level]);
            if (!$alreadyApproved) {
                if ($level == 3) //ask two questions: are 1 and 2 approved
                {
                    /*$alreadyApproved1 = $em->getRepository(ApprovalLog::class)->findOneBy(['request' => $requests, 'approver' => $this->getUser(), 'approvalLevel' => 1]);
                    $alreadyApproved2 = $em->getRepository(ApprovalLog::class)->findOneBy(['request' => $requests, 'approver' => $this->getUser(), 'approvalLevel' => 2]);*/
                    $alreadyApproved1 = $em->getRepository(ApprovalLog::class)->findOneBy(['request' => $requests,   'approvalLevel' => 1]);
                    $alreadyApproved2 = $em->getRepository(ApprovalLog::class)->findOneBy(['request' => $requests,  'approvalLevel' => 2]);
                    if (!$alreadyApproved1 || !$alreadyApproved2) continue;
                    $requests->setClosed(1);
                    $requests->setCurrentApprovalStep(3);

                } elseif ($level == 2) //ask one question: is 1 approved
                {
                    //$alreadyApproved1 = $em->getRepository(ApprovalLog::class)->findOneBy(['request' => $requests, 'approver' => $this->getUser(), 'approvalLevel' => 1]);
                    $alreadyApproved1 = $em->getRepository(ApprovalLog::class)->findOneBy(['request' => $requests, 'approvalLevel' => 1]);
                    if (!$alreadyApproved1) continue;
                }

                $i = 0;

                $appLog = new ApprovalLog();
                $appLog->setApprover($this->getUser());
                $appLog->setApprovalLevel($level);
                $appLog->setRequest($requests);
                $appLog->setApprovalDate(new \DateTime());
                $em->persist($appLog);
                $requests->setCurrentApprovalStep($level);


                if ($approve == "Approve") {
                    // $appLog->setAllowedQuantity($request->get('approved_quantity')[$i]);
                    $appLog->setStatus(1);
                    $requests->setStatus(1); //just response
                } else if ($reject == "Reject") {
                    $appLog->setStatus(2);
                    $requests->setStatus(1); //just response
                } else {
                    // dd("Neither approved nor Rejected");
                }
                $em->flush();


                foreach ($orders as $order) {
                    $itemApprovalStatus = $em->getRepository(ItemApprovalStatus::class)->findOneBy(['approvalLog'=>$appLog,'orders'=>$order]);
                    if(!$itemApprovalStatus)
                    {
                        $itemApprovalStatus = new ItemApprovalStatus();
                    }
                   
                    $itemApprovalStatus->setApprovalLog($appLog);
                   /* if ($level == 2) {
                        $order->setApprovedQuantity($modifiedQuantities[$order->getId()]);
                    }*/
                
                    if ($level == 3) {
                        //  dd($modifiedQuantities);
                        foreach ($modifiedQuantities as $k => $v) {
                            $post = explode("_", $k);
                            
                            if (sizeof($post) == 2 && ($post[0] == "serial" || $post[0] == "model") && $post[1]==$order->getId() ) {                                 
                                if ($post[0] == "serial") {
                                    foreach ($v as $key2 => $ser) {
                                        $serialObj = $em->getRepository(Serials::class)->findBy(['serial'=>$ser,'orders'=>$order]);
                                        if(!$serialObj)
                                        {
                                           
                                            $serialObj =  new Serials();
                                            if(!$ser) //$ser="NO_SERIAL_".uniqid();
                                            {
                                                $serialObj->setHasSerial(false);  
                                                $serialObj->setQuantity($modifiedQuantities[$order->getId()]);
                                            }
                                            else
                                            {
                                                $serialObj->setHasSerial(true);  
                                                $serialObj->setQuantity(1);
                                            }

                                            $mdl = $modifiedQuantities['model_'.$order->getId()][$key2];
                                           // if(!$mdl) $mdl="NO_MODEL_".uniqid();
                                            $serialObj->setSerial($ser); 
                                            $serialObj->setOrders($order);
                                            $serialObj->setTransferRequest(0);
                                            $serialObj->setModel($mdl);
                                            $em->persist($serialObj);
                                            $em->flush();
                                        }

                                    }
                                   
                                }
                                else
                                {
                                   // $serial->setModel($v);  
                                }
                               // $serial->setOrders($order);
                               
                              
                            }
                        }
                        /*if (isset($modifiedQuantities["serial_" . $order->getId()])) {

                            $order->setSerial($modifiedQuantities["serial_" . $order->getId()]);
                        }*/

                        $order->setDelivered(1);
                        $order->setApprovedQuantity($modifiedQuantities[$order->getId()]);
                        $order->getStockUnique()->setGiven($modifiedQuantities[$order->getId()] +  $order->getStockUnique()->getGiven());
                        $order->getStockUnique()->setRequested($order->getStockUnique()->getRequested() - $modifiedQuantities[$order->getId()] );

                        // $order->getStockUnique()->setAvailable($order->getStockUnique()->getQuantity() - $modifiedQuantities[$order->getId()] -  $order->getStockUnique()->getGiven() );


                    }
                    $itemApprovalStatus->setAllowedQuantity($modifiedQuantities[$order->getId()]);
                    $itemApprovalStatus->setOrders($order);

                    $em->persist($itemApprovalStatus);
                }
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

        //$ug = $em->getRepository(UserGroup::class)->find();
        $ugList = $this->getUser()->getUserGroup();
        $permissions = array();
        $approver = array();
        foreach ($ugList  as $key => $ug) {
            $temp = $ug->getPermission();
            foreach ($temp  as $key => $perm) {
                // $permissions[] = $perm;
                if (strtoupper($perm->getCode()) == strtoupper("approver1")) {
                    $approver[] = 1;
                } elseif (strtoupper($perm->getCode()) == strtoupper("approver2")) {
                    $approver[] = 2;
                } elseif (strtoupper($perm->getCode()) == strtoupper("approver3")) {
                    $approver[] = 3;
                } else {
                    //ignore
                }
            }
        }
        //   $approver =$ug->getPermission();
        $this->doApprovalOrReject($requests, $request->request, $approve, $reject, $approver);

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