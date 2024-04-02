<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductPageController extends AbstractController
{
    
    private $entityManager;
    private $productRepository;

    public function __construct(
        ProductRepository $productRepository,
    )
    {
        $this->productRepository = $productRepository;
    }
    #[Route('/products/{id}', name: 'app_product_page')]
    public function index(int $id = null): Response
    {
        
        $productId = $this->productRepository->find($id);

        return $this->render('product_page/index.html.twig', [
            'controller_name' => 'ProductPageController',
            'product' => $productId,
        ]);
    }
}
