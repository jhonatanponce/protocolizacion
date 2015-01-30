<?php

namespace Srpv\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AjaxController extends Controller
{
    public function ajaxUpdateMunicipioAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ComunesTablasBundle:GeoMunicipio')->findBy(array('geoEstado'=>$id));
        
        return $this->render('SrpvAdminBundle:Ajax:updateMunicipio.html.twig', array(
            'municipios' => $entities,
        ));
    }
    
    public function ajaxUpdateParroquiaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ComunesTablasBundle:GeoParroquia')->findBy(array('geoMunicipio'=>$id));
        
        return $this->render('SrpvAdminBundle:Ajax:updateParroquia.html.twig', array(
            'parroquias' => $entities,
        ));
    }
}
