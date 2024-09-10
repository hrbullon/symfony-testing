<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\ServicesRepository;
use App\Repository\BrandsRepository;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {   
        $brands   = BrandsRepository::getAllBrands();
        $services = ServicesRepository::getAllServices();

        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
            'brands' => $brands,
            'services' => $services,
        ]);
    }
}
