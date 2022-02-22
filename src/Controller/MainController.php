<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/about.html.twig', [
            'titre' => 'page about',
        ]);
    }

    
   
    //  CTRL + D 
    /**
     * @Route("/about/", name="about")
     */
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'titre' => 'Page about',
        ]);
    }
}
