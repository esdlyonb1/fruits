<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {

           $prenom = $request->get("prenom");

        return $this->render('home/index.html.twig', [
            'prenom' => $prenom,
        ]);
    }

    #[Route('/autrepage', name:'autrepage')]
    public function autrepage() : Response
    {

        return $this->render('home/autrepage.html.twig',[
            "message"=>"coucou"
        ]);
    }
}
