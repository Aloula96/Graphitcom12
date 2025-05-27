<?php 
namespace App\Controller; 
use App\Entity\Contact;
use App\Form\ContactType; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 

class ContactController extends AbstractController 

{ 

    // #[Route('/contact', name: 'app_contact')] 

    // public function index(Request $request): Response 

    // { 

    //     $form = $this->createForm(ContactType::class); 

    //     $form->handleRequest($request); 
    //     if ($form->isSubmitted() && $form->isValid()) { 
    //         $data = $form->getData(); 
    //         $this->addFlash('success', 'Votre message a bien été envoyé !'); 
    //         return $this->redirectToRoute('app_contact'); 

    //     } 
    //     return $this->render('contact/index.html.twig', [ 

    //         'form' => $form->createView(), 

    //     ]); 

    // } 

    #[Route('/contact', name: 'app_contact')]
    public function add( Request $request,  EntityManagerInterface $entityManager): Response
    {
       

        $contact= new Contact();

        $form=$this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);

    

        if ($form->isSubmitted() && $form->isValid()) {
            // Recette complete ?? Pas sur !!
            // $recette->setUser(???????);
            // $recette->setCreatedAt(???????);
       
            // On enregistre une fois que tout est ok
            $entityManager->persist($contact);
            $entityManager->flush();
         
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
            'contact' => $contact,
        ]);
    }
    

} 