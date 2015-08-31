<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    public function galleryAction()
    {
        return $this->render('SitewebFrontBundle:Gallery:gallery.html.twig');
    }
}