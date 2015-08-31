<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OrganizersController extends Controller
{
    public function organizersAction()
    {
        return $this->render('SitewebFrontBundle:Organizers:organizers.html.twig');
    }
}