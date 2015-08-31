<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScholarshipsController extends Controller
{
    public function scholarshipsAction()
    {
        return $this->render('SitewebFrontBundle:Scholarships:scholarships.html.twig');
    }
}