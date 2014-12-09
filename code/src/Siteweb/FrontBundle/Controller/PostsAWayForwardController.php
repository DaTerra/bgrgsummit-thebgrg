<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostsAWayForwardController extends Controller
{
    public function postsawayforwardAction()
    {
        return $this->render('SitewebFrontBundle:Posts:awayforward.html.twig');
    }

}