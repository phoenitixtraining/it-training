<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Page d'accueil
     * 
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $catRepo = $this -> getDoctrine() -> getRepository(Categories::class);
        $categories = $catRepo -> findAll();

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'categories' => $categories
        ]);
    }
}
