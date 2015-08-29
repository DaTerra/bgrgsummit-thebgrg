<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MissionController extends Controller
{
    public function missionAction()
    {
        return $this->render('SitewebFrontBundle:Mission:mission.html.twig');
    }

}