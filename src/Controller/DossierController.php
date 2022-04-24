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

        $user = $this->getUser();
        $dossiers = $this->dossierRepository->findByUser($user);
        return $this->render('dossier/indexE.html.twig', [
            'controller_name' => 'DossierController',
            'dossiers' => $dossiers
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

        return $this->redirectToRoute('ouvertureDossier' ,[
        ]);
    }

    #[Route('/ouvertureDossier', name: 'ouvertureDossier')]
    public function ouvertureDossier( Request $request ): Response
    {
        $user = $this->getUser();
        //$nomdeDossier = $request->get('nomdossier');
        /**********************************************/

        /**********************************************/
//       dd($nomdeDossier);
        $dossier = new Dossier();
        $coGerant = new CoGerant();





        //$nomdeDossier =strval($nomdeDossier);

        $form1 = $this->createForm(CoGerantType::class , $coGerant);

        $form = $this->createForm(DossierType::class,$dossier);
        $form->remove('coGerant');

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){



            /*****************************************************************/

            $j1=$request->get("nb_elements");
            $j= intval($j1, 10);

            for($i=1 ; $i<$j  ; $i++ ){

                $coGerant->setNomCogerant($request->get('nomCogerant('.$i.')'));
                $coGerant->setPrenomCogerant($request->get('prenomCogerant('.$i.')'));
                $coGerant->setParticipation($request->get('capitalCogerant('.$i.')'));
                $dossier ->getCoGerant()->add($coGerant);
                dd($j);

            }

            /*****************************************************************/
            $dossier->setUser($user);

            $coGerant->setDossier($dossier);
            $this->em->persist($coGerant);
            $this->em->persist($dossier);

            $this->em->flush();
            $FormeJuridique =$dossier->getFormeJuridique();
            $id=$dossier->getId();
            $raisonSociale = $dossier->getRaisonSociale();
            $nomdeDossier= $dossier->getNomDossier();


          //  $this->em->flush();


            $this->addFlash('succes' , 'bien crée');

            return $this->redirectToRoute('ouvertureExcercice' ,[
              'formjuridique'=> $FormeJuridique,
              'idDossier'=> $id ,
              'raisonSociale' => $raisonSociale,
                'nomdeDossier' => $nomdeDossier,

            ]);
         }



        return $this->render('dossier/newOuvertureDossier.html.twig', [
            'controller_name' => 'DossierController',
            'form' => $form->createView(),
           // 'nomDossier'=> $nomdeDossier,
        ]);
    }

    #[Route('/ouvertureExcercice', name: 'ouvertureExcercice')]
   public function  ouvertureExcerice(Request $request ):Response
        {
            $g = $request->get('formjuridique');
            //  dd($g);
            $rr = $request->get('raisonSociale');
            $nn = $request->get('nomdeDossier');

            $exercice = new Excercice();
            $form = $this->createForm(ExcerciceType::class,$exercice);

            return $this->render('dossier/newOuvertureExcercice.html.twig', [
               'controller_name' => ' ',
                'formjuridique' =>$g ,
                'raisonSociale'=> $rr ,
                'nomdeDossier' =>$nn,
                'form' => $form->createView()


            ]);
        }

    #[Route('/donneesExcerice', name: 'donneesExcerice')]
    public function  donneesExcerice(Request $request):Response
    {
        $exercice = new Excercice();
        $form = $this->createForm(ExcerciceType::class,$exercice);


        $formjurdique = $request->get('formjuridique');

        $regime = $request->get('regime');

        //ken loula oui  (1er excercie)

        $firstYesNo = $request->get('firstYesNo');
        $ClotureChangeOuNon= $request->get('ClotureChangeOuNon');
        if ($firstYesNo == 'oui') {


            //ken forme juridique feha condition = SCI
            if ($formjurdique == "SCI" or $formjurdique == "Entreprise individuelle" or $formjurdique == "EIRL" or $formjurdique == "Autoentrepreneur") {
                $dateCreationEntreprise = $request->get('dateCreationEntreprise');
                $datecloture1ex = $request->get('datecloture1ex');

                $form->get('dateOuverture')->setData($dateCreationEntreprise);
                $form->get('dateCloture')->setData($datecloture1ex);
                $form->get('regimeTVA')->setData($regime);
                $form ->handleRequest($request);
                if($form->isSubmitted() && $form->isValid()){
                    $this->em->persist($exercice);

                    $this->em->flush();
                }


                return $this->render('dossier/donneesExcerice.html.twig', [
                    'controller_name' => ' ',
                    'form' => $form->createView(),
//

                ]);

            } //ken forme juridique different de SCI
            else {
                $datesignatureStatus = $request->get('datesignatureStatus');
                $jourCloture1erEerc = $request->get('jourCloture1erEerc');
                $MoisCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT = $request->get('MoisCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT');
                $anneeCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT = $request->get('anneeCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT');

                $date_kemla =  $jourCloture1erEerc .'/'. $MoisCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT . '/'. $anneeCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT;

                $form->get('dateOuverture')->setData($datesignatureStatus);
                $form->get('dateCloture')->setData($date_kemla);
                $form->get('regimeTVA')->setData($regime);
                $form ->handleRequest($request);
                if($form->isSubmitted() && $form->isValid()){
                    $this->em->persist($exercice);

                    $this->em->flush();
                }


                return $this->render('dossier/donneesExcerice.html.twig', [
                    'controller_name' => ' ',
                    'form' => $form->createView(),
//

                ]);
            }

        }
        //ken loula non (1er excercie)
    else
        {


            //ken forme juridique feha condition = SCI
            if ($formjurdique == "SCI" or $formjurdique == "Entreprise individuelle" or $formjurdique == "EIRL" or $formjurdique == "Autoentrepreneur") {
            $dateFinDernierBilanComptable =$request->get('dateFinDernierBilanComptable');
            $nouvelExcerciceOuverture = $request->get('nouvelExcerciceOuverture');
            $nouvelExcerciceCloture = $request->get('nouvelExcerciceCloture');

                $form->get('dateOuverture')->setData($nouvelExcerciceOuverture);
                $form->get('dateCloture')->setData($nouvelExcerciceCloture);
                $form->get('regimeTVA')->setData($regime);

                $form ->handleRequest($request);
                if($form->isSubmitted() && $form->isValid()){
                    $this->em->persist($exercice);

                    $this->em->flush();
                }

                return $this->render('dossier/donneesExcerice.html.twig', [
                    'controller_name' => ' ',
                    'form' => $form->createView(),
//

                ]);


            } //ken forme juridique different de SCI

            else {
                $dateFinDernierBilanComptable =$request->get('dateFinDernierBilanComptable');
                $nouvelExcerciceOuverture = $request->get('nouvelExcerciceOuverture');

                $form->get('dateOuverture')->setData($nouvelExcerciceOuverture);

                $form->get('regimeTVA')->setData($regime);



                //ken nouvel excercice changera
                if ($ClotureChangeOuNon == 'oui') {
                    $JOURclotureNouvelExNonOuiDifSCI = $request->get('JOURclotureNouvelExNonOuiDifSCI');
                    $AnneeclotureNouvelExNonOuiDifSCI = $request->get('AnneeclotureNouvelExNonOuiDifSCI');
                    $MoisclotureNouvelExNonOuiDifSCI = $request->get('MoisclotureNouvelExNonOuiDifSCI');


 $date_xx = $JOURclotureNouvelExNonOuiDifSCI .'/'.$MoisclotureNouvelExNonOuiDifSCI .'/'.$AnneeclotureNouvelExNonOuiDifSCI ;
                    $form->get('dateCloture')->setData($date_xx);
                    $form ->handleRequest($request);
                    if($form->isSubmitted() && $form->isValid()){
                        $this->em->persist($exercice);

                        $this->em->flush();
                    }

                    return $this->render('dossier/donneesExcerice.html.twig', [
                        'controller_name' => ' ',
                        'form' => $form->createView(),

                    ]);

                } //ken nouvel excercice ne chanegra pas
                else {
                    $CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique = $request->get('CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique');
                    $dateFinDernierBilanComptable =$request->get('dateFinDernierBilanComptable');
                    $nouvelExcerciceOuverture = $request->get('nouvelExcerciceOuverture');


                    $form->get('dateOuverture')->setData($nouvelExcerciceOuverture);
                    $form->get('dateCloture')->setData($CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique);
                    $form->get('regimeTVA')->setData($regime);
                    $form ->handleRequest($request);
                    if($form->isSubmitted() && $form->isValid()){
                        $this->em->persist($exercice);

                        $this->em->flush();
                    }

                    return $this->render('dossier/donneesExcerice.html.twig', [
                        'controller_name' => ' ',
                        'form' => $form->createView(),

                    ]);
                }


            }
        }







//        $form->handleRequest($request);





        return $this->render('dossier/donneesExcerice.html.twig', [
            'controller_name' => ' ',
            'form' => $form->createView(),


        ]);
    }

}
