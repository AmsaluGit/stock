<?php

namespace App\Controller;

use App\Entity\Stock;
use App\Form\StockType;
use App\Form\Filter\StockFilterType;
use App\Repository\ProductRepository;
use App\Repository\StockRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/stock")
 */
class StockController extends AbstractController
{
    /**
     * @Route("/", name="stock_index", methods={"GET","POST"})
     */ 
    public function index(Request $request, StockRepository $stockRepository, PaginatorInterface $paginator): Response
    {
        $pageSize=5;
        $stock = new Stock();
        $searchForm = $this->createForm(StockFilterType::class,$stock);
        $searchForm->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $produ_on_cart = $request->getSession()->get($this->getUser()->getId());
        // dd($produ_on_cart);
        $temp = null;
        if($produ_on_cart)
        {
         
            foreach ($produ_on_cart as $stockid => $quantity) 
            {
                $stk = $em->getRepository(Stock::class)->find($stockid);
    
               /* $temp[]= array('id'=>$stk->getProduct()->getId(),'product_name' => $stk->getProduct()->getName(),'quantity'=> $quantity);*/


                $temp[]=  array('stock' => $stk,'quantity'=> $quantity);
            }

        }
        
        if($request->request->get('edit')){
            $id=$request->request->get('edit');
            $stock=$stockRepository->findOneBy(['id'=>$id]);
            $form = $this->createForm(StockType::class, $stock);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $stock->setDate(new \DateTime());
            
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('stock_index');
            }
            $queryBuilder=$stockRepository->findStock($request->query->get('search'));
            $data=$paginator->paginate(
                $queryBuilder,
                $request->query->getInt('page',1),
                $pageSize
            );
            return $this->render('stock/index.html.twig', [
                'stocks' => $data,
                'form' => $form->createView(),
                'searchForm' => $searchForm->createView(),
                'edit'=>$id,
             
                
            ]);    
        }
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $stock->setDate(new \DateTime());
            $entityManager->persist($stock);
            $entityManager->flush();

            return $this->redirectToRoute('stock_index');
        }

        $queryBuilder=$stockRepository->filterData($request->query->get('quantity'),$request->query->get('date'),$request->query->get('product'),$request->query->get('company'),$request->query->get('store'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            $pageSize
        );
        
        return $this->render('stock/index.html.twig', [
            'stocks' => $data,
            'form' => $form->createView(),
            'searchForm' => $searchForm->createView(),
            'edit'=>false,
            'carts' => $temp,
        ]);
    }  




    /**
     * @Route("/new", name="stock_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stock);
            $entityManager->flush();

            return $this->redirectToRoute('stock_index');
        }

        return $this->render('stock/new.html.twig', [
            'stock' => $stock,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="stock_show", methods={"GET"})
     */
    public function show(Stock $stock, ProductRepository $productRepository): Response
    {

        $product = $productRepository->find($stock->getProduct());

        $avail = $this->getRequestedQuantity($product->getId());
        $available = $avail['stock'] - $avail['requested'];
        return $this->render('product/show.html.twig', [
            'product' => $product,
            'avail' => $available,
            'stock' => $stock,
        ]);

       /* return $this->render('stock/show.html.twig', [
            'stock' => $stock,
            'product' => $product,
        ]);*/
    }


    /**
     * @Route("/more/{id}", name="more", methods={"GET","POST"})
     */
    public function more(Stock $stock, ProductRepository $productRepository): Response
    {

        $product = $productRepository->find($stock->getProduct());

        $avail = $this->getRequestedQuantity($product->getId());
        $available = $avail['stock'] - $avail['requested'];
        return $this->render('stock/more.html.twig', [
/*'product' => $product,
            'avail' => $available,*/
            'stock' => $stock,
        ]);

      
        
    }


    public function getRequestedQuantity($product)
    {
        $conn = $this->getDoctrine()->getConnection();
        $stock_request = "select product_id, sum(quantity) as quantity from stock where product_id=$product";
        $stock_result = $conn->query($stock_request)->fetchAll();

        $order_request = "select stk.product_id as product_id, sum(o.quantity) as quantity from orders as o inner join stock as stk on stk.id = o.stock_id inner join requests as r on r.id=o.request_id where product_id=$product and r.closed is NULL";
        $order_result = $conn->query($order_request)->fetchAll();

        $approved_request = "select sum(o.quantity) as quantity from orders as o inner join requests as r on r.id=o.request_id inner join stock as stk on stk.id = o.stock_id where stk.product_id=$product and r.closed=1 and r.status=1";
        $approved_result = $conn->query($approved_request)->fetchAll();
        $stock = $stock_result[0]['quantity'] - $approved_result[0]['quantity'];
        // dd($stock);
        //    dd(array("stock"=>$stock_result[0]['quantity'],"requested"=>$order_result[0]['quantity'],));

        return array("stock" => $stock, "requested" => $order_result[0]['quantity'] ? $order_result[0]['quantity'] : 0);
    }

    /**
     * @Route("/{id}/edit", name="stock_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Stock $stock): Response
    {
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stock_index');
        }

        return $this->render('stock/edit.html.twig', [
            'stock' => $stock,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="stock_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Stock $stock): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stock->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($stock);
            $entityManager->flush();
        }

        return $this->redirectToRoute('stock_index');
    }
     /**
     * @Route("/print", name="stock_print", methods={"post"})
     */
    public function print(Request $request): Response
    {
        $item = array();
        $temp_data = explode(",", $request->request->get("checked_list"));
        $count = sizeof($temp_data);

        for($i = 0; $i < $count; $i++){
            $item[] = $temp_data[$i];
        }

        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository(Stock::class)->findBy(array('id'=>$item));
        return $this->render("stock/print.html.twig",[
            'stocks' => $data
        ]);
    }
}
