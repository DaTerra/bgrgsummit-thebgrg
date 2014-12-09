<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Siteweb\UserBundle\Controller;

use Siteweb\BackBundle\Entity\Usermembership;
use Siteweb\BackBundle\Entity\Usermembershiptype;
use Siteweb\UserBundle\Entity\User;
use Siteweb\UserBundle\Form\UserscolarshipType;
use Siteweb\UserBundle\Form\ExistUserType;
use Siteweb\UserBundle\Form\UserType;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use FOS\UserBundle\Model\UserInterface;

/**
 * Controller managing the registration
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class RegistrationController extends ContainerAware
{
    public function registerAction()
    {
        $form = $this->container->get('fos_user.registration.form');
        $form->remove('scolarshiprequest');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');

        $process = $formHandler->process($confirmationEnabled);
        if ($process) {
            $user = $form->getData();

            $authUser = false;
            if ($confirmationEnabled) {
                $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                $route = 'fos_user_registration_check_email';
            } else {
                $authUser = true;
                $route = 'fos_user_registration_confirmed';
            }

            $em = $this->container->get('doctrine')->getManager();
            $usermembershiptype = $em->getRepository('SitewebBackBundle:Usermembershiptype')->findOneById(16);
            $usermembership = new Usermembership();
            $usermembership->setCreated(new \DateTime());
            $usermembership->setUser($user);
            $usermembership->setUsermembershiptype($usermembershiptype);
            $usermembership->setPublic($form->get('publicprofile')->getData());
            $usermembership->setStatus('Unpaid');
            $em->merge($usermembership);
            $em->flush();

            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->updateUser($user);

            $message = \Swift_Message::newInstance()
                ->setSubject('2015 UCLA H3/BGRG Summit New Registration')
                ->setFrom(array('submissions@bgrgsummit.com' => '2015 UCLA H3/BGRG Summit'))
                ->setTo('submissions@bgrgsummit.com')
                ->setBody(
                    $this->container->get('templating')->render(
                        'SitewebUserBundle:Registration:adminemail.txt.twig',
                        array('user' => $user)
                    )
                )
            ;
            //var_dump($message);die();
            $this->container->get('mailer')->send($message);

            $this->setFlash('fos_user_success', 'registration.flash.user_created');
            $url = $this->container->get('router')->generate($route);
            $response = new RedirectResponse($url);

            if ($authUser) {
                $this->authenticateUser($user, $response);
            }

            return $response;
        }

        return $this->container->get('templating')->renderResponse('SitewebUserBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function scholarshipregisterAction()
    {

        $form = $this->container->get('fos_user.registration.form');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');
        $form->get('scolarshiprequest')->get('status')->setData('Pending');


        $process = $formHandler->process($confirmationEnabled);

        if ($process) {

            $user = $form->getData();
            $authUser = false;
            if ($confirmationEnabled) {
                $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                $route = 'fos_user_registration_check_email';
            } else {
                $authUser = true;
                $route = 'fos_user_registration_confirmed';
            }

            $em = $this->container->get('doctrine')->getManager();
            $usermembershiptype = $em->getRepository('SitewebBackBundle:Usermembershiptype')->findOneById(17);
            $usermembership = new Usermembership();
            $usermembership->setCreated(new \DateTime());
            $usermembership->setUser($user);

            $usermembership->setUsermembershiptype($usermembershiptype);
            $usermembership->setPublic($form->get('publicprofile')->getData());
            $usermembership->setStatus('Pending');
            $em->merge($usermembership);
            $em->flush();

            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->updateUser($user);

            $this->setFlash('fos_user_success', 'registration.flash.user_created');
            $url = $this->container->get('router')->generate($route);
            $response = new RedirectResponse($url);

            if ($authUser) {
                $this->authenticateUser($user, $response);
            }

            return $response;
        }

        return $this->container->get('templating')->renderResponse('SitewebUserBundle:Registration:registerscholarship.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function existusersregisterAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        $form = $this->container->get('form.factory')->create(new ExistUserType(),$user);
        $form->remove('plainPassword');
        $form->remove('photo');

        if ($request->isMethod('POST')) {


            $form->handleRequest($request);


            $em = $this->container->get('doctrine')->getManager();
            $usermembershiptype = $em->getRepository('SitewebBackBundle:Usermembershiptype')->findOneById(16);
            $usermembership = new Usermembership();
            $usermembership->setCreated(new \DateTime());
            $usermembership->setUser($user);
            $usermembership->setPublic($form->get('publicprofile')->getData());
            $usermembership->setUsermembershiptype($usermembershiptype);
            //$usermembership->setActivated($user->getPublicprofile());
            $usermembership->setStatus('Unpaid');
            $em->merge($usermembership);
            $em->flush();


            return new RedirectResponse($this->container->get('router')->generate('fos_user_profile_show'));
        }
        return $this->container->get('templating')->renderResponse('SitewebUserBundle:Registration:registere.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Tell the user to check his email provider
     */
    public function checkEmailAction()
    {
        $email = $this->container->get('session')->get('fos_user_send_confirmation_email/email');
        $this->container->get('session')->remove('fos_user_send_confirmation_email/email');
        $user = $this->container->get('fos_user.user_manager')->findUserByEmail($email);

        if (null === $user) {
            $this->setFlash('notice','This email does not exist.');
            return new RedirectResponse($this->container->get('router')->generate('fos_user_security_login'));
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:checkEmail.html.'.$this->getEngine(), array(
            'user' => $user,
        ));
    }

    /**
     * Receive the confirmation token from user email provider, login the user
     */
    public function confirmAction($token)
    {
        $user = $this->container->get('fos_user.user_manager')->findUserByConfirmationToken($token);

        if (null === $user) {
            $this->setFlash('notice','This email has already been confirmed.');
            return new RedirectResponse($this->container->get('router')->generate('fos_user_security_login'));
        }



        $user->setConfirmationToken(null);
        $user->setEnabled(true);
        $user->setLastLogin(new \DateTime());

        $this->container->get('fos_user.user_manager')->updateUser($user);
        $response = new RedirectResponse($this->container->get('router')->generate('fos_user_registration_confirmed'));
        $this->authenticateUser($user, $response);

        return $response;
    }

    /**
     * Tell the user his account is now confirmed
     */
    public function confirmedAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:confirmed.html.'.$this->getEngine(), array(
            'user' => $user,
        ));
    }

    /**
     * Authenticate a user with Symfony Security
     *
     * @param \FOS\UserBundle\Model\UserInterface        $user
     * @param \Symfony\Component\HttpFoundation\Response $response
     */
    protected function authenticateUser(UserInterface $user, Response $response)
    {
        try {
            $this->container->get('fos_user.security.login_manager')->loginUser(
                $this->container->getParameter('fos_user.firewall_name'),
                $user,
                $response);
        } catch (AccountStatusException $ex) {
            // We simply do not authenticate users which do not pass the user
            // checker (not enabled, expired, etc.).
        }
    }

    /**
     * @param string $action
     * @param string $value
     */
    protected function setFlash($action, $value)
    {
        $this->container->get('session')->getFlashBag()->set($action, $value);
    }

    protected function getEngine()
    {
        return $this->container->getParameter('fos_user.template.engine');
    }
}
