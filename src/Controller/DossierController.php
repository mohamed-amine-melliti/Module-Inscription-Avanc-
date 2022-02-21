<?php

namespace App\Controller;

use App\Entity\CoGerant;
use App\Entity\Dossier;
use App\Form\CoGerantType;
use App\Form\DossierType;
use App\Repository\DossierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DossierController extends AbstractController
{
    private EntityManagerInterface $em ;
    private DossierRepository $dossierRepository ;
    public  function  __construct(EntityManagerInterface $em , DossierRepository $dossierRepository )
    {

        $this->em = $em ;
        $this->dossierRepository = $dossierRepository ;
    }
    #[Route('/dossier', name: 'dossiers')]
    public function show(): Response
    {

////        $objectManager=$doctrine->getManager();
//        $user=$this->getUser()->getUserIdentifier();
//        $dossiers = $this->dossierRepository->findByUserId($user);
////         dd($dossiers);

//
        return $this->render('dossier/index.html.twig', [
            'controller_name' => 'DossierController',
        ]);
    }

    #[Route('/dossier/{type}', name: 'dossier')]
    public function index( String $type ,  ManagerRegistry $doctrine ): Response
    {

        $objectManager=$doctrine->getManager();
        $user=$this->getUser();

        $user->setmodePaiementChoisi($type);
        $objectManager ->persist($user);
        $objectManager ->flush();
        return $this->render('dossier/index.html.twig', [
            'controller_name' => 'ouvertureDossier',
        ]);
    }

    #[Route('/ouvertureDossier', name: 'ouvertureDossier')]
    public function ouvertureDossier( Request $request ): Response
    {
        $user = $this->getUser();
        $nomdeDossier = $request->get('nomdossier');
//       dd($nomdeDossier);
        $dossier = new Dossier();
        $coGerant = new CoGerant();
        $nomdeDossier =strval($nomdeDossier);

        $form1 = $this->createForm(CoGerantType::class , $coGerant);
//        $form1->add('save', SubmitType::class, [
//            'attr' => ['class' => 'save'],
//        ]);

        $form = $this->createForm(DossierType::class,$dossier);
        $form->add('save', SubmitType::class, [
            'attr' => ['class' => 'save'],
        ]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $dossier->setNomDossier($nomdeDossier);
            $dossier->setUser($user);
            $this->em->persist($dossier);
////            if($form1->isSubmitted() && $form1->isValid()){
//            $idossier = $dossier->getId();
////-            $idossier= intval($idossier);
//            $coGerant->setDossier($idossier);
//            $this->em->persist($coGerant);
            $this->em->flush();

          //  $this->em->flush();


            $this->addFlash('succes' , 'bien crée');

            return $this->redirectToRoute('dossiers');

        }



        return $this->render('dossier/ouvertureDossier.html.twig', [
            'controller_name' => 'DossierController',
            'form' => $form->createView(),
            'form1' => $form1->createView()

        ]);
    }


}
