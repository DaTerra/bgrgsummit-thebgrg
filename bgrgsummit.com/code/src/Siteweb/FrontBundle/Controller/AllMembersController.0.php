<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AllMembersController extends Controller
{
    public function allmembersAction()
    {
        return $this->render('SitewebFrontBundle:AllMembers:allmembers.html.twig');
    }
    public function foundingmembersAction()
    {
        return $this->render('SitewebFrontBundle:AllMembers:foundingmembers.html.twig');
    }
    public function boardofdirectorsAction()
    {
        return $this->render('SitewebFrontBundle:AllMembers:boardofdirectors.html.twig');
    }
    public function organizationalmembersAction()
    {
        return $this->render('SitewebFrontBundle:AllMembers:organizationalmembers.html.twig');
    }
    public function affiliatemembersAction()
    {
        return $this->render('SitewebFrontBundle:AllMembers:affiliatemembers.html.twig');
    }

}