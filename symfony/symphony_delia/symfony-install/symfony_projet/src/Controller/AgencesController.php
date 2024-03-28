<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgencesController extends AbstractController
{
    #[Route('/agences', name: 'app_agences')]
    public function index(): Response
    {
        return $this->render('agences/index.html.twig', [
            'controller_name' => 'AgencesController',
        ]);
    }

    public function listAgences(): Reponse
    {
        $agences = $this->getDoctrine()->getRepository(Agences::class)->findAll();
    }
}
