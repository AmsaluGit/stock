<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Product;
use App\Form\OrdersType;
use App\Repository\OrdersRepository;
use DateTime;
use Proxies\__CG__\App\Entity\Requests;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("/order")
 */
class OrdersController extends AbstractController
{
    /** 
     * @Route("/", name="order_index", methods={"GET"})
     */
    public function index(OrdersRepository $orderRepository): Response
    {
        return $this->render('orders/index.html.twig', [
           // 'orders' => $orderRepository->findAll(),
            'orders' => $orderRepository->findBy([],["id"=>"DESC"]),
        ]);
    }


    /**
     * @Route("/{id}", name="addtocart", methods={"GET","POST"})
     */
    public function addToCart(Request $request, Product $product): Response
    {
        /*return $this->render('order/index.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);*/
        $em = $this->getDoctrine()->getManager();
       
        $quantity = $request->request->get('quantity');
        // $request->getSession()->invalidate();
        
        $mycart = $request->getSession()->get($this->getUser()->getId(),null);
  
        if($mycart)
        {
            $mycart[$product->getId()]=$quantity;
            $request->getSession()->set($this->getUser()->getId(),$mycart);
        }
        else //new
        {
            $request->getSession()->set($this->getUser()->getId(), array($product->getId()=>$quantity));
        }
         dd($mycart);

        return $this->redirectToRoute("balance");
    }



    /**
     * @Route("/{id}", name="request", methods={"GET","POST"})
     */
    public function requestOrder(Request $request, Product $product): Response
    {
        /*return $this->render('order/index.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);*/
        $em = $this->getDoctrine()->getManager();
       
        $quantity = $request->request->get('quantity');
        //$remark = $request->request->get('remark');

        //manage parent(Requests table)
        $requests = $em->getRepository(Request::class)->getIfNewRequestsExist($this->getUser());
        if(!$requests)
        {
            $requests = new Requests();
        }

        $requests->setRequester($this->getUser());
        // $requests->set

        //manage children(Orders table)
 
        $order = new Orders();
        $order->setProduct($product);
        $order->setReceiver($this->getUser());
        $order->setRequestedDate(new DateTime('now'));
        if($quantity) $order->setQuantity($quantity);
        //if($remark) $order->setRemark($remark);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $entityManager->flush();
        return $this->redirectToRoute("balance");
        
    } 


    /**
     * @Route("/new", name="order_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($order);
            $entityManager->flush();

            return $this->redirectToRoute('order_index');
        }

        return $this->render('orders/new.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
        ]);
    } 

    /**
     * @Route("/item/{id}", name="order_show", methods={"GET"})
     */
    public function show(Orders $order): Response
    {
        
        return $this->render('orders/show.html.twig', [
            'order' => $order,
        ]);
    }
    // public function doApprovalOrReject(Orders $order, $approve, $reject, $approver)
    // {
    //     $em = $this->getDoctrine()->getManager();

    //     if($approve)
    //     {
            
    //         switch ($approver) 
    //         {
    //             case '1':
    //             $order->setApproval1($this->getUser());
    //             $order->setStatus(1);
    //                 break;
    //             case '2':
    //             //if($isLastApprover && $order->getStatus()==1) $order->setClosed(1);
    //             $order->setApproval2($this->getUser());
    //             $order->setStatus(2);
                
    //                 break;
    //             case '3':
    //             $order->setApproval3($this->getUser());
    //             $order->setStatus(3);
    //             $order->setClosed(1);
                
    //                 break;
    //             default:
    //                 # code...
    //                 break;
    //         }
    //     }
    //     else if($reject)
    //     {
           
    //         switch ($approver) 
    //         {
    //             case '1':
    //             $order->setApproval1($this->getUser());
    //             $order->setStatus(10);
    //                 break;
    //             case '2':
    //             $order->setApproval2($this->getUser());
    //             $order->setStatus(20);
    //                 break;
    //             case '3':
    //             $order->setApproval3($this->getUser());
    //             $order->setStatus(30);
    //             $order->setClosed(0);
    //                 break;
    //             default:
    //             dd("CASE DEFAULT....");
    //                 break;
    //         }
    //     }
    //     else
    //     {
    //         dd("Neither approved nor Rejected");
    //     }
       
    //         $em->flush();

    // }
    // /**
    //  * @Route("/{id}/approve", name="order_approve", methods={"GET","POST"})
    //  */
    // public function ApproveOrReject(Request $request, Orders $order): Response
    // {
    //     $approve = $request->request->get('approve');
    //     $reject = $request->request->get('reject');
       
    //     $approver = 3;
    //     self::doApprovalOrReject($order, $approve, $reject, $approver);
    
    //     return $this->redirectToRoute('order_index');
    // }
    /**
     * @Route("/{id}/edit", name="order_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Orders $order): Response
    {
        $form = $this->createForm(OrdersType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('order_index');
        }

        return $this->render('orders/edit.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
        ]); 
    }

    /**
     * @Route("/{id}", name="order_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Orders $order): Response
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('order_index');
    }
}
