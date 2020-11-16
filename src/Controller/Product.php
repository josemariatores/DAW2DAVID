<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use AppBundle\Entity\Products;
use Symfony\Component\HttpFoundation\Response;


class Product extends AbstractController
{
    /**
     * @Route("/product/{id}", name="showproduct")
     */
    public function showAction($id)
    {
        $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No se ha encontrado el producto con id: ' . $id
            );
        }

        return $this->render('product.html.twig', array(
            'product' => $product
        ));

        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
    }
}
