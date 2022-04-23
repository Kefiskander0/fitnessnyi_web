<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserloginController extends AbstractController

{


    /**
     * @Route("/userlogin", name="app_userlogin")
     */
    public function index(): Response
    {
        return $this->render('userlogin/index.html.twig', [
            'controller_name' => 'UserloginController',
        ]);
    }


    /**
     * @Route("/login", name="app_login", methods={"GET", "POST"})
     */
    public function login(Request $request,UserRepository $userRepository): Response
    {
        $mailAdress="";
        $password="";
        $isemptyerror="";

        $mailAdress=$request->query->get('mailAdresse');
        $password=$request->query->get('passworde');


        $user = new User();
        $user->setMailAdress($mailAdress);
        $user->setPassword($password);


            if ($user->getMailAdress() != null && $user->getPassword() != null) {
                $user1 = $userRepository->findOneByMailAddressAndPassword($user);
                if ($user1 != null) {
                    if($user1->getBlocRaison()==null){
                        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);

                    }else{

                        return $this->redirectToRoute('app_userlogin', [], Response::HTTP_SEE_OTHER);

                    }
                } else {
                    return $this->redirectToRoute('app_userlogin', [], Response::HTTP_SEE_OTHER);

                }

        }
        return $this->render('inscription/index.html.twig', [
            'user' => $user
        ]);
    }




    /**
     * @Route("/sendmail", name="app_send_mail", methods={"GET", "POST"})
     */
    public function sendmail( \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('kefiskander99@gmail.com')
            ->setTo('skander.kefi@esprit.tn')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'userlogin/mail.html.twig',
                    []
                ),
                'text/html'
            )

            // you can remove the following code if you don't define a text version for your emails

        ;

        $mailer->send($message);

        return $this->render('inscription/index.html.twig', []
            );
    }


}
