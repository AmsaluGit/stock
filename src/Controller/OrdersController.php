<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\Requests;
use App\Form\OrdersType;
use App\Repository\OrdersRepository;
use DateTime;
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
    // public function index(OrdersRepository $orderRepository): Response
    // {
    //     return $this->render('orders/index.html.twig', [
    //        // 'orders' => $orderRepository->findAll(),
    //         'orders' => $orderRepository->findBy([],["id"=>"DESC"]),
    //     ]);
    // }


    /**
     * @Route("/addtocart/{id}", name="addtocart", methods={"GET","POST"})
     */
    public function addToCart(Request $request, Product $product): Response
    {
        /*return $this->render('order/index.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);*/

        
        $em = $this->getDoctrine()->getManager();
       
        $quantity = $request->request->get('quantity');
       
        // $id = $request->request->get('id'); 
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
        //    dd($mycart);

        return $this->redirectToRoute("balance");
    }



    /**
     * @Route("/requestitems", name="requestitems", methods={"GET","POST"})
     */
    public function requestOrder(Request $request): Response
    {
        /*return $this->render('order/index.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);*/
        $em = $this->getDoctrine()->getManager();
       
        $reason = $request->request->get('reason'); 
        

        //manage parent(Requests table)
        $requests = $em->getRepository(Requests::class)->getIfNewRequestsExist($this->getUser());
        // $requests = $em->getRepository(Requests::class)->getIfNewRequestsExist(1);
        // dd($requests);
        if(!$requests)
        {
            $requests = new Requests();
            $requests->setReason($reason);
            $requests->setRequester($this->getUser());
            $requests->setRequestedDate(new DateTime('now'));
            $requests->setStatus(0);
            $em->persist($requests);
        }

      


        //manage children(Orders table)
        $products = $request->getSession()->get($this->getUser()->getId());
        foreach ($products as $key => $value) {
            $prod = $em->getRepository(Product::class)->find($key);
            $order = new Orders();
            $order->setProduct($prod);
            $order->setQuantity($value);
            $order->setModel($prod->getBrand()->getName());
            $order->setUnitprice($prod->getprice());
            $order->setRequest($requests);
            $em->persist($order);
        }
       
        $em->flush();
        $request->getSession()->set($this->getUser()->getId(),array());
        return $this->redirectToRoute("balance");
        
    } 


    /**
     * @Route("/new", name="order_new", methods={"GET","POST"})
     */
    /*public function new(Request $request): Response
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
    } */

    /**
     * @Route("/item/{id}", name="order_show", methods={"GET"})
     */
    /*public function show(Orders $order): Response
    {
        
        return $this->render('orders/show.html.twig', [
            'order' => $order,
        ]);
    }*/
    
    /**
     * @Route("/{id}/edit", name="order_edit", methods={"GET","POST"})
     */
    /*public function edit(Request $request, Orders $order): Response
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
    }*/

    /**
     * @Route("/{id}", name="order_delete", methods={"DELETE"})
     */
    /*public function delete(Request $request, Orders $order): Response
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('order_index');
    }*/
}
