<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Psr\Log\LoggerInterface;

class LuckyController extends Controller
{

  public function numberAction($max, LoggerInterface $logger)
  {
      $logger->info('We are logging!');
      // ...

    // public function number($max)
    // {
      $number = mt_rand(0, $max);

        return $this->render('lucky/number.html.twig', array(
          'number' => $number,
        ));
    }


}
