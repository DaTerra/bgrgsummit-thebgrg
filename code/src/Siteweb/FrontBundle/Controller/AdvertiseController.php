<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertiseController extends Controller
{
    public function advertiseAction()
    {
        return $this->render('SitewebFrontBundle:Advertise:advertise.html.twig');
    }

}