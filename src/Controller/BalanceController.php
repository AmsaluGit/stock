<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CategoriesRepository;
use App\Repository\StockRepository;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Stock;
use App\Form\StockType;


class BalanceController extends AbstractController
{
   
    /**
     * @Route("/balance", name="balance", methods={"GET"})
     */
    public function index(Request $request, StockRepository $stockRepository, PaginatorInterface $paginator): Response
    {
        $pageSize=100;

        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        /*if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $stock->setDate(new \DateTime());
            $entityManager->persist($stock);
            $entityManager->flush();

            return $this->redirectToRoute('balance');
        }*/

        $queryBuilder=$stockRepository->findStock($request->query->get('search'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            $pageSize
        );
        return $this->render('balance/index.html.twig', [
            'stocks' => $data,
            'form' => $form->createView(),
        ]);
    }  

}
