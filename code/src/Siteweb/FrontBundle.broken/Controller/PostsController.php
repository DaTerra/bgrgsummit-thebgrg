<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostsController extends Controller
{
    public function postsAction()
    {
        return $this->render('SitewebFrontBundle:Posts:posts.html.twig');
    }

}