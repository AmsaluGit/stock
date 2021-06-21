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
     * @Route("/dbalance", name="dbalance", methods={"GET"})
     */
    public function index(Request $request): Response
    {

return new Response("Done");
}

        
}
