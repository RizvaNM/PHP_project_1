<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrderPageController extends AbstractController
{
    #[Route('/order/page', name: 'app_order_page')]
    public function index(): Response
    {
        return $this->render('order_page/index.html.twig', [
            'controller_name' => 'OrderPageController',
        ]);
    }
}
