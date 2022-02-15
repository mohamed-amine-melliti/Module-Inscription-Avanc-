<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DossierController extends AbstractController
{
    #[Route('/dossier', name: 'dossier')]
    public function index(): Response
    {
        return $this->render('dossier/index.html.twig', [
            'controller_name' => 'DossierController',
        ]);
    }

    #[Route('/ouvertureDossier', name: 'ouvertureDossier')]
    public function ouvertureDossier(): Response
    {
        return $this->render('dossier/ouvertureDossier.html.twig', [
            'controller_name' => 'DossierController',
        ]);
    }


}
