<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
 // Route pour la page d'accueil
 #[Route('/', name: 'home', methods: ['GET'])]
 public function index(ArticleRepository $articles): Response
 {
     return $this->render('home/home.html.twig', [
         'articles' => $articles->findAll(),
     ]);
 }

 
}
