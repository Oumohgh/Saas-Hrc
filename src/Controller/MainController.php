<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{

#[Route('/')]
    public function Homepage(){

    $resumeCount=200;
        return $this->render('main/homepage.html.twig',[
            'resumeNumber'=>$resumeCount,
        ]);
    }
}
