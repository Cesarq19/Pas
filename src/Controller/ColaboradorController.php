<?php

namespace App\Controller;

use App\Entity\Usuario;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
