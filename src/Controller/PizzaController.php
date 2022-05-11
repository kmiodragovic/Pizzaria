<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\PizzaRepository;
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
        $pizza = ["Meat", "Vegan", "Fish"];
        return $this->render('Pizza/home.html.twig', [
            'pizza' => $pizza
        ]);

        
    }

    public function pizza($pizza): Response
    {
        $choice = [
            "Meat" => ['pepperoni'],
            "Vegan" => ['margherita'],
            "Fish" => ['tonno'],
        ];
        return $this->render('Pizza/menu.html.twig', [
            'pizza' => $pizza
        ]);
    }

    /**
     * @Route("/categories/{id}")
     */
    public function menu(Category $category): Response
    {

        return $this->render('Pizza/menu.html.twig', [
            "pizzas" => $category->getPizzas()
        ]);
    }

    /**
     * @Route("/categories")
     */
    public function allpizzas(PizzaRepository $pizzaRepository): Response
    {

        return $this->render('Pizza/menu.html.twig', [
            "pizzas" => $pizzaRepository->findAll()
        ]);
    }


    /**
     * @Route("/contact")
     */
    public function contact(): Response
    {
        return $this->render('Pizza/contact.html.twig', [
        ]);


    }
}

