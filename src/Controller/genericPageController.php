<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use symfony\component\HttpFoundation\Session\SessionInterface;

class genericPageController extends AbstractController
{
    /**
     * @Route("/generic-page", name="generic-page")
     */
    public function generic()
    {
        return $this->render('generic-page.html.twig', [
            'controller_name' => 'genericPageController',
        ]);
    }
}
