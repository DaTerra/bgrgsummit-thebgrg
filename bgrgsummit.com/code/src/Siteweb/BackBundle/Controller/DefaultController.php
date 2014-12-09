<?php

namespace Siteweb\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SitewebBackBundle:Default:index.html.twig');
    }
}
