<?php

namespace PpgwBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PpgwBundle:Default:index.html.twig', array('name' => $name));
    }
}
