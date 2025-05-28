<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Form\DevisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class DevisController extends AbstractController
{
    #[Route('/devis', name: 'app_devis')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
      
    { 
        $devis = new Devis();
        $form = $this->createForm(DevisType::class,$devis); 
        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) { 

            $entityManager->persist($devis);
            $entityManager->flush();
         
            return $this->redirectToRoute('app_devis');
        }

        return $this->render('devis/index.html.twig', [
            'form' => $form->createView(),
            'devis' => $devis,
        ]);
    }
         

        

    } 


    

