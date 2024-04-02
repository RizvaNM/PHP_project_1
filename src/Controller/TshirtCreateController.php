<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TshirtCreateController extends AbstractController
{
    #[Route('/tshirt/create', name: 'app_tshirt_create')]
    public function index(): Response
    {
        return $this->render('tshirt_create/index.html.twig', [
            'controller_name' => 'TshirtCreateController',
        ]);
    }
}
