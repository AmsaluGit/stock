<?php

namespace App\Controller;

use App\Entity\Stock;
use App\Entity\Product;
use App\Form\StockType;
use App\Repository\StockRepository;
use App\Repository\CategoriesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BalanceController extends AbstractController
{
   
    /**
     * @Route("/balance", name="balance", methods={"GET"})
     */
    public function index(Request $request, StockRepository $stockRepository, PaginatorInterface $paginator): Response
    {
        $pageSize=5;
      
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        /*if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $stock->setDate(new \DateTime());
            $entityManager->persist($stock);
            $entityManager->flush();

            return $this->redirectToRoute('balance');
        }*/

        // $product = 1;
        $container =null;
        $products = $this->getDoctrine()->getManager()->getRepository(Product::class)->findAll();
        // dd($products);
        foreach ($products as $key => $product) {
            $avail = $this->getRequestedQuantity($product->getId());
            //  if($product->getId() == 16) dd($avail);
           if(!($avail['stock'] || $avail['requested'])) continue;
            $container[]= array("unit"=>$product->getUnitOfMeasure()->getName(), "productId"=>$product->getId(),"productName"=>$product->getName(),"avail"=>$avail); 
        }
        //   dd($container);
       /* $conn = $this->getDoctrine()->getConnection();
        $stock_request  = "select id from product";
        $stock_result = $conn->query($stock_request)->fetchAll();


        
*/
// dd($this->getRequestedQuantity($product->getId()));
/*if($container)
{*/
    // $queryBuilder=$stockRepository->findStockInOut($request->query->get('search'));

    // if(!$container) 
    // {
    //     $container = [];
    // }
    $data=$paginator->paginate(
        // $queryBuilder,
        $container?$container:[],
        $request->query->getInt('page',1),
        $pageSize
    );

    $produ_on_cart = $request->getSession()->get($this->getUser()->getId());
    // dd($produ_on_cart);
    $temp = null;
    if($produ_on_cart)
    {
      /*  $p = $em->getRepository(Product::class);
        foreach ($produ_on_cart as $key => $value) 
        {
            $temp[]= array('id'=>$key,'product_name' => $p->find($key)->getName(),'quantity'=> $value);
        }*/

        foreach ($produ_on_cart as $stockid => $quantity) 
        {
            $stk = $em->getRepository(Stock::class)->find($stockid);

            $temp[]= array('id'=>$stk->getProduct()->getId(),'product_name' => $stk->getProduct()->getName(),'quantity'=> $quantity);
        }


    }


        return $this->render('balance/index.html.twig', [
            'stocks' => $data,
            'form' => $form->createView(),
            'carts' => $temp,
        ]);
    } 

    public function getRequestedQuantity($product)
    {
        $conn = $this->getDoctrine()->getConnection();
        $stock_request  = "select product_id, sum(quantity) as quantity from stock where product_id=$product";
        $stock_result = $conn->query($stock_request)->fetchAll();

        $order_request  = "select stk.product_id as product_id, sum(o.quantity) as quantity from orders as o inner join stock as stk on stk.id = o.stock_id inner join requests as r on r.id=o.request_id where product_id=$product and r.closed is NULL";
        $order_result = $conn->query($order_request)->fetchAll();

        $approved_request="select sum(o.quantity) as quantity from orders as o inner join requests as r on r.id=o.request_id inner join stock as stk on stk.id = o.stock_id where stk.product_id=$product and r.closed=1 and r.status=1";
        $approved_result = $conn->query($approved_request)->fetchAll();
        $stock = $stock_result[0]['quantity'] - $approved_result[0]['quantity'];
        // dd($stock);
        //    dd(array("stock"=>$stock_result[0]['quantity'],"requested"=>$order_result[0]['quantity'],));

         return array("stock"=>$stock,"requested"=>$order_result[0]['quantity']?$order_result[0]['quantity']:0);
    }

}
