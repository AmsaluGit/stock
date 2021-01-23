<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\Requests;
use App\Entity\Stock;
use App\Form\OrdersType;
use App\Repository\OrdersRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
     * @Route("/addtocart/{id}", name="addtocart", methods={"GET","POST"})
     */
    public function addToCarts(Request $request, Product $product): Response
    {
        // $request->getSession()->set($this->getUser()->getId(),null);
        $mycart = array();
        $em = $this->getDoctrine()->getManager();
         
        $stockid = $request->request->get('stockid');
        // $avail = $request->request->get('avail');
        $quantity = $request->request->get('quantity');
        // $request->getSession()->set($this->getUser()->getId(),null);
        $mycart = $request->getSession()->get($this->getUser()->getId(),null);          
        $request->getSession()->get($this->getUser()->getId(),null); 
        // dd($mycart);
        if(isset($mycart) && sizeof($mycart)>0)
        {
            $items_in_cart = array();

            foreach($mycart as $key => $items)
            {
                $items_in_cart[$key] = $items;    
            }
            
            $items_in_cart[$stockid] = $quantity;
            $request->getSession()->set($this->getUser()->getId(),$items_in_cart);
        }
        else 
        {
            $request->getSession()->set($this->getUser()->getId(), array($stockid => $quantity));
        }
        //  dd($request->getSession()->get($this->getUser()->getId()));
        //  dd( $stockid );

        return $this->redirectToRoute("stock_index");
    }

    
    /**
     * @Route("/addtocartssssss/{id}", name="addtocartssss", methods={"GET","POST"})
     */
    public function addToCart(Request $request, Product $product): Response
    {
        $mycart = array();
        $em = $this->getDoctrine()->getManager();
        
        $productid = $request->request->get('productid');
        $stockid = $request->request->get('stockid');
        $avail = $request->request->get('avail');
        $quantity = $request->request->get('quantity');
        // $request->getSession()->set($this->getUser()->getId(),null);
        $mycart = $request->getSession()->get($this->getUser()->getId(),null);          

        // dd($mycart);
        if(isset($mycart) && sizeof($mycart)>0)
        {
            $items_in_cart = array();

            foreach($mycart as $key => $items)
            {
                $items_in_cart[$key] = $items;    
            }
            
            $items_in_cart[$product->getId()] =$quantity;
            $request->getSession()->set($this->getUser()->getId(),$items_in_cart);
        }
        else 
        {
            $request->getSession()->set($this->getUser()->getId(), array($product->getId()=>$quantity));
        }
        // dd($request->getSession()->get($this->getUser()->getId()));

        return $this->redirectToRoute("stock_index");
    }

    /**
     * @Route("/reset", name="reset_request", methods={"GET"})
     */
    public function resetRequest(Request $request): Response
    {
        // $quantity = $request->request->get('quantity');
        $request->getSession()->set($this->getUser()->getId(),null);     
        // if($mycart)
        // {
        //     $mycart[$product->getId()]=$quantity;
        //     $request->getSession()->set($this->getUser()->getId(),$mycart);
        // }
        // else //new
        // {
        //     $request->getSession()->set($this->getUser()->getId(), array($product->getId()=>$quantity));
        // }
        // // dd($request->getSession());
        return $this->redirectToRoute("stock_index");
    }

    public function getRequestedQuantity($product)
    {
        $conn = $this->getDoctrine()->getConnection();
        $stock_request  = "select product_id, sum(quantity) as quantity from stock where product_id=$product";
        $stock_result = $conn->query($stock_request)->fetchAll();

        $order_request  = "select stk.product_id as product_id, sum(o.quantity) as quantity from orders as o inner join stock as stk on stk.id = o.stock_id where stk.product_id=$product";
        $order_result = $conn->query($order_request)->fetchAll();
        //   dd($stock_result);

         return array("stock"=>$stock_result[0]['quantity'],"requested"=>$order_result[0]['quantity'],);
    }

    /**
     * @Route("/requestitems", name="requestitems", methods={"GET","POST"})
     */
    public function requestOrder(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reason = $request->request->get('reason'); 
        $stocks = $request->getSession()->get($this->getUser()->getId());

   
        $valid_request_exist=false;
        
        foreach ($stocks as $stockid => $quantity) {
            $stockObj = $em->getRepository(Stock::class)->find($stockid);

        $prod = $stockObj->getProduct();
        $avail = $this->getRequestedQuantity($prod->getId());

        $stock = $avail["stock"];
        $requested = $avail["requested"];//this is the total number of requested stock
        $allowed_to_request= $stock - $requested;
        $quantity_requested_by_this_user = $quantity;
        if($allowed_to_request < $quantity_requested_by_this_user) //you can't request this item.
        {
            $this->addFlash("warning","There is no enough ".$prod->getName()." to satisfy your request.");
            // return $this->redirectToRoute('user_group_index');
            continue;
        }
        else
        {
            $valid_request_exist=true;
        }
         
        }


        if(!$valid_request_exist) 
        {
            $request->getSession()->set($this->getUser()->getId(),array());
            return $this->redirectToRoute("stock_index");
        }
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
        // dd($products);
        
        foreach ($stocks as $stockid => $quantity) {

            $stockObj = $em->getRepository(Stock::class)->find($stockid);
            $prod = $stockObj->getProduct();
            $order = new Orders();
            $order->setStock($stockObj);
            $order->setQuantity($quantity);
            $order->setModel($prod->getBrand()->getName());
            $order->setUnitprice($stockObj->getprice());
            $order->setRequest($requests);
            $em->persist($order);
        }
      
        $em->flush();
        $request->getSession()->set($this->getUser()->getId(),array());
        return $this->redirectToRoute("stock_index");
        
    } 
}
