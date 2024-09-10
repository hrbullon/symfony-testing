<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\CarouselRepository;
use App\Repository\ProductsRepository;
use App\Repository\CategoriesRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $carouselItems = CarouselRepository::getCarouselHome();
        $categories = CategoriesRepository::getAllCategories();
        $featuredProducts = ProductsRepository::getFeaturedProducts();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'categories' => $categories,
            'featuredProducts' => $featuredProducts,
            'carouselItems' => $carouselItems
        ]);
    }
}
