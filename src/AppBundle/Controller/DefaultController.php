<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\competition;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{

    public function newAction(Request $request)
    {
        $competition = new competition();


        $form = $this->createFormBuilder($competition)
            ->add('place', 'text')
            ->add('title', 'text')
            ->add('inscriptable')
            ->add('date')
            ->add('time')
            ->add('imgLink')
            ->add('organizer')
            ->add('cost')
            ->add('prize')
            ->add('inscrLink')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();

            $em->persist($competition);
            $em->flush();
            //return $this->redirectToRoute('task_success');
            return new Response('Created product id ' . $competition->getId());
        }

        // ...
        $competitions = $this->getDoctrine()
            ->getRepository('AppBundle:competition')
            ->findAll();


        if (!$competitions) {
            throw $this->createNotFoundException(
                'No competitions found '
            );
        }

        // ... do something, like pass the $product object into a template



        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),'competitions' => $competitions)
        );
    }
    public function doneAction(){
        return $this->render('default/done.html.twig');
    }

}