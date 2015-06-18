<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbejaController extends Controller
{
    
    public function showAction()
    {
        return $this->render('abeja/abeja.html.twig');
    }
}
