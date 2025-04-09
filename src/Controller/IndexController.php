<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class IndexController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('index/home.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $equipe = [
            ['nom' => 'Alice', 'role' => 'Rédactrice en chef'],
            ['nom' => 'Bob', 'role' => 'Journaliste'],
            ['nom' => 'Claire', 'role' => 'Photographe'],
        ];

        return $this->render('index/about.html.twig', [
            'equipe' => $equipe,
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('index/contact.html.twig', [
        ]);
    }

}

 