<?php

namespace App\Controller;

use App\Entity\Laptop;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StockCheckController extends AbstractController
{
    /**
     * @Route("/stock/check", name="stock_check")
     */
    /* public function index(): Response
    {
        return $this->render('stock_check/index.html.twig', [
            'controller_name' => 'StockCheckController',
        ]);
    } */
    public function __invoke(Laptop $data)
    {
        return $data;
    }
    
}
