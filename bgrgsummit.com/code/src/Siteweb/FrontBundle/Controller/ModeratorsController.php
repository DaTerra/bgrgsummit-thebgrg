<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModeratorsController extends Controller
{
    public function moderatorsAction()
    {
        return $this->render('SitewebFrontBundle:Moderators:moderators.html.twig');
    }
}