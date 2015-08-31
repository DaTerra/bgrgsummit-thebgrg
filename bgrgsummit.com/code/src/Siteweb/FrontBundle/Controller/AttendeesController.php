<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class attendeesController extends Controller
{
    public function attendeesAction()
    {

        $connecteduser = $this->getUser();
        if ($connecteduser == null){
            $q = $this->getDoctrine()->getManager()->getRepository('SitewebUserBundle:User')->createQueryBuilder('u')
                ->leftJoin('u.usermembership', 'um')
                ->leftJoin('um.usermembershiptype', 'umt')
                ->where('umt.id = :id')
                ->andWhere('um.status = :paid')
                ->andWhere('um.public = 1')
                //->orWhere('um.public = 1')
                ->setParameters(array(
                    'id' => '16',
                    'paid' => 'paid'
                ))
                ->getQuery();

        $users = $q->getResult();
    }
        else{
            $q = $this->getDoctrine()->getManager()->getRepository('SitewebUserBundle:User')->createQueryBuilder('u')
                ->leftJoin('u.usermembership', 'um')
                ->leftJoin('um.usermembershiptype', 'umt')
                ->where('umt.id = :id')
                ->andWhere('um.status = :paid')
                ->setParameters(array(
                    'id' => '16',
                    'paid' => 'paid'
                ))
                ->getQuery();

            $users = $q->getResult();
        }
       // var_dump(sizeof($users));die();


        return $this->render('SitewebFrontBundle:Attendees:attendees.html.twig',array(
            'users' => $users
        ));
    }
}