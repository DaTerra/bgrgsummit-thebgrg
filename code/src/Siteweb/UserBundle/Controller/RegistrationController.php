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
use Siteweb\UserBundle\Form\ExistUserType;
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
    public function registerAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $usermembershiptypes = $em->getRepository('SitewebBackBundle:Usermembershiptype')->createQueryBuilder('t')
        ->where('t.title LIKE :title')
        ->setParameter('title','%BGRG')
        ->andWhere('t.price > 0')
        ->getQuery()
        ->getResult();

        $usercoroporatemembershiptypes = $em->getRepository('SitewebBackBundle:Usermembershiptype')->createQueryBuilder('t')
            ->where('t.title LIKE :title')
            ->setParameter('title','Corporate%')
            ->andWhere('t.price > 0')
            ->getQuery()
            ->getResult();
        $form = $this->container->get('fos_user.registration.form');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');

        $process = $formHandler->process($confirmationEnabled);
        if ($process) {
            $user = $form->getData();
            $id = $request->get('membership-type');
            $em = $this->container->get('doctrine')->getManager();
            $usermembershiptype = $em->getRepository('SitewebBackBundle:Usermembershiptype')->findOneById(intval($id));
            $usermembership = new Usermembership();
            $usermembership->setCreated(new \DateTime());
            $usermembership->setUser($user);
            $usermembership->setPublic($form->get('publicprofile')->getData());
            $usermembership->setUsermembershiptype($usermembershiptype);
            $usermembership->setStatus('Pending');
            $em->merge($usermembership);
            $em->flush();

            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->updateUser($user);
            $authUser = false;
            if ($confirmationEnabled) {
                $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                $route = 'fos_user_registration_check_email';
            } else {
                $authUser = true;
                $route = 'fos_user_registration_confirmed';
            }



            $this->setFlash('fos_user_success', 'registration.flash.user_created');
            $url = $this->container->get('router')->generate($route);
            $response = new RedirectResponse($url);

            if ($authUser) {
                $this->authenticateUser($user, $response);
            }

            return $response;
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
            'usermembershiptypes' => $usermembershiptypes,
            'usercoroporatemembershiptypes' => $usercoroporatemembershiptypes
        ));
    }


    public function existusersregisterAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $usermembershiptypes = $em->getRepository('SitewebBackBundle:Usermembershiptype')->createQueryBuilder('t')
            ->where('t.title LIKE :title')
            ->setParameter('title','%BGRG')
            ->andWhere('t.price > 0')
            ->getQuery()
            ->getResult();

        $usercoroporatemembershiptypes = $em->getRepository('SitewebBackBundle:Usermembershiptype')->createQueryBuilder('t')
            ->where('t.title LIKE :title')
            ->setParameter('title','Corporate%')
            ->andWhere('t.price > 0')
            ->getQuery()
            ->getResult();

        $u = $this->container->get('security.context')->getToken()->getUser();
       $user = $em->getRepository('SitewebUserBundle:User')->findOneById($u->getId());

        $form = $this->container->get('form.factory')->create(new ExistUserType(),$user);
        $form->remove('plainPassword');
        $form->remove('photo');

        if ($request->isMethod('POST')) {


            $form->handleRequest($request);


            $em = $this->container->get('doctrine')->getManager();
            $id = $request->get('membership-type');
            $em = $this->container->get('doctrine')->getManager();
            $usermembershiptype = $em->getRepository('SitewebBackBundle:Usermembershiptype')->findOneById(intval($id));
            $usermembership = new Usermembership();
            $usermembership->setCreated(new \DateTime());
            $usermembership->setUser($user);
            $usermembership->setPublic($form->get('publicprofile')->getData());
            $usermembership->setUsermembershiptype($usermembershiptype);
            $usermembership->setStatus('Pending');
            $em->merge($usermembership);
            $em->flush();

            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->updateUser($user);


            return new RedirectResponse($this->container->get('router')->generate('fos_user_profile_show'));
        }
        return $this->container->get('templating')->renderResponse('SitewebUserBundle:Registration:existusersregister.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
            'usermembershiptypes' => $usermembershiptypes,
            'usercoroporatemembershiptypes' => $usercoroporatemembershiptypes
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
