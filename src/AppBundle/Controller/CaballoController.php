<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CaballoController extends Controller
{
    
    public function showAction()
    {

        return $this->render('caballo/caballo.html.twig');
    }
}
