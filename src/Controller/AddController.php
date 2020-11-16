<?php
namespace App\Controller;

use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(EntityManagerInterface $Emanager)
    {
        foreach($this->travels as $key => $value){
            foreach($value as $values){
            
            $product = new Products();
            $product->setPlace($values['title']);
            $product->setImagen($values['img']);
            $product->setDescription($values['description']);

            $Emanager->persist($product);
            }
            $Emanager->flush();
        }
        
        return $this->render('index.html.twig',[
            'id'=>'',
            'titulo'=>'Viaje añadido'
            ]);
    }
    
    private $travels=[
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
}