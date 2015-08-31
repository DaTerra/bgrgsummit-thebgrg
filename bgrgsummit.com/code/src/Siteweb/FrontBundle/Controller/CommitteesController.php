<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommitteesController extends Controller
{
    public function committeesAction()
    {
        return $this->render('SitewebFrontBundle:Committees:committees.html.twig');
    }

}