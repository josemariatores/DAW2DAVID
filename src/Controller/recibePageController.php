<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;




class recibePageController extends AbstractController
{
    /**
     * @Route("/recibe-page", name="recibe-page")
     */
    public function recibe(Request $request)
    {
        $name=$request->request->get('name');
        $email=$request->request->get('message');
        $message=$request->request->get('email');
        return $this->render('recibe-page.html.twig', [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
    }
}
