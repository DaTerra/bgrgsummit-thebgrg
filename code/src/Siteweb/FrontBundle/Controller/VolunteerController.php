<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VolunteerController extends Controller
{
    public function volunteerAction()
    {
        return $this->render('SitewebFrontBundle:Volunteer:volunteer.html.twig');
    }

}