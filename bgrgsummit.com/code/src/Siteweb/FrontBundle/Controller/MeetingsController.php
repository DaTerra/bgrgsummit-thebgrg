<?php

namespace Siteweb\FrontBundle\Controller;

use Siteweb\BackBundle\Entity\Meeting;
use Siteweb\BackBundle\Form\MeetingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function proposeanotherAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting =  $em->getRepository('SitewebFrontBundle:Meeting')->findOneById($id);


        $form = $this->createForm(new MeetingType(), $meeting, array(
            'action' => $this->generateUrl('summit_propose_meeting',array(
                    'id' => $id
                )),
            'method' => 'post',
        ));

        $form->add('submit','submit');

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em->persist($meeting);

            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('H3|BGRG Summit 2015 - Your proposal has been sent')
                ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                ->setTo(''.$meeting->getProposer()->getEmail())
                ->setBody(
                    $this->renderView(
                        'SitewebFrontBundle:Meetings:email2.txt.twig',
                        array('name' => $meeting->getProposer()->getFname().' '.$meeting->getProposer()->getLname(),
                        )
                    )
                )
            ;
            $this->get('mailer')->send($message);

            $this->get('session')->getFlashBag()->add('Another Meeting proposal has been submitted.');

            return $this->redirect($this->generateUrl('siteweb_front_homepage'));
        }

        return $this->render('SitewebFrontBundle:Meetings:propose.html.twig',array(
            'form' => $form->createView(),
        ));
    }

    public function proposeAction($id , Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $meeting = new Meeting();

        $form = $this->createForm(new MeetingType(), $meeting, array(
            'action' => $this->generateUrl('summit_propose_meeting',array(
                    'id' => $id
                )),
            'method' => 'post',
        ));

        $form->add('submit','submit');

        $form->handleRequest($request);

        if ($form->isValid()) {

            $invitee = $em->getRepository('SitewebUserBundle:User')->findOneById($id);
            if(!$invitee){
                $this->createNotFoundException('No User With This id '.$id);
            }
            $proposer = $em->getRepository('SitewebUserBundle:User')->findOneById($this->getUser()->getId());

            $meeting->setInvitee($invitee);
            $meeting->setProposer($proposer);
            $date = date("H:i", strtotime("04:25 PM"));
            $meeting->setTime(new \DateTime($date));
            $meeting->setStatus('Pending');
            $em->persist($meeting);

            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('H3|BGRG Summit 2015 - Your proposal has been sent')
                ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                ->setTo(''.$invitee->getEmail())
                ->setBody(
                    $this->renderView(
                        'SitewebFrontBundle:Meetings:email.txt.twig',
                        array('name' => $invitee->getFname().' '.$invitee->getLname(),
                        )
                    )
                )
            ;
            $this->get('mailer')->send($message);

            $this->get('session')->getFlashBag()->add('notice','Meeting proposal has been submitted.');

            return $this->redirect($this->generateUrl('siteweb_front_homepage'));
        }

        return $this->render('SitewebFrontBundle:Meetings:propose.html.twig',array(
            'form' => $form->createView(),
        ));
    }


    public function myproposalsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('SitewebUserBundle:User')->findOneById($this->getUser()->getId());

        $accepteddmeetings1 = $em->getRepository('SitewebBackBundle:Meeting')->findBy(array(
            'status' => 'accepted',
            'invitee' => $user
        ));
        $accepteddmeetings2 = $em->getRepository('SitewebBackBundle:Meeting')->findBy(array(
            'status' => 'accepted',
            'proposer' => $user
        ));
        $sentmeetings = $em->getRepository('SitewebBackBundle:Meeting')->findByInvitee($user);
        $recievedmeetings = $em->getRepository('SitewebBackBundle:Meeting')->findByProposer($user);

        return $this->render('SitewebFrontBundle:Meetings:myproposals.html.twig',array(
            'sentmeetings' => $sentmeetings,
            'recievedmeetings' => $recievedmeetings,
            'accepteddmeetings1' => $accepteddmeetings1,
            'accepteddmeetings2' => $accepteddmeetings2
        ));
    }

    public function declineAction($id , Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = $em->getRepository('SitewebBackBundle:Meeting')->findOneById($id);

        if(!$meeting){
            $this->createNotFoundException('No Meeting found with that id');
        }

            $meeting->setStatus('refused');
            $em->persist($meeting);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('H3|BGRG Summit 2015 - Your proposal has been sent')
                ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                ->setTo(''.$meeting->getInvitee()->getEmail())
                ->setBody(
                    $this->renderView(
                        'SitewebFrontBundle:Meetings:refusedemail.txt.twig',
                        array('name' => $meeting->getInvitee()->getFname().' '.$meeting->getInvitee()->getLname(),
                        )
                    )
                )
            ;
            $this->get('mailer')->send($message);

            $this->get('session')->getFlashBag()->add('The Meeting proposal has been Refused.');

            return $this->redirect($this->generateUrl('siteweb_front_homepage'));
    }

    public function approuveAction($id , Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = $em->getRepository('SitewebBackBundle:Meeting')->findOneById($id);

        if(!$meeting){
            $this->createNotFoundException('No Meeting found with that id');
        }

        $meeting->setStatus('accepted');
        $em->persist($meeting);
        $em->flush();

        $message = \Swift_Message::newInstance()
            ->setSubject('H3|BGRG Summit 2015 - Your proposal has been sent')
            ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
            ->setTo(''.$meeting->getInvitee()->getEmail())
            ->setBody(
                $this->renderView(
                    'SitewebFrontBundle:Meetings:acceptedemail.txt.twig',
                    array('name' => $meeting->getInvitee()->getFname().' '.$meeting->getInvitee()->getLname(),
                    )
                )
            )
        ;
        $this->get('mailer')->send($message);

        $this->get('session')->getFlashBag()->add('The Meeting proposal has been Approuved.');

        return $this->redirect($this->generateUrl('siteweb_front_homepage'));
    }




}
