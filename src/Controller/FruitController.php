<?php

namespace App\Controller;

use App\Repository\FruitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FruitController extends AbstractController
{
    #[Route('/fruit', name: 'app_fruit')]
    public function index(FruitRepository $fruitRepository): Response
    {

        $fruits  = $fruitRepository->findAll();

        return $this->render('fruit/index.html.twig', [
            'fruits' => $fruits,
        ]);
    }
}
