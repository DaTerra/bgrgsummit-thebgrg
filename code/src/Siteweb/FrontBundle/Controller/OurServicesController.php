<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OurServicesController extends Controller
{
    public function ourservicesAction()
    {
        return $this->render('SitewebFrontBundle:OurServices:ourservices.html.twig');
    }

}