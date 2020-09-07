<?php

namespace App\Controller;

use App\Entity\Stock;
use App\Form\StockType;
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
                'edit'=>$id
            ]);    
        }
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /*$stock->setIsActive(true);
            $stock->setCreatedAt(new \DateTime());
            $stock->setReceiver($this->getUser());*/
            $stock->setDate(new \DateTime());
            $entityManager->persist($stock);
            $entityManager->flush();

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
            'edit'=>false
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
    public function show(Stock $stock): Response
    {
        return $this->render('stock/show.html.twig', [
            'stock' => $stock,
        ]);
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
        // var_dump($request->request->get("checked_list"));
        return $this->render("stock/print.html.twig",[
            'stocks' => $data
        ]);
    }
}
