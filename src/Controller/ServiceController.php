<?php 

 

namespace App\Controller; 

 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 

use Symfony\Component\HttpFoundation\Response; 

use Symfony\Component\Routing\Attribute\Route; 

 

final class ServiceController extends AbstractController 

{ 

    #[Route('/service', name: 'app_service')] 

    public function index(): Response 

    { 

        $services = [ 

            [ 

                'title' => 'APPLICATION', 

                'description' => 'Nous concevons des applications et performantes, adaptées à vos besoins .', 

                'image' => 'service1.png' 

            ], 

            [ 

                'title' => 'SITE E-COMMERCE', 

                'description' => 'Créez dès maintenant votre site e-commerce avec notre entreprise et augmentez vos ventes en ligne', 

                'image' => 'service2.png' 

            ], 

            [ 

                'title' => 'WEBDESIGN', 

                'description' => 'Nous donnons vie à votre identité visuelle avec des interfaces attractives et fonctionnelles.', 

                'image' => 'service3.png' 

            ], 

            [ 

                'title' => 'SITE VITRINE', 

                'description' => 'Créez dès maintenant votre site vitrine avec notre entreprise et boostez votre visibilité en ligne.', 

                'image' => 'service4.png' 

            ], 

            [ 

                'title' => 'SEO', 

                'description' => 'Optimisez votre visibilité sur Google grâce à notre expertise en référencement naturel (SEO). ', 

                'image' => 'service5.png' 

            ], 

            [ 

                'title' => 'FORMATION', 

                'description' => 'Que vous soyez débutant ou confirmé, apprenez à votre rythme avec Grafitcom.', 

                'image' => 'service6.png' 

            ], 

        ]; 

 

        return $this->render('service/index.html.twig', [ 

            'services' => $services, 

        ]); 

    } 

} 

 

 