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
        $pizzas = ["Meat", "Vegan", "Fish"];
        return $this->render('Pizza/home.html.twig', [
            'pizzas' => $pizzas,
            'name' => "Kristian",
        ]);

        
    }

    /**
     * @Route("/menu")
     */
    public function menu(): Response
    {
        $pizzas = ["Kip2", "Hawai1", "Margarita3", "Kebab4", "Veggie5"];
        return $this->render('Pizza/menu.html.twig', [
            'pizzas' => $pizzas,
            'name' => "Jan",
        ]);


    }

    /**
     * @Route("/contact")
     */
    public function contact(): Response
    {
        $pizzas = ["Kip2", "Hawai1", "Margarita3", "Kebab4", "Veggie5"];
        return $this->render('Pizza/contact.html.twig', [
            'pizzas' => $pizzas,
            'name' => "Jan",
        ]);


    }
}

