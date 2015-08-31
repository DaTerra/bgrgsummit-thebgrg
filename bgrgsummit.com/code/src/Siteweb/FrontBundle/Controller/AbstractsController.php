<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class abstractsController extends Controller
{
    public function abstractsAction()
    {
        return $this->render('SitewebFrontBundle:Abstract:abstracts.html.twig');
    }
}