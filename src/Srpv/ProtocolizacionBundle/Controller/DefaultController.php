<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SrpvProtocolizacionBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function updateDesarrolloAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findBy(array('geoEstado'=>$id));
        
        return $this->render('SrpvProtocolizacionBundle:Default:updateDesarrollo.html.twig', array(
            'desarrollos' => $entities,
        ));
    }
    
    public function updateUnidadAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->findBy(array('desarrollo'=>$id));
        
        return $this->render('SrpvProtocolizacionBundle:Default:updateUnidad.html.twig', array(
            'unidades' => $entities,
        ));
    }
}
