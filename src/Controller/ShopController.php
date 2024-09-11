<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\BrandsRepository;
use App\Repository\ProductsRepository;
use App\Repository\CategoriesRepository;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'app_shop')]
    public function index(Request $request): Response
    {
        $page = $request->query->getInt('page', 1);

        $productsPerPage = 6;
        $offset = ($page - 1) * $productsPerPage;

        $brands = BrandsRepository::getAllBrands();
        $products = ProductsRepository::getAllProductsByShop();
        $categories = CategoriesRepository::getAllCategoriesByShop();

        $currentProducts = array_slice($products, $offset, $productsPerPage);
        $totalPages = ceil(count($products) / $productsPerPage);

        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
            'brands'      => $brands,
            'products'    => $currentProducts,
            'categories'  => $categories,
            'currentPage' => $page,
            'totalPages'  => $totalPages,
        ]);
    }

    #[Route('/shop/product', name: 'app_shop_product')]
    public function single_product(): Response
    {
        return $this->render('shop/single/index.html.twig', [
            'controller_name' => 'ShopController'
        ]);
    }
}
