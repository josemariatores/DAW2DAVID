<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class recibelogin extends AbstractController
{
    /**
     * @Route("/recibelogin", name="recibe-login")
     */
     public function recibelogin (Request $request, SessionInterface $session)
    {
        $session->set('usuario', $request->request->get('name'));
        $session->set('email', $request->request->get('email'));
        $session->set('password', $request->request->get('password'));
        $user = $session->get('usuario');
        $email = $session->get('email');
        $password = $session->get('password');
        $userlogg = strlen($user)>0?"Buenas ".$user:"";

        return $this->render('index.html.twig', [
            'Nombre' => $user,
            'Email' => $email,
            'Contra' => $password,
            'usuario' => $userlogg

        ]);
    }
}