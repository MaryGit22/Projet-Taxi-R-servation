<?php

namespace App\Controller;

use DateTime;
use App\Entity\Taxis;
use App\Form\TaxisType;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\TaxisRepository;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TaxisController extends AbstractController
{
    #[Route('/add_taxi', name: 'app_taxis_add')]
    public function addTaxi(Request $request, TaxisRepository $repoTax, SluggerInterface $slugger): Response
    {
        $taxi = new Taxis();

        $form = $this->createForm(TaxisType::class, $taxi);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $file = $form->get('photoTaxi')->getData();
            // dd($file);
            $fileName = $slugger->slug($taxi->getNom()) . uniqid() . '.' . $file->guessExtension();

            //dd($fileName);
            
            try {
                $file->move($this->getParameter('taxis_photos'), $fileName);
            } catch (FileException $e) 
            {
               
            }

            $taxi->setPhoto($fileName);

            $repoTax->save($taxi,1);

            return $this->redirectToRoute('app_home');
        }

        return $this->render('taxis/form.html.twig', [
            'formTaxis' => $form->createView(),
        ]);

    }

    #[Route('/taxis', name: 'app_taxis')]
    public function listetaxi(TaxisRepository $repoTax)
    {
        $taxis = $repoTax->findAll();

        return $this->render('taxis/index.html.twig', [
            'taxis' => $taxis,
        ]);
    }

    #[Route('/taxi_{id<\d+>}', name: 'app_taxi')]
    public function oneTaxi($id, TaxisRepository $repoTax, Request $request, CommentaireRepository $repoCom)
    {
        $taxi = $repoTax->find($id);

        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $commentaire->setDateDeCreation(new DateTime('now'));
            $commentaire->setTaxi($taxi);

            $repoCom->save($commentaire, 1);

            return $this->redirectToRoute('app_taxi', ['id' => $id]);
        }

        return $this->render('taxis/taxi.html.twig', [
            'taxi' => $taxi,
            'formCommentaire' => $form->createView()
        ]);
    }

    #[Route('/gestionTaxis', name: 'app_taxis_gestion')]
    public function gestionTaxi(TaxisRepository $repoTax)
    {
        $taxis = $repoTax->findAll();

        return $this->render('taxis/gestionTaxi.html.twig', [
            'taxis' => $taxis,
        ]);
    }


    #[Route('/update_taxi_{id<\d+>}', name: 'app_taxi_update')]
    public function update($id, Request $request, TaxisRepository $repoTax, SluggerInterface $slugger)
    {
        $taxi = $repoTax->find($id);

        $form = $this->createForm(TaxisType::class, $taxi);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form->get('photoTaxi')->getData();

            if($file)
            {
                $fileName = $slugger->slug($taxi->getNom()) . uniqid() . '.' . $file->guessExtension();

                try{
                    $file->move($this->getParameter('taxis_photos'), $fileName);
                }catch(FileException $e)
                {
                    // gestion des erreurs d'upload
                }

                $taxi->setPhoto($fileName);
            }

            $repoTax->save($taxi,1);

            return $this->redirectToRoute('app_taxis');
        }

        return $this->render('taxis/form.html.twig', [
            'formTaxis' => $form->createView(),
        ]);
    }

    #[Route('/delete_taxi_{id<\d+>}', name: 'app_taxi_delete')]
    public function delete($id, TaxisRepository $repoTax)
    {
        $taxi = $repoTax->find($id);

        $repoTax->remove($taxi,1);

        return $this->redirectToRoute('app_taxis');
    }
}
