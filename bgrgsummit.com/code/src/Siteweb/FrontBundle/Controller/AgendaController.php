<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class agendaController extends Controller
{
    public function agendaAction()
    {
        return $this->render('SitewebFrontBundle:Agenda:agenda.html.twig');
    }
}