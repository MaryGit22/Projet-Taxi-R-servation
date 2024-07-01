<?php

namespace App\Controller;

use App\Repository\TaxisRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class AdminController extends AbstractController
{
   
    #[Route('/admin', name: 'app_admin')]
    public function admin(TaxisRepository $repoTax): Response
    {
        $taxis = $repoTax->findAll();

        return $this->render('admin/index.html.twig', [
            'taxis' => $taxis,
        ]);
    }
}
