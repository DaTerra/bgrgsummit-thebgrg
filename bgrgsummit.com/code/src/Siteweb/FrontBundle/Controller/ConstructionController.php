<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConstructionController extends Controller
{
    public function constructionAction()
    {
        return $this->render('SitewebFrontBundle:Construction:construction.html.twig');
    }
}