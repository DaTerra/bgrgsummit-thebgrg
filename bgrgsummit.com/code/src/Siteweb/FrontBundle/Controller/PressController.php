<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PressController extends Controller
{
    public function pressAction()
    {
        return $this->render('SitewebFrontBundle:Press:press.html.twig');
    }
}