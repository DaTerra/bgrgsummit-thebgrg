<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BGRGSummitsController extends Controller
{
    public function bgrgsummitsAction()
    {
        return $this->render('SitewebFrontBundle:BGRGSummits:bgrgsummits.html.twig');
    }
    public function bgrgsummit2005Action()
    {
        return $this->render('SitewebFrontBundle:BGRGSummits:bgrgsummit2005.html.twig');
    }
    public function bgrgsummit2010Action()
    {
        return $this->render('SitewebFrontBundle:BGRGSummits:bgrgsummit2010.html.twig');
    }
    public function bgrgsummit2012Action()
    {
        return $this->render('SitewebFrontBundle:BGRGSummits:bgrgsummit2012.html.twig');
    }

}