<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnualReportsController extends Controller
{
    public function annualreportsAction()
    {
        return $this->render('SitewebFrontBundle:AnnualReports:annualreports.html.twig');
    }
    public function annualreport2008Action()
    {
        return $this->render('SitewebFrontBundle:AnnualReports:annualreport2008.html.twig');
    }
    public function annualreport2009Action()
    {
        return $this->render('SitewebFrontBundle:AnnualReports:annualreport2009.html.twig');
    }
    public function annualreport2010Action()
    {
        return $this->render('SitewebFrontBundle:AnnualReports:annualreport2010.html.twig');
    }
}