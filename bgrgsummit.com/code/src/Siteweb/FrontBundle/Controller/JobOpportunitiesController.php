<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobOpportunitiesController extends Controller
{
    public function jobopportunitiesAction()
    {
        return $this->render('SitewebFrontBundle:JobOpportunities:jobopportunities.html.twig');
    }

}