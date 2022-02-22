<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController

{
    
    
    /**
     * @Route("/wish", name="wish")
     */
    public function wish(): Response
    {
       
        $wish = ['DANSER sur LA PLAGE','FAIRE DU BATEAU','FAIRE DU SOUS MARIN','VACANCES EN FAMILLE']; 

        return $this->render('wish/wish.html.twig', [
            'titre' => 'wish',
            'list' => $wish ,
        ]);
    }

     /**
     * @Route("/detail", name="detail")
     */
    public function detail(): Response
    {
        $question = $_GET["wish"];

         return $this->render('wish/detail.html.twig', [
            'titre' => 'detail',
            'question'=> $question,
        ]);
    }
}
