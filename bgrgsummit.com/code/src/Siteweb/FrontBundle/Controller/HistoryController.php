<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HistoryController extends Controller
{
    public function historyAction()
    {
        return $this->render('SitewebFrontBundle:History:history.html.twig');
    }
}