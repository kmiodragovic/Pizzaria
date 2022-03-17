<?php

namespace App\Controller;

use         Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        $pizzas = ["Kip", "Hawai", "Margarita", "Kebab", "Veggie"];
        return $this->render('Pizza/home.html.twig', [
            'pizzas' => $pizzas,
            'name' => "Kristian",
        ]);

        
    }
}