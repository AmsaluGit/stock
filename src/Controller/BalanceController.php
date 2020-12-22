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

        $product = 1;
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
        $p = $em->getRepository(Product::class);
        foreach ($produ_on_cart as $key => $value) 
        {
            $temp[$p->find($key)->getName()]=$value;
        }
    }

/*} 
else
{*/
    /*return $this->render('balance/index.html.twig', [
        'stocks' => null,
        'form' => $form->createView(),
        'carts' => null
    ]);*/
//}
        // dd($temp);
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

        $order_request  = "select product_id, sum(quantity) as quantity from orders where product_id=$product";
        $order_result = $conn->query($order_request)->fetchAll();
        //  dd($stock_result);

         return array("stock"=>$stock_result[0]['quantity'],"requested"=>$order_result[0]['quantity'],);
    }

}
