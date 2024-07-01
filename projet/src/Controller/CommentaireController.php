<?php

namespace App\Controller;

use DateTime;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\UserRepository;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentaireController extends AbstractController
{

    #[Route('/modifier_commentaire_{id<\d+>}', name: 'app_commentaire_modifier')]
    public function update($id, Request $request, CommentaireRepository $repoCom): Response
    {
        $commentaire = $repoCom->find($id);

        $taxi= $commentaire->getTaxi();

        $form = $this->createForm(CommentaireType::class, $commentaire);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $commentaire->setDateDeModification(new DateTime('now'));
            $commentaire->setTaxi($taxi);

            $repoCom->save($commentaire, 1);

            return $this->redirectToRoute('app_taxi', ['id' => $taxi->getId()]);
        }

        return $this->render('taxis/taxi.html.twig', [
            'formCommentaire' => $form->createView(),
            'taxi'         => $taxi
        ]);
    }

    #[Route('/supprimer_commentaire_{id<\d+>}', name: 'app_commentaire_supprimer')]
    public function delete($id, CommentaireRepository $repoCom)
    {
       $commentaire = $repoCom->find($id);
       $taxi = $commentaire->getTaxi();
       
       $repoCom->remove($commentaire, 1);

       return $this->redirectToRoute('app_taxi', ['id' => $taxi->getId()]);
    }

}
