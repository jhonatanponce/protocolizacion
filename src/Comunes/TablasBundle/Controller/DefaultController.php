<?php

namespace Comunes\TablasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComunesTablasBundle:Default:index.html.twig', array('name' => $name));
    }
}
