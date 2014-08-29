<?php

namespace Mesd\ExternalLibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MesdExternalLibraryBundle:Default:index.html.twig', array('name' => $name));
    }
}
