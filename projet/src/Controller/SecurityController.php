<?php

namespace App\Controller;

use App\Form\AdminType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/profil', name: 'app_profil')]
    public function profil() : Response
    {
        return $this->render('security/profil.html.twig');
    }

    
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {

        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/passer_en_admin_{id<\d+>}', name: 'app_passer_en_admin')]
    public function passerEnAdmin($id, UserRepository $repo, Request $request)
    {
        $user = $repo->find($id);

        if(!$user)
        {
            $this->addFlash('error', "l'utilisateur n'éxiste pas !");

            return $this->redirectToRoute('app_home');
        }

        $secret = "azerty";

        $form = $this->createForm(AdminType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $formSecret = $form->get('mdp')->getData();

            if($secret == $formSecret)
            {
                $user->setRoles(['ROLE_ADMIN']);

                $repo->save($user, 1);

                $pseudo = $user->getPseudo();

                $this->addFlash('success', "Félicitaion, vous venez de faire passer $pseudo en admin");

                return $this->redirectToRoute('app_home');
            }else{
                $this->addFlash('error', "vous n'êtes pas autorisé à promouvoir en admin !!!");

                return $this->redirectToRoute('app_home');
            }
        }

        return$this->render('security/passer_en_admin.html.twig', [
            'user' => $user,
            'formAdmin' => $form->createView()
        ]);
    }

   
}


