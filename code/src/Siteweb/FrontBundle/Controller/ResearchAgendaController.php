<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResearchAgendaController extends Controller
{
    public function researchagendaAction()
    {
        return $this->render('SitewebFrontBundle:ResearchAgenda:researchagenda.html.twig');
    }

}