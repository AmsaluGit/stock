<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/one", name="test")
     */
    public function index()
    {
        $rand =  random_int(1,100);

        return $this->render('test/index.html.twig', [
            'number' => $rand,
        ]);
    }
}
