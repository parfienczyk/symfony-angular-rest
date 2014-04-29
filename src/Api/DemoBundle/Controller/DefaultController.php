<?php

namespace Api\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApiDemoBundle:Default:index.html.twig', array('name' => 'Karol'));
    }
}
