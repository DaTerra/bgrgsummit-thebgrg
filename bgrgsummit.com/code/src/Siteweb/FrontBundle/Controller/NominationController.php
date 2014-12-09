<?php

namespace Siteweb\FrontBundle\Controller;

use Siteweb\BackBundle\Entity\Awardnominee;
use Siteweb\BackBundle\Form\AwardnomineeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NominationController extends Controller
{
    public function indexAction($id ,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $securityContext = $this->get('security.context');
        if (false === $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Please login with a valid BGRG Membership!'
            );

            return $this->redirect($this->generateUrl('summit_awards'));
        }

        $user =  $em->getRepository('SitewebUserBundle:User')->findOneById($this->getUser()->getId());

        $usermemberships = $user->getUsermembership();

        foreach($usermemberships as $membership){
            if ( strpos($membership->getUsermembershiptype()->getTitle(),'BGRG') !== false){
                $bgrg = $membership ;
            }
        }
        if($bgrg == null or $bgrg->getExpiration()->format('Y-m-d H:i:s') < date('Y-m-d H:i:s')){

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Please login with a valid BGRG Membership ! Visit <a href="http://thebgrg.org/" >TheBgrg.org</a> to get a membership. !'
            );

            return $this->redirect($this->generateUrl('summit_awards'));
        }

        $entity = new Awardnominee();
        $form = $this->createForm(new AwardnomineeType() , $entity, array(
            'action' => $this->generateUrl('summit_nomination',array(
                'id' => $id
                )),
            'method' => 'POST',
        ));
        $form->handleRequest($request);

        $award =  $em->getRepository('SitewebBackBundle:Award')->findOneById($id);
        if ($form->isValid()) {
            $entity->setAward($award);
            $entity->setSubmitter($user);
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Thank you for submitting your nomination !'
            );
            return $this->redirect($this->generateUrl('summit_awards'));
        }
        return $this->render('SitewebFrontBundle:Nomination:index.html.twig',array(
            'form' => $form->createView(),
            'award' => $award
        ));
    }


    public function awardsAction()
    {

        $em = $this->getDoctrine()->getManager();
        $awards = $em->getRepository('SitewebBackBundle:Award')->findAll();
        return $this->render('SitewebFrontBundle:Nomination:awards.html.twig',array(
            'awards' => $awards
        ));
    }
}