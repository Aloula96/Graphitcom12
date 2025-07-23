<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Form\DevisType;
use App\Entity\SiteVitrine;
use App\Form\SiteVitrineTypeForm;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class DevisController extends AbstractController
{
    #[Route('/devis', name: 'app_devis')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $devis = new Devis();
        $form = $this->createForm(DevisType::class, $devis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($devis);
            $entityManager->flush();

            $email = (new Email())
                ->from('amine@example.com')
                ->to('baji.lamallem@gmail.com')
                ->subject('test devis')
                ->html(
                    "Nom: " . $devis->getLastName() . "<br>" .
                    "Prénom: " . $devis->getFirstName() . "<br>" .
                    "Email: " . $devis->getEmail() . "<br>" .
                    "Téléphone: " . $devis->getPhone()
                );

            $mailer->send($email);

            return $this->redirectToRoute('app_devis');
        }

        return $this->render('devis/index.html.twig', [
            'form' => $form->createView(),
            'devis' => $devis,
        ]);
    }

    #[Route('/siteVitrine', name: 'app_vitrine')]
    public function vitrine(
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $vitrine = new SiteVitrine();
        $form = $this->createForm(SiteVitrineTypeForm::class, $vitrine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vitrine);
            $entityManager->flush();

            $email = (new Email())
                ->from('amine@example.com')
                ->to('baji.lamallem@gmail.com')
                ->subject('devis site vitrine')
                ->html(
                    "Nom: " . $vitrine->getLastName() . "<br>" .
                    "Prénom: " . $vitrine->getFirstName() . "<br>" .
                    "Email: " . $vitrine->getEmail() . "<br>" .
                    "Téléphone: " . $vitrine->getPhone()
                );

            $mailer->send($email);

            return $this->redirectToRoute('app_devis');
        }

        return $this->render('siteVitrine/vitrine.html.twig', [
            'form' => $form->createView(),
            'vitrine' => $vitrine,
        ]);
    }
}
