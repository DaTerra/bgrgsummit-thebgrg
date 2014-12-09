<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class attendeesController extends Controller
{
    public function attendeesAction()
    {

        $q = $this->getDoctrine()->getManager()->getRepository('SitewebUserBundle:User')->createQueryBuilder('u')
            ->join('u.usermembership','um')
            ->join('um.usermembershiptype','umt')
            ->where('umt.id = :id')
            ->andWhere('um.status = :status')
            ->andWhere('u.publicprofile = :public')
            ->setParameters(array(
                'id' => '16',
                'status' => 'Paid',
                'public' => '1'
            ))
            ->getQuery();

        $users = $q->getResult();


        return $this->render('SitewebFrontBundle:Attendees:attendees.html.twig',array(
            'users' => $users
        ));
    }
}