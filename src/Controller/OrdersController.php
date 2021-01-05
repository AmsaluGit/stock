<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\Requests;
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
    public function addToCart(Request $request, Product $product): Response
    {
        $mycart = array();
        $em = $this->getDoctrine()->getManager();
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

        return $this->redirectToRoute("balance");
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
        return $this->redirectToRoute("balance");
    }

    public function getRequestedQuantity($product)
    {
        $conn = $this->getDoctrine()->getConnection();
        $stock_request  = "select product_id, sum(quantity) as quantity from stock where product_id=$product";
        $stock_result = $conn->query($stock_request)->fetchAll();

        $order_request  = "select product_id, sum(quantity) as quantity from orders where product_id=$product";
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
        $products = $request->getSession()->get($this->getUser()->getId());
        $valid_request_exist=false;
        
        foreach ($products as $key => $val) {
            $prod = $em->getRepository(Product::class)->find($key);
            $avail = $this->getRequestedQuantity($prod->getId());
        $stock = $avail["stock"];
        $requested = $avail["requested"];//this is the total number of requested stock
        $allowed_to_request= $stock - $requested;
        $quantity_requested_by_this_user = $val;
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
            return $this->redirectToRoute("balance");
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
        
        foreach ($products as $key => $value) {
            $prod = $em->getRepository(Product::class)->find($key);
            $order = new Orders();
            $order->setProduct($prod);
            $order->setQuantity($value);
            $order->setModel($prod->getBrand()->getName());
            // $order->setUnitprice($prod->getprice());
            $order->setRequest($requests);
            $em->persist($order);
        }
      
        $em->flush();
        $request->getSession()->set($this->getUser()->getId(),array());
        return $this->redirectToRoute("balance");
        
    } 
}
