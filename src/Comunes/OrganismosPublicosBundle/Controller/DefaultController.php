<?php

namespace Comunes\OrganismosPublicosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComunesOrganismosPublicosBundle:Default:index.html.twig', array('name' => $name));
    }
}
