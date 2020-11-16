<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class ProductsController extends AbstractController
{
    
    /**
     * @Route("/Products/{currentPage?1}/{currentTravel?USA}", name="Products")
     */
    public function products(SessionInterface $session,$currentPage,$currentTravel)
    {
        $usuname = $session->get('usuario');
        $usulog = strlen($usuname)>0?"Buenas ".$usuname:"";
        
        /** $categoria = $this->getDoctrine()
            *->getRepository(Categoria::class)
            *->findOneBy(['categoria' => $currentTravel]);*/
     

        $travels=$this->getDoctrine()
                        ->getRepository(Products::class)
                        ->findBy(['categoria'=>$currentTravel]);

        return $this->render('Products.html.twig',[
            'titulo'=>'Home',
            'data'=>$travels,
            'currentPage'=>$currentPage,
            'itemsPerPage' => 2,
            'currentTravel'=>$currentTravel
        ]);

        
    
 
/*     $travels=[
        'USA'=>[
            [
            'img'=>'Nueva-York.png',
            'title'=>'',
            'description'=>'',
        ],
        [
            'img'=>'Boston.png',
            'title'=>'',
            'description'=>'',
        ],
        [
            'img'=>'Chicago.png',
            'title'=>'',
            'description'=>'',
        ],
    ],
    'Europe'=>[
        [
        'img'=>'Londres.png',
            'title'=>'',
            'description'=>'',
        ],
        [
            'img'=>'Galway.png',
            'title'=>'',
            'description'=>'',
        ],
        [
            'img'=>'Islandia.png',
            'title'=>'',
            'description'=>'',
        ],
    ],
    'Asia'=>[
        [
        'img'=>'Tailandia.png',
            'title'=>'',
            'description'=>'',
        ],
        [
            'img'=>'Japon.png',
            'title'=>'',
            'description'=>'',
        ],
        [
            'img'=>'India.png',
            'title'=>'',
            'description'=>'',
        ]
    ]

    ];

    return $this->render('Products.html.twig', [
        'usuario' => $usulog,
        'data' =>$travels[$currentTravel],
        'currentPage' => $currentPage,
        'itemsPerPage' => 2,
        'currentTravel' => $currentTravel,
    ]); */
    
    }
}

    