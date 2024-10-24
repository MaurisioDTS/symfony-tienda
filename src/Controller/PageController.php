<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Team;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
// --- RUTAS A PÁGINAS =============================0

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig');
    }

    #[Route('/service', name: 'service')]
    public function service(): Response
    {
        return $this->render('page/service.html.twig', []);
    }

    #[Route('/price', name: 'price')]
    public function price(): Response
    {
        return $this->render('page/price.html.twig', []);
    }

    #[Route('/team', name: 'team')]
    public function team(): Response
    {
        return $this->render('page/team.html.twig', []);
    }

    #[Route('/testimonial', name: 'testimonial')]
    public function testimonial(): Response
    {
        return $this->render('page/testimonial.html.twig', []);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', []);
    }

// --- METODOS NORMALES ==================================00
    public function teamTemplate(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Team::class);
        $team = $repository->findAll();
        return $this->render('partials/_team.html.twig',compact('team'));
    }
    public function productsTemplate(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Product::class);
        $product = $repository->findAll();
        return $this->render('partials/_product.html.twig',compact('product'));
    }
}
