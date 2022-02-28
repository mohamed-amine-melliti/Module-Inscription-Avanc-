<?php

namespace App\Controller;

use App\Entity\CoGerant;
use App\Entity\Dossier;
use App\Entity\Excercice;
use App\Form\CoGerantType;
use App\Form\DossierType;
use App\Form\ExcerciceType;
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

        $form->handleRequest($request);
        $form1->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $dossier->setNomDossier($nomdeDossier);
            $dossier->setUser($user);
////            if($form1->isSubmitted() && $form1->isValid()){
//            $idossier = $dossier->getId();
////-            $idossier= intval($idossier);
           $coGerant->setDossier($dossier);
            $this->em->persist($coGerant);
            $this->em->persist($dossier);
            
            $this->em->flush();
            $FormeJuridique =$dossier->getFormeJuridique();
            $id=$dossier->getId();
            $raisonSociale = $dossier->getRaisonSociale();
            

          //  $this->em->flush();


            $this->addFlash('succes' , 'bien crée');

            return $this->redirectToRoute('ouvertureExcercice' ,[
              'formjuridique'=> $FormeJuridique,
              'idDossier'=> $id ,
              'raisonSociale' => $raisonSociale
             
        ]);
    }



        return $this->render('dossier/ouvertureDossier.html.twig', [
            'controller_name' => 'DossierController',
            'form' => $form->createView(),
            'form1' => $form1->createView()

        ]);
    }

    #[Route('/ouvertureExcercice', name: 'ouvertureExcercice')]
   public function  ouvertureExcerice(Request $request ):Response
        {
            $g = $request->get('formjuridique');
            //  dd($g);
            $rr = $request->get('raisonSociale');
          $exercice = new Excercice();
            $form = $this->createForm(ExcerciceType::class,$exercice);

            return $this->render('dossier/ouvertureExcercie.html.twig', [
               'controller_name' => ' ',
                'formjuridique' =>$g ,
                'raisonSociale'=> $rr ,
                'form' => $form->createView()


            ]);
        }

    #[Route('/donneesExcerice', name: 'donneesExcerice')]
    public function  donneesExcerice(Request $request):Response
    {
        $exercice = new Excercice();
        $form = $this->createForm(ExcerciceType::class,$exercice);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($exercice);

            $this->em->flush();
        }



        return $this->render('dossier/donneesExcerice.html.twig', [
            'controller_name' => ' ',
            'form' => $form->createView()


        ]);
    }

}
