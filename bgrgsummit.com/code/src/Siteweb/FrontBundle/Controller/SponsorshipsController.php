<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SponsorshipsController extends Controller
{
    public function sponsorshipsAction()
    {
        return $this->render('SitewebFrontBundle:Sponsorships:sponsorships.html.twig');
    }

    public function sponsorsAction()
    {
        return $this->render('SitewebFrontBundle:Sponsorships:sponsors.html.twig');
    }
}