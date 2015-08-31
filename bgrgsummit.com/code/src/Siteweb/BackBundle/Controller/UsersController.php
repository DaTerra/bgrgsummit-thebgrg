<?php

namespace Siteweb\BackBundle\Controller;

use Siteweb\BackBundle\Form\UsermembershipType;
use Siteweb\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Siteweb\UserBundle\Entity\User;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersController
 *
 * @author Khadija
 */
class UsersController extends Controller {


    public function indexAction(){


        $em = $this->getDoctrine()->getManager();


        $users = $em->getRepository('SitewebUserBundle:User')->findAll();


        return $this->render('SitewebBackBundle:Default:users.html.twig', array(
            'entities' => $users,
        ));
    }

    public function showAction($id){


        $em = $this->getDoctrine()->getManager();


        $user = $em->getRepository('SitewebUserBundle:User')->findOneById($id);
        if(!$user){
            $this->createNotFoundException('No User With The ID '.$id);
        }


        return $this->render('SitewebBackBundle:Default:show.html.twig', array(
            'entity' => $user,
        ));
    }


    public function membershipstatusAction($id,Request $request){


        $em = $this->getDoctrine()->getManager();


        $usermembership = $em->getRepository('SitewebBackBundle:Usermembership')->findOneById($id);
        if(!$usermembership){
            $this->createNotFoundException('No Membership With The ID '.$id);
        }

        $form = $this->createForm(new UsermembershipType(), $usermembership, array(
            'action' => $this->generateUrl('membershipstatus',array(
                    'id' => $id
                )),
            'method' => 'post',
        ));

        $form->add('submit','submit');

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->persist($usermembership);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_users'));
            }
        }


        return $this->render('SitewebBackBundle:Default:membershipstatus.html.twig', array(
            'form' => $form->createView(),
            'entity' => $usermembership,
        ));
    }


    //put your code here
    public function createAction(Request $request) {
        $em=$this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(new RegistrationFormType(), $user, array(
            'action' => $this->generateUrl('admin_create_user'),
            'method' => 'POST',
        ));

        $user->setEnabled(true);
        $form->setData($user);
        if ('POST' === $request->getMethod()) {
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_users'));
            }
        }
        return $this->render('SitewebBackBundle:Registration:register.html.twig', array(
                    'form' => $form->createView(),
        ));
    }


    public function UsersEditAction($id,Request $request) {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository('SitewebUserBundle:User')->findOneById($id);

        if(!$user){
            throw $this->createNotFoundException('No User with this id= '.$id);
        }

        $form = $this->createForm(new RegistrationFormType(), $user, array(
            'action' => $this->generateUrl('user_edit', array('id' => $id)),
            'method' => 'POST',
        ));


        $form->setData($user);
        if ('POST' === $request->getMethod()) {

            $form->bind($request);

            if ($form->isValid()) {

                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_users'));

            }
        }
        return $this->render('SitewebBackBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function AgentDeleteAction($id){

        $em = $this->getDoctrine()->getManager();

        $utilisateur = $em->getRepository('SitewebUserBundle:User')->findOneById($id);
        $userManager = $this->get('fos_user.user_manager');

        if ($utilisateur){
            $userManager->deleteUser($utilisateur);
        }

        return $this->redirect($this->generateUrl('admin_users'));
    }

    public function UsersstatusAction($id,Request $request) {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository('SitewebUserBundle:User')->findOneById($id);

        if(!$user){
            throw $this->createNotFoundException('No User with this id= '.$id);
        }

        if ('POST' === $request->getMethod()) {

                $status = $request->get('photostatus');
                $user->setPhotostatus($status);
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_users'));

            }
        return $this->redirect($this->generateUrl('admin_users'));

    }

    public function UserFounderOrDirectorAction($id,$role,Request $request) {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository('SitewebUserBundle:User')->findOneById($id);

        if(!$user){
            throw $this->createNotFoundException('No User with this id= '.$id);
        }

        if ($role == 'founder') {

            $user->setRoles(array('ROLE_FOUNDER'));
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_users'));

        }elseif ($role == 'director') {

            $user->setRoles(array('ROLE_DIRECTOR'));
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_users'));

        }
        return $this->redirect($this->generateUrl('admin_users'));

    }


}
