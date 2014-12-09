<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FocusGroupsController extends Controller
{
    public function focusgroupsAction()
    {
        return $this->render('SitewebFrontBundle:FocusGroups:focusgroups.html.twig');
    }
}