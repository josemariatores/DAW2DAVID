<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;




class login extends AbstractController
{
    /**
     * @Route("/login-page", name="login-page")
     */
    public function login(SessionInterface $session)
    {
        $user = $session ->get('usuario');
        $userlog = strlen($user)>0?"Bienvenido,".$user:"";
        return $this->render('login-page.html.twig', [
            'usuario' => $userlog
        ]);
    }
}


