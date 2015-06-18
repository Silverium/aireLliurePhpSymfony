<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RootController extends Controller
{
    
    public function showAction()
    {
        return $this->render('root/root.html.twig');
    }
}
