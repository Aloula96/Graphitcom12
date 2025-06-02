<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SiteVitrineController extends AbstractController
{
    #[Route('/site/vitrine', name: 'app_site_vitrine')]
    public function index(): Response
    {
        return $this->render('site_vitrine/index.html.twig', [
            'controller_name' => 'SiteVitrineController',
        ]);
    }
}
