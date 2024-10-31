<?php

namespace App\Controller;

use App\Services\ProductsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function product(ProductsService $productsService): Response
    {
        $products = $productsService->getProducts();
        return $this->render('product/product.html.twig', compact('products'));
    }
    #[Route('/manolo', name: 'manolo')]
    public function manolo(ProductsService $productsService): Response
    {
        $products = $productsService->getProducts();
        return $this->render('product/product.html.twig', compact('products'));
    }

}
