<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpeakersController extends Controller
{
    public function speakersAction()
    {
        return $this->render('SitewebFrontBundle:Speakers:speakers.html.twig');
    }
}