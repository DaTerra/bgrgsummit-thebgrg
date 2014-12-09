<?php

namespace Siteweb\BackBundle\Controller;

use Siteweb\BackBundle\Entity\Abstracts;
use Siteweb\BackBundle\Form\AbstractsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbstractsController extends Controller
{
    public function abstractsAction()
    {

        $em = $this->getDoctrine()->getManager();


        $abstracts = $em->getRepository('SitewebBackBundle:Abstracts')->findAll();
        $users = $em->getRepository('SitewebUserBundle:User')->findAll();



        return $this->render('SitewebBackBundle:Abstracts:abstracts.html.twig', array(
            'entities' => $abstracts,
            'users' => $users
        ));    }

    public function abstractdetailAction($id)
    {

        $em = $this->getDoctrine()->getManager();


        $abstract = $em->getRepository('SitewebBackBundle:Abstracts')->findOneById($id);


        return $this->render('SitewebBackBundle:Abstracts:abstractdetail.html.twig', array(
            'entity' => $abstract,
        ));
    }

    public function abstractstatusAction($id,$status)
    {

        $em = $this->getDoctrine()->getManager();


        $abstract = $em->getRepository('SitewebBackBundle:Abstracts')->findOneById($id);

        if($status == 'decline'){
            $abstract->setStatus('Declined');
            $em->persist($abstract);
            $em->flush();
        }
        elseif($status == 'accept'){
            $abstract->setStatus('Accepted');
            $em->persist($abstract);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('H3|BGRG Summit 2015 - Your abstract is Accepted')
                ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                ->setTo(''.$abstract->getSubmiteremail())
                ->setBody(
                    $this->renderView(
                        'SitewebFrontBundle:Abstracts:email.txt.twig',
                        array('name' => $abstract->getSubmiter(),
                            'link' => 'http://bgrgsummit.com/abstract/'.base64_encode($id).'/add/emails'

                        )
                    )
                )
            ;
            $this->get('mailer')->send($message);

            $message2 = \Swift_Message::newInstance()
                ->setSubject('H3|BGRG Summit 2015 - Your abstract is Accepted')
                ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                ->setTo(''.$abstract->getAuthoremail())
                ->setBody(
                    $this->renderView(
                        'SitewebFrontBundle:Abstracts:email1.txt.twig',
                        array('abstract' => $abstract )
                    )
                )
            ;
            $this->get('mailer')->send($message2);

            $message2 = \Swift_Message::newInstance()
                ->setSubject('H3|BGRG Summit 2015 - Your abstract is Accepted')
                ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                ->setTo(''.$abstract->getSpeakeremail())
                ->setBody(
                    $this->renderView(
                        'SitewebFrontBundle:Abstracts:email3.txt.twig',
                        array('abstract' => $abstract )
                    )
                )
            ;
            $this->get('mailer')->send($message2);

            foreach($abstract->getCoauthers() as $coauthor){

                $message2 = \Swift_Message::newInstance()
                    ->setSubject('H3|BGRG Summit 2015 - Your abstract is Accepted')
                    ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                    ->setTo(''.$coauthor->getCoauthoremail())
                    ->setBody(
                        $this->renderView(
                            'SitewebFrontBundle:Abstracts:email2.txt.twig',
                            array('coauthor' => $coauthor )
                        )
                    )
                ;
                $this->get('mailer')->send($message2);
            }
        }

        return $this->redirect($this->generateUrl('admin_abstracts'));
    }


}
