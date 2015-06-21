<?php

namespace AppBundle\Controller;

use AppBundle\Model\Event;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// ...

class EventsController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction()
    {
//in a near future, this variable $listado will be a query to the database.

        $listado = [];
        $listado[] =   new Event(1,"Rogaine Altafulla - Baix Gaià", "15 de Març 2014", "Altafulla","http://www.rogainealtafulla.com", "imatge de Rogaine activitats","img/noticies/23.jpg", "Rogaine", "Inscripcions tancades" );
        $listado[]= new Event(2,"Curses d´orientació, introducció", "11 de Gener 2014", "Prades (Baix Camp)", "events/sessioorientacio/index.htm","events/sessioorientacio/index.htm", "img/noticies/22.gif", "Orienteering", "Inscripcions tancades" );
        return $this->render('events/events.html.twig', array('events' => $listado));
    }
}
