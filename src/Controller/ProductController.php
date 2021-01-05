<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Form\Filter\ProductFilterType;
use App\Repository\OrdersRepository;
use App\Repository\ProductRepository;
use App\Repository\StockRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/index2", name="product_index2", methods={"GET","POST"})
     */
    public function index2()
    {
        return $this->render("product/index2.html.twig");
    }

    /**
     * @Route("/listProduct", name="list_product", methods={"GET","POST"})
     */
     public function listDatatablesAction(Request $request, ProductRepository $productRepository)
    {
        // Set up required variables
        $this->entityManager = $this->getDoctrine()->getManager();
        $this->repository = $productRepository;
        
        // Get the parameters from DataTable Ajax Call
        if ($request->getMethod() == 'POST')
        {
            $draw = intval($request->request->get('draw'));
            $start = $request->request->get('start');
            $length = $request->request->get('length');
            $search = $request->request->get('search');
            $orders = $request->request->get('order');
            $columns = $request->request->get('columns');
        }
        else // If the request is not a POST one, die hard
            die;

        // Get results from the Repository
        $results = $this->repository->getRequiredDTData($start, $length, $orders, $search, $columns);
    
        // Returned objects are of type Town
        $objects = $results["results"];

        // Get total number of objects
        $total_objects_count = $this->repository->count(1);

        // Get total number of results
        $selected_objects_count = count($objects);
        
        // Get total number of filtered data
        $filtered_objects_count = $results["countResult"];
        
        $Response = array();
        $temp = array();
        foreach($objects as $key => $value)
        {
            $temp["name"] = $value->getName();
            $temp["description"] = $value->getDescription();
            $temp["price"] = $value->getPrice();
            $temp["bname"] = $value->getBrand()->getName();
            $temp["cname"] = $value->getCategory()->getName();
            $Response[] = $temp;

            unset($temp);
            $temp = array();
        }
        // Construct response
        $response = '{
            "draw": '.$draw.',
            "recordsTotal": '.$total_objects_count.',
            "recordsFiltered": '.$filtered_objects_count.',
            "data":'.json_encode($Response).'  }';
    
        // Send all this stuff back to DataTables
        $returnResponse = new JsonResponse();
        $returnResponse->setJson($response);
    
        return $returnResponse;
    }

    /**
     * @Route("/", name="product_index", methods={"GET","POST"})
     */
    public function index(Request $request, ProductRepository $productRepository, PaginatorInterface $paginator): Response
    {
        $rowsPerPage=10;
        $product = new Product();
        $searchForm = $this->createForm(ProductFilterType::class,$product);
        $searchForm->handleRequest($request);
        
        if($request->request->get('edit')){
            $id=$request->request->get('edit');
            $product=$productRepository->findOneBy(['id'=>$id]);
            $form = $this->createForm(ProductType::class, $product);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
              //  $product->setUpdatedAt(new \DateTime());
            
                $this->getDoctrine()->getManager()->flush();
    
                return $this->redirectToRoute('product_index');
            }
            $queryBuilder=$productRepository->findProduct($request->query->get('search'));
            $data=$paginator->paginate(
                $queryBuilder,
                $request->query->getInt('page',1),
                $rowsPerPage
            );
            return $this->render('product/index.html.twig', [
                'products' => $data,
                'form' => $form->createView(),
                'searchForm' => $searchForm->createView(),
                'edit'=>$id
            ]);    
        }

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }
        
        $queryBuilder = $productRepository->filterData($request->query->get('name'),$request->query->get('brand'),$request->query->get('productType'),$request->query->get('price'),$request->query->get('category'));
        $data = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            $rowsPerPage
        );

        return $this->render('product/index.html.twig', array(
            'products' => $data,
            'request' => $request,
            'form' => $form->createView(),
            'searchForm' => $searchForm->createView(),
            'edit'=>false
        ));
    }  

    /**
     * @Route("/report1", name="product_report", methods={"GET"})
     */
    public function report(Request $request, ProductRepository $productRepository, PaginatorInterface $paginator)
    {
        $product = new Product();
        $searchForm = $this->createForm(ProductFilterType::class,$product);
        $searchForm->handleRequest($request);

        $rowsPerPage = 10;
        $queryBuilder = $productRepository->filterData($request->query->get('name'),$request->query->get('brand'),$request->query->get('productType'),$request->query->get('price'),$request->query->get('category'));
        $data = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            $rowsPerPage
        );

        return $this->render('product/report.html.twig', array(
            'products' => $data,
            'request' => $request,
            'searchForm' => $searchForm->createView()
        ));
    }

     /**
     * @Route("/report/show", name="report_show", methods={"GET"})
     */
    public function report_show(Request $request, ProductRepository $productRepository, OrdersRepository $orderRepository, StockRepository $stockRepository,  PaginatorInterface $paginator)
    {
        $id = $request->query->get("id");
        $product = $productRepository->findProductForReport($id);
        $totalProduct = $stockRepository->findTotalForProduct($id);
        $totalRequested = $orderRepository->productTotalApproved($id);
        $totalApproved = $orderRepository->productTotalOrder($id);       

        return $this->render('product/report-show.html.twig', array(
            'product' => $product,
            'totalP' => $totalProduct,
            'totalR' => $totalRequested,
            'totalA' => $totalApproved
        ));
    }

    /**
     * @Route("/new", name="product_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            if($request->request->get("add") == "add")
            {
                // $request->getSession()->set("new_products",)
                return $this->redirectToRoute('product_index');
            }
            else if($request->request->get("add") == "add_more")
            {
                $product = new Product();
                $form = $this->createForm(ProductType::class, $product);
                return $this->render('product/create.html.twig', [
                    'product' => $product,
                    'form' => $form->createView(),
                ]);
            }
        }

        return $this->render('product/create.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    { 
        $avail = $this->getRequestedQuantity($product->getId());
        $available = $avail['stock'] - $avail['requested'];
        return $this->render('product/show.html.twig', [
            'product' => $product,
            'avail' => $available
        ]);
    }

    public function getRequestedQuantity($product)
    {
        $conn = $this->getDoctrine()->getConnection();
        $stock_request = "select product_id, sum(quantity) as quantity from stock where product_id=$product";
        $stock_result = $conn->query($stock_request)->fetchAll();

        $order_request = "select o.product_id as product_id, sum(o.quantity) as quantity from orders as o inner join requests as r on r.id=o.request_id where product_id=$product and r.closed is NULL";
        $order_result = $conn->query($order_request)->fetchAll();

        $approved_request = "select sum(o.quantity) as quantity from orders as o inner join requests as r on r.id=o.request_id where product_id=$product and r.closed=1 and r.status=1";
        $approved_result = $conn->query($approved_request)->fetchAll();
        $stock = $stock_result[0]['quantity'] - $approved_result[0]['quantity'];
        // dd($stock);
        //    dd(array("stock"=>$stock_result[0]['quantity'],"requested"=>$order_result[0]['quantity'],));

        return array("stock" => $stock, "requested" => $order_result[0]['quantity'] ? $order_result[0]['quantity'] : 0);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_index');
    }
}
