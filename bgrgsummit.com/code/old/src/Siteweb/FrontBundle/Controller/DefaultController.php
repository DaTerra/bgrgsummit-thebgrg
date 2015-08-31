<?php

namespace Siteweb\FrontBundle\Controller;

use FOS\UserBundle\Model\UserInterface;
use Siteweb\UserBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccountStatusException;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SitewebFrontBundle:Default:index.html.twig');
    }


}
