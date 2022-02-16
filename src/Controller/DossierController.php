<?php

namespace App\Controller;

use App\Entity\CoGerant;
use App\Entity\Dossier;
use App\Form\CoGerantType;
use App\Form\DossierType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DossierController extends AbstractController
{
    private EntityManagerInterface $em ;
    public  function  __construct(EntityManagerInterface $em)
    {
        $this->em = $em ;
    }

    #[Route('/dossier', name: 'dossier')]
    public function index(): Response
    {
        return $this->render('dossier/index.html.twig', [
            'controller_name' => 'DossierController',
        ]);
    }

    #[Route('/ouvertureDossier', name: 'ouvertureDossier')]
    public function ouvertureDossier( Request $request ): Response
    {
        $nomdeDossier = $request->get('nomdossier');
//        dd($nomdeDossier);
        $dossier = new Dossier();
        $coGerant = new CoGerant();
        $form1 = $this->createForm(CoGerantType::class , $coGerant);
        $form = $this->createForm(DossierType::class,$dossier);
        return $this->render('dossier/ouvertureDossier.html.twig', [
            'controller_name' => 'DossierController',
            'form' => $form->createView(),
            'form1' => $form1->createView()

        ]);
    }


}
