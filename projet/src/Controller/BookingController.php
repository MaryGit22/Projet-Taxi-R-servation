<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\BookingType;
use App\Entity\BookingDetail;
use App\Repository\BookingRepository;
use App\Repository\BookingDetailRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookingController extends AbstractController
{
    #[Route('/booking', name: 'app_booking')]
    public function book(BookingRepository $repo, Request $request, BookingDetailRepository $repoDet): Response
    {
        $book = new Booking();

        // récupère l'utilisteur connecté
        $user = $this->getUser();

        $form = $this->createForm(BookingType::class, $book);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $bookingDetail = new BookingDetail();

            $bookingDetail->setBooking($book);
            $bookingDetail->setUser($user);


            $repoDet->save($bookingDetail); // sans 1
            $repo->save($book,1);

            $this->addFlash('success', "Félicitaions, Vous avez reservé votre trajet");

            return $this->redirectToRoute('app_home');
        }

        return $this->render('booking/form.html.twig', [
            'formBooking' => $form->createView(),
        ]);
    }
}
