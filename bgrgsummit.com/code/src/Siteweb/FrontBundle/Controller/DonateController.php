<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DonateController extends Controller
{
    public function donateAction()
    {
        return $this->render('SitewebFrontBundle:Donate:donate.html.twig');
    }

}