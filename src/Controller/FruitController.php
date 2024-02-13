<?php

namespace App\Controller;

use App\Entity\Fruit;
use App\Repository\FruitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FruitController extends AbstractController
{
    #[Route('/fruits', name: 'app_fruit')]
    public function index(FruitRepository $fruitRepository): Response
    {
        return $this->render('fruit/index.html.twig', [
            'fruits' => $fruitRepository->findAll()
        ]);
    }

    #[Route("/fruit/{id}/{message}", name:"app_fruit_show")]
    public function show(Fruit $fruit ):Response
    {

        return $this->render("fruit/show.html.twig", [
            "fruit"=>$fruit,
        ]);
    }
}
