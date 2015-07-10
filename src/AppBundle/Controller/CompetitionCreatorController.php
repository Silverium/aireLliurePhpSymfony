<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompetitionCreatorController extends Controller
{

    public function showAction()
    {
        return $this->render('competitionCreator/competitionCreator.html.twig');
    }
}
