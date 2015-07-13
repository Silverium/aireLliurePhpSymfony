<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;


class RootController extends Controller
{

    public function showAction()
    {
        return $this->render('root/root.html.twig');
    }


// ...
    public function createAction()
    {
        $product = new Product();
        $product->setName('Mierda Seca');
        $product->setPrice('54.99');
        $product->setDescription('caca de la vaca');

        $em = $this->getDoctrine()->getManager();

        $em->persist($product);
        $em->flush();

        return new Response('Created product id ' . $product->getId());
    }
    public function producedAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        // ... do something, like pass the $product object into a template
        return new Response($product->getDescription());
    }
}