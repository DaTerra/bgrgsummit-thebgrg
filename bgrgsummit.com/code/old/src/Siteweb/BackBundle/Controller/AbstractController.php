<?php

namespace Siteweb\FrontBundle\Controller;

use FOS\UserBundle\Model\UserInterface;
use Siteweb\BackBundle\Entity\Abstracts;
use Siteweb\BackBundle\Form\AbstractsType;
use Siteweb\UserBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccountStatusException;


class AbstractController extends Controller
{
    public function abstractAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Tracks = $em->getRepository('SitewebBackBundle:Track')->findBy(array(),array(
                'letter' => 'ASC'
            ));

        return $this->render('SitewebFrontBundle:Abstract:abstract.html.twig',array(
                'tracks'=>$Tracks
            ));
    }

    public function abstractregisterAction($id ,Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $abstract = new Abstracts();

        $tack = $Tracks = $em->getRepository('SitewebBackBundle:Track')->findOneById($id);


        $form = $this->createForm(new AbstractsType(), $abstract, array(
                'action' => $this->generateUrl('summit_abstract_submission',array(
                            'id' => $id
                        )),
                'method' => 'post',
            ));

        $form->add('submit','submit');

            $form->handleRequest($request);

            if ($form->isValid()) {


                $em->persist($abstract);

                $coauthers = $form->get('coauthers')->getData() ;

                foreach($coauthers as $coauther){

                    $coauther->setAbstracts($abstract);
                    $em->persist($coauther);
                }

                $em->flush();

                $this->get('session')->getFlashBag()->add('notice', 'Abstract form added with success');

                $message = \Swift_Message::newInstance()
                    ->setSubject('H3|BGRG Summit 2015 - Your abstract is been reviewed')
                    ->setFrom('bgrgsummit@gmail.com')
                    ->setTo(''.$abstract->getSubmiteremail())
                    ->setBody(
                        $this->renderView(
                            'SitewebFrontBundle:Abstract:email.txt.twig',
                            array('name' => $abstract->getSubmiter())
                        )
                    )
                ;
                //var_dump($message);die();
                $this->get('mailer')->send($message);


                return $this->redirect($this->generateUrl('siteweb_front_homepage'));
            }

        return $this->render('SitewebFrontBundle:Abstract:abstractregister.html.twig',array(
               'form' => $form->createView(),
                'track'=>$tack
            ));
    }


}
