<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class contactPageController extends AbstractController
{
    /**
     * @Route("/contact-page", name="contact-page")
     */
    public function contact()
    {
        return $this->render('contact-page.html.twig', [
            'controller_name' => 'contactPageController',
        ]);
    }
}
