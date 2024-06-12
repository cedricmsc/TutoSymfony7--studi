<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
   // #[Route('/home')]
    public function number()
    {
      $number = (rand(75,80));
      $home_Controller = 'HomeController';
      return $this->render('home/home.html.twig',[
          "number" => $number,
          "controller_name" => $home_Controller
      ]);
    }
}


