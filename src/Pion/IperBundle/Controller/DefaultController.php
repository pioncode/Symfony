<?php

namespace Pion\IperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PionIperBundle:Default:index.html.twig', array('name' => $name));
    }
}
