<?php

namespace SAM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SAMUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
