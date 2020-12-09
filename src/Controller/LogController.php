<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class logController extends AbstractController
{
    /**
     * @Route("/logger/{name}", methods={"GET"}, name="task_crte")
     * 
     */
    public function index($name, LoggerInterface $logger)
    {
        $logger->info("Saying hello to $name!");
        return new Response('Hello,' . $name, 200);
    }
}
