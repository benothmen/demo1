<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\Persistence\ManagerRegistry;

class BlogController extends AbstractController
{
    
    #[Route('/blog', name: 'blog')]
    public function index(): Response
    {
        $articles=$repo->findAll('Titre de l\'article');
        return $this->render('blog/index.html.twig',['controller_name' =>
        'BlogController','articles'=>$articles]);
    }
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('blog/home.html.twig');
    }
    #[Route('/blog/12', name: 'blog_show')]
    public function show()
    {
        return $this->render('blog/show.html.twig');
    }
}
