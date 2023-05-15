<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColaboradorController extends AbstractController
{
    #[Route('/colaborador', name: 'app_colaborador')]
    public function index(): Response
    {
        return $this->render('colaborador/index.html.twig', [
            'controller_name' => 'ColaboradorController',
        ]);
    }
}
