<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonsController extends AbstractController
{
    /**
     * @Route("/persons", name="persons")
     */
    public function index(): Response
    {
        return $this->render('persons/index.html.twig', [
            'controller_name' => 'PersonsController',
        ]);
    }
}
