<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AWayForwardController extends Controller
{
    public function awayforwardAction()
    {
        return $this->render('SitewebFrontBundle:Posts:awayforward.html.twig');
    }

}