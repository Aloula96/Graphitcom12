<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Form\DevisType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class DevisController extends AbstractController
{
    #[Route('/devis', name: 'app_devis')]
    public function index(Request $request): Response
      
    { 

        $form = $this->createForm(DevisType::class); 

        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) { 
            $data = $form->getData(); 
            $this->addFlash('success', 'Votre message a bien été envoyé !'); 
            return $this->redirectToRoute('app_devis'); 

        } 
        return $this->render('devis/index.html.twig', [ 

            'form' => $form->createView(), 

        ]); 

    } 

}
    

