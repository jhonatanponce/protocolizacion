<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar;

/**
 * Unidadfamiliar controller.
 *
 */
class UnidadFamiliarController extends Controller
{

    /**
     * Displays a form to create a new UnidadFamiliar entity.
     *
     */

    public function newAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $param_editar = $request->get('param_editar') ? $request->get('param_editar') : NULL;


        $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($id);
        $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($beneficiario->getpersona());
        $condicion_unidad = $em->getRepository('SrpvProtocolizacionBundle:CondicionUnidadFamiliar')->findAll();
        $procedencia_beneficio = $em->getRepository('SrpvProtocolizacionBundle:ProcedenciaBeneficio')->findAll();

        $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->findOneByBeneficiario($id);

        if($unidad_familiar ){
            $condicion_unidad_id = $unidad_familiar->getcondicionUnidadFamiliar();
            $procedencia_beneficio_id = $unidad_familiar->getprocedenciaBeneficio();
            $nombre = $unidad_familiar->getnombre();
        }
        else{
            $condicion_unidad_id = NULL;
            $procedencia_beneficio_id = NULL;
            $nombre = NULL;
        }

        $nacionalidad = $persona->getnacionalidad() == 1 ? 'V' : 'E';
        $cedula = $persona->getcedula();

        return $this->render('SrpvProtocolizacionBundle:UnidadFamiliar:new.html.twig', array(
                             'beneficiario' => $beneficiario,
                             'persona' => $persona,
                             'doc_identidad' => $nacionalidad.'-'.$cedula,
                             'condicion_unidad' => $condicion_unidad,
                             'condicion_unidad_id' => $condicion_unidad_id,
                             'procedencia_beneficio' => $procedencia_beneficio,
                             'procedencia_beneficio_id' => $procedencia_beneficio_id,
                             'param_editar' => $param_editar,
                             'nombre' => $nombre));
        
    }

    public function createAction(Request $request){

        $em = $this->get('doctrine')->getManager();

        $peticion = $this->getRequest();

        // se define las entidades por defecto
        // $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
        $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(11795);
        
        if (!$usuario) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        } 

        if ($peticion->getMethod() == 'POST'){

            $beneficiario_id = $peticion->request->get('beneficiario_id');
            $nombre = $peticion->request->get('nombre');
            $condicion_unidad = $peticion->request->get('condicion_unidad');
            $procedencia_beneficio = $peticion->request->get('procedencia_beneficio');
            $param_editar = $peticion->request->get('param_editar') ? $peticion->request->get('param_editar') : NULL;

            $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($beneficiario_id);
            $condicion_unidad = $em->getRepository('SrpvProtocolizacionBundle:CondicionUnidadFamiliar')->find($condicion_unidad);
            $procedencia_beneficio = $em->getRepository('SrpvProtocolizacionBundle:ProcedenciaBeneficio')->find($procedencia_beneficio);
            $datosEntrada = $em->getRepository('SrpvProtocolizacionBundle:FuenteDatosEntrada')->find(1);
            $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($beneficiario->getpersona());

            $cotiza = 0;
            $discapacidad = 0;

            if($beneficiario->getcotizaFaov() == 1){
                $cotiza = 1;
            }
            if($persona->getdiscapacidad() == 1){
                $discapacidad = 1;
            }

            if($param_editar == NULL){
                $unidad_familiar = new UnidadFamiliar();
                $unidad_familiar->setfechaCreacion(new \DateTime(date('now')));
            }
            else{
                $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->findOneByBeneficiario($beneficiario_id);
                $unidad_familiar->setfechaActualizacion(new \DateTime(date('now')));
            }
            

            $unidad_familiar->setnombre($nombre);
            $unidad_familiar->setbeneficiario($beneficiario);
            $unidad_familiar->setcondicionUnidadFamiliar($condicion_unidad);
            $unidad_familiar->setingresoTotalFamiliar($beneficiario->getingresoMensual());
            $unidad_familiar->setprocedenciaBeneficio($procedencia_beneficio);
            $unidad_familiar->setfuenteDatosEntradaId(1);
            $unidad_familiar->settotalPersonasCotizando($cotiza);
            $unidad_familiar->setcantidadDispacitados($discapacidad);
            $unidad_familiar->setfechaCreacion(new \DateTime(date('now')));
            $unidad_familiar->setusuario($usuario);

            $em->persist($unidad_familiar);
            $em->flush();

            return $this->redirect($this->generateUrl('grupofamiliar_new', array('id' => $unidad_familiar->getid())));


        }

        return $this->redirect($this->generateUrl('beneficiario'));
    }

    public function showAction($id,$message){

        $em = $this->getDoctrine()->getManager();

        $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($id);

        $entity = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->findOneByBeneficiario($id);

        $grupo_familiar = $em->getRepository('SrpvProtocolizacionBundle:GrupoFamiliar')->findByUnidadFamiliar($entity);
        
        $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($beneficiario->getpersona());

        $nacionalidad = $persona->getnacionalidad() == 1 ? 'V' : 'E';
        $cedula = $persona->getcedula();

        return $this->render('SrpvProtocolizacionBundle:UnidadFamiliar:show.html.twig', array('entity' => $entity, 
                                                                                              'grupo_familiar' => $grupo_familiar,
                                                                                              'doc_identidad' => $nacionalidad.'-'.$cedula,
                                                                                              'message' => $message,
                                                                                              'beneficiario_id' => $id));

    }
   
}
