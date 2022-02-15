<?php

namespace App\Controller;
//use Dompdf\Dompdf;
//use Dompdf\Options;

use App\Entity\User;
use App\Form\RegistrationType;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    private SessionInterface $session ;

    public function __construct(private TokenStorageInterface $tokenStorage,
                                RequestStack $requestStack )
    {
         $this->session = $requestStack->getSession();
    }

    #[Route('/login', name: 'login')]
    public function index( AuthenticationUtils $authenticationUtils): Response
    {

        // obtenir l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();

        // dernier nom d'utilisateur entré par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();



        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'last_username' => $lastUsername,
            'error' => $error ,
        ]);
    }


    #[Route('/registre', name: 'registre')]
    public function registre(Request $request ,ManagerRegistry $doctrine , UserPasswordHasherInterface $hasher): Response
    {



        $objectManager=$doctrine->getManager();
        $user = new User();
        $form = $this->createForm(RegistrationType::class , $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $passwordHacher = $hasher->hashPassword($user,$user->getPassword());
            $user->setPassword($passwordHacher);
            $objectManager->persist($user);
            $objectManager->flush();

            $session = $request->getSession();
            $session->set('user',$user);

            $token =new UsernamePasswordToken($user , null , 'main' , $user->getRoles());
            $this->tokenStorage->setToken($token);
            $this->session->set('_security_main', serialize($token));


            $this->addFlash(
                'success',
                "Votre compte a bien ete créé terminer pour completer quelle etape"
            );
            return $this->redirectToRoute('confirmation') ;
        }

        return $this->render('login/registre.html.twig', [
            'form' => $form->createView(),
            'email'=> $request->get('email')

        ]);
    }
    #[Route('/confirmation', name: 'confirmation')]
    public function confirmation(): Response
    {

        return $this->render('login/confirmationF.html.twig', [

        ]);
    }

    #[Route('/definitionPaiement', name: 'definitionPaiement')]
    public function definitionPaiement(): Response
    {
        return $this->render('login/definitionPaiement.html.twig', [

        ]);
    }
    #[Route('/mail', name: 'email')]
    public function envoieMailAcceptation(MailerInterface $mailer){
        $date = new \DateTime();
        $mail = ( new TemplatedEmail())
        ->from('expediteur@demo.test')
        ->to('destinataire@demo.test')
        ->subject('acceptation')
            ->htmlTemplate('login/mypdf.html.twig')
            ->context([
                'date'=> $date
                ]

            );
        $mailer->send($mail);
        return $this->render('login/definitionPaiement.html.twig', [
]);

    }


    #[Route('/logout', name: 'logout')]
    public function logout()
    {
////        return $this->render('login/definitionPaiement.html.twig', [
//
//        ]);
    }
//    public function endex()
//    {
//        // Configure Dompdf according to your needs
//        $pdfOptions = new Options();
//        $pdfOptions->set('defaultFont', 'Arial');
//
//        // Instantiate Dompdf with our options
//        $dompdf = new Dompdf($pdfOptions);
//
//        // Retrieve the HTML generated in our twig file
//        $html = $this->renderView('default/mypdf.html.twig', [
//            'title' => "Welcome to our PDF Test"
//        ]);
//
//        // Load HTML to Dompdf
//        $dompdf->loadHtml($html);
//
//        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
//        $dompdf->setPaper('A4', 'portrait');
//
//        // Render the HTML as PDF
//        $dompdf->render();
//
//        // Store PDF Binary Data
//        $output = $dompdf->output();
//
//        // In this case, we want to write the file in the public directory
//        $publicDirectory = $this->get('kernel')->getProjectDir() . '/public';
//        // e.g /var/www/project/public/mypdf.pdf
//        $pdfFilepath =  $publicDirectory . '/mypdf.pdf';
//
//        // Write file to the desired path
//        file_put_contents($pdfFilepath, $output);
//
//        // Send some text response
//        return new Response("The PDF file has been succesfully generated !");
//    }

}
