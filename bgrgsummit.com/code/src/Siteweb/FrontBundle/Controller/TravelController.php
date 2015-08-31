<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TravelController extends Controller
{
    public function travelAction()
    {
        return $this->render('SitewebFrontBundle:Travel:travel.html.twig');
    }
}