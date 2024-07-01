<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, 
                                EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            $this->addFlash('success', "Félicitations, Vous êtes inscrit");

            return $this->redirectToRoute('app_home');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}

 //  $url = $this->generateUrl('app_activation', ['token' => $user->getToken() ], UrlGeneratorInterface::ABSOLUTE_URL);

            // $email = (new Email())
            // ->from('preethatamby@gmail.com')
            // ->to($user->getEmail())
            // ->subject('confirmation de compte')
            // ->html("<p>Merci pour votre inscription, afin d\'activer votre compte cliquez </p><a href='$url'>ici</a>" );

            // $mailer->send($email);