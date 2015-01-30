<?php

namespace Comunes\OrganismosPublicosBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AjaxController
 *
 * @author cnoda
 */
class AjaxController extends Controller
{
    
    public function validarOnidexAction() {

        $request = Request::createFromGlobals();
        
        $em = $this->getDoctrine()->getManager();
        
        $cedula = $request->query->get('cedula');
        
        $nacionalidad = $request->query->get('nacionalidad') ? 'V' : 'E';
        
        $onidex = $em->getRepository('ComunesOrganismosPublicosBundle:Onidex')->findOneBy(array('cedula' => $cedula, 'nac' => $nacionalidad));
        if (count($onidex) == 0) {
            
            $respuesta = array("responseCode"=>400, "msg"=>"Debe Ingresar Una Cédula Válida en SAIME");
        
        }else{
                     
            $fechaNac = substr($onidex->getFecha(),-2 ).'-'.substr($onidex->getFecha(), 4, -2).'-'.substr($onidex->getFecha(), 0, -4);

            $respuesta = array("responseCode"   =>200,
                               "nacionalidad"   => $onidex->getNac(),
                               "cedula"         => $onidex->getCedula(),
                               "fechaNac"       => $fechaNac,
                               "apell1"         => $onidex->getPrimerapellido(),
                               "apell2"         => $onidex->getSegundoapellido(),
                               "nombr1"         => $onidex->getPrimernombre(),
                               "nombr2"         => $onidex->getSegundonombre(), 
                               );
        }
        
        $respuesta = json_encode($respuesta);

        return new Response($respuesta,200,array('Content-Type'=>'application/json'));
    }
}

?>
