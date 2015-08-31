<?php

namespace Siteweb\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MeetingsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meetings = $em->getRepository('SitewebBackBundle:Meeting')->findAll();

        return $this->render('SitewebBackBundle:Meetings:index.html.twig',array(
            'meetings' => $meetings
        ));
    }
}
