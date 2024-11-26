<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/bts-sio', name: 'app_btssio')]
    public function btssio(): Response
    {
        return $this->render('btssio/btssio.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/documentation/scolaire', name: 'app_documentation_scolaire')]
    public function documentation1(): Response
    {
        return $this->render('documentation/documentation_scolaire.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/documentation/professionnels', name: 'app_documentation_professionnels')]
    public function documentation2(): Response
    {
        return $this->render('documentation/documentation_professionnels.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/documentation/tableau_de_synthese', name: 'app_documentation_synthese')]
    public function documentation3(): Response
    {
        return $this->render('documentation/documentation_personnels.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }



    #[Route('/veille-technologique', name: 'app_veillet')]
    public function veillet(): Response
    {
        return $this->render('VeilleT/VeilleT.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }



}
