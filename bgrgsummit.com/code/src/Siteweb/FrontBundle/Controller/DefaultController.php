<?php

namespace Siteweb\FrontBundle\Controller;

use FOS\UserBundle\Model\UserInterface;
use Siteweb\UserBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccountStatusException;


class DefaultController extends Controller implements ContainerAwareInterface
{
    public function indexAction()
    {
        return $this->render('SitewebFrontBundle:Default:index.html.twig');
    }

    public function speakeragreementAction(Request $request)
    {
      if ($request->getMethod() == 'POST'){

          $um = $this->get('fos_user.user_manager');

         $user =  $um->findUserByEmail($this->getUser()->getEmail());

          $user->setSpeakerIpaddress($request->get('ipaddress'));
          $user->setSpeakerDatetime($request->get('speakerdatetime'));

          $um->updateUser($user, false);

          $this->getDoctrine()->getManager()->flush();

          $this->get('session')->getFlashBag()->set('notice','information updated');

          return $this->redirect($this->generateUrl('siteweb_front_homepage'));

      }

        return $this->render('SitewebFrontBundle:Default:speakeragreement.html.twig');
    }

    public function summitregistrationAction()
    {

        $form = $this->container->get('fos_user.registration.form');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');

        $process = $formHandler->process($confirmationEnabled);
        if ($process) {
            var_dump($user = $form->getData());die();

            $user = $form->getData();

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



        return $this->render('SitewebFrontBundle:Default:summitregistration.html.twig',array(
                'form' =>$form->createView()
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
