<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OurWorkController extends Controller
{
    public function ourworkAction()
    {
        return $this->render('SitewebFrontBundle:OurWork:ourwork.html.twig');
    }
}