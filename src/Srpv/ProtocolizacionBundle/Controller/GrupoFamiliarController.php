<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Srpv\ProtocolizacionBundle\Entity\GrupoFamiliar;
use Comunes\TablasBundle\Entity\Persona;

/**
 * GrupoFamiliar controller.
 *
 */
class GrupoFamiliarController extends Controller
{

    /**
     * Displays a form to create a new GrupoFamiliar entity.
     *
     */

    public function newAction(Request $request, $id, $mensaje)
    {

        $em = $this->getDoctrine()->getManager();

        $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->find($id);
        $sexo = $em->getRepository('ComunesTablasBundle:GenSexo')->findAll();
        $edo_civil = $em->getRepository('ComunesTablasBundle:GenEdoCivil')->findAll();
        $gen_parentesco = $em->getRepository('ComunesTablasBundle:GenParentesco')->findAll();
        $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($unidad_familiar->getbeneficiario());
        return $this->render('SrpvProtocolizacionBundle:GrupoFamiliar:new.html.twig', array(
                             'unidad_familiar' => $unidad_familiar,
                             'sexo' => $sexo,
                             'edo_civil' => $edo_civil,
                             'gen_parentesco' => $gen_parentesco,
                             'beneficiario' => $beneficiario,
                             'mensaje' => $mensaje));
        
    }

    public function createAction(Request $request){

        $em = $this->get('doctrine')->getManager();

        $peticion = $this->getRequest();

        $persona = NULL;

        $mensaje = NULL;

        // se define las entidades por defecto
        // $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
        $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(11795);
        
        if (!$usuario) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        } 

        if ($peticion->getMethod() == 'POST'){

            $unidad_familiar_id = $peticion->request->get('unidad_familiar_id');
            $cedula = $peticion->request->get('cedula');
            $fecha_nacimiento = $peticion->request->get('fecha_nacimiento');
            $nombre = $peticion->request->get('nombre');
            $apellido = $peticion->request->get('apellido');
            $sexo_id = $peticion->request->get('sexoid');
            $edo_civil = $peticion->request->get('edo_civil');
            $parentesco = $peticion->request->get('parentesco');
            $tipo = $peticion->request->get('tipo');
            $ingreso_mensual = $peticion->request->get('ingreso_mensual');
            $cotiza_faov = $peticion->request->get('cotiza_faov');

            $persona = NULL;

            $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->find($unidad_familiar_id);

            // se define las entidades por defecto
            // $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
            $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(11795);
        
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }

            $cantidad_registros = count($nombre);

            for($i=0; $i<$cantidad_registros; $i++){

                if($cedula[$i]){

                    $param_cedula = explode('-', $cedula[$i]);
                    $nacionalidad = $param_cedula[0] == 'V' ? 1 : 0;
                    $numero_cedula = $param_cedula[1];

                    if($nacionalidad != NULL && $numero_cedula != NULL ){

                        //$consulta = $em->createQuery( 'SELECT p FROM ComunesTablasBundle:Persona p WHERE
                                      //p.nacionalidad = :nacionalidad AND p.cedula = :cedula' )->setParameters(array('nacionalidad' => $nacionalidad, 'cedula' => $numero_cedula));

                        $repository = $this->getDoctrine()->getRepository('ComunesTablasBundle:Persona');
                        //$persona = $consulta->getOneOrNullResult();

                        $persona = $repository->findOneBy(array('nacionalidad' => $nacionalidad, 'cedula' => $numero_cedula));

                    }
                    if($persona){

                        $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->findOneByPersona($persona->getid());

                        if($beneficiario){

                            $mensaje = 'La Persona identificada con el número de cédula:'.$param_cedula[0].'-'.$numero_cedula.' ya existe como beneficiario, no se puede incluir en el grupo familiar';

                            break;
                        }

                    }
                    else{

                        $persona = new Persona();
                    
                    }


                }
                else{

                    $persona = new Persona();
                    $nacionalidad = NULL;
                    $numero_cedula = NULL;
                }
                
                

                if($sexo_id[$i]){
                    $sexo = $em->getRepository('ComunesTablasBundle:GenSexo')->find($sexo_id[$i]);
                }
                else{
                    $sexo = NULL;
                }

                if($edo_civil[$i]){
                    $estado_civil = $em->getRepository('ComunesTablasBundle:GenEdoCivil')->find($edo_civil[$i]);
                }
                else{
                    $estado_civil = NULL;
                }

                $gen_parentesco = $em->getRepository('ComunesTablasBundle:GenParentesco')->find($parentesco[$i]);
                $datosEntrada = $em->getRepository('SrpvProtocolizacionBundle:FuenteDatosEntrada')->find(1);

                // Se guardan los datos de la persona
                $persona->setnacionalidad($nacionalidad);
                $persona->setcedula($numero_cedula);
                $persona->setprimerApellido($apellido[$i]);
                $persona->setprimerNombre($nombre[$i]);
                $persona->setfechaNacimiento(new \DateTime($fecha_nacimiento[$i]));
                $persona->setgenSexo($sexo);
                $persona->setgenEdoCivil($estado_civil);
                $persona->setsysSistemaId(4);
                $persona->setnombreCompleto($nombre[$i].' '.$apellido[$i]);
                $em->persist($persona);
                $em->flush();
                

                $grupo_familiar = new GrupoFamiliar();

                $grupo_familiar->setunidadFamiliar($unidad_familiar);
                $grupo_familiar->setpersona($persona);
                $grupo_familiar->setgenParentesco($gen_parentesco);
                $grupo_familiar->settipoSujetoAtencion($tipo[$i]);
                $grupo_familiar->setingresoMensual($ingreso_mensual[$i] ? $ingreso_mensual[$i] : 0);
                $grupo_familiar->setfuenteDatosEntrada($datosEntrada);
                $grupo_familiar->setfechaCreacion(new \DateTime(date('now')));
                $grupo_familiar->setusuario($usuario);
                $grupo_familiar->setcotizaFaov($cotiza_faov[$i]);
                $em->persist($grupo_familiar);
                $em->flush();

                $suma_ingreso = $ingreso_mensual[$i] + $unidad_familiar->getingresoTotalFamiliar();

                $total_cotiza = $unidad_familiar->gettotalPersonasCotizando();
                if($cotiza_faov[$i] == 1){
                    $total_cotiza = $total_cotiza + 1;
                }

                $unidad_familiar->setingresoTotalFamiliar($suma_ingreso);
                $unidad_familiar->settotalPersonasCotizando($total_cotiza);
                $unidad_familiar->setfechaActualizacion(new \DateTime(date('now')));
                $unidad_familiar->setusuario($usuario);
                $em->persist($unidad_familiar);
                $em->flush();

            }
            if($mensaje){

                return $this->redirect($this->generateUrl('grupofamiliar_new', array('id' => $unidad_familiar_id, 'mensaje' => $mensaje)));

            }
            else{

                return $this->redirect($this->generateUrl('analisiscredito_new', array('id' => $unidad_familiar->getbeneficiario()->getid())));

            }
            


        }
        else{

            return $this->redirect($this->generateUrl('beneficiario'));
        }

    }
    public function editAction(Request $request, $id){

        $mensaje = NULL;

        $em = $this->get('doctrine')->getManager();

        $grupo_familiar = $em->getRepository('SrpvProtocolizacionBundle:GrupoFamiliar')->find($id);

        $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($grupo_familiar->getpersona());

        $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->find($grupo_familiar->getunidadFamiliar());
        $sexo = $em->getRepository('ComunesTablasBundle:GenSexo')->findAll();
        $edo_civil = $em->getRepository('ComunesTablasBundle:GenEdoCivil')->findAll();
        $gen_parentesco = $em->getRepository('ComunesTablasBundle:GenParentesco')->findAll();
        $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($unidad_familiar->getbeneficiario());

        return $this->render('SrpvProtocolizacionBundle:GrupoFamiliar:edit.html.twig', array(
                             'unidad_familiar' => $unidad_familiar,
                             'sexo' => $sexo,
                             'edo_civil' => $edo_civil,
                             'gen_parentesco' => $gen_parentesco,
                             'beneficiario' => $beneficiario,
                             'grupo_familiar' => $grupo_familiar,
                             'persona' => $persona,
                             'nacionalidad' => $persona->getNacionalidad() == 1 ? 'V' : 'E',
                             'mensaje' => $mensaje));

    }

    public function updateAction(Request $request){

        $em = $this->get('doctrine')->getManager();

        $peticion = $this->getRequest();

        $ingreso_mensual_anterior = 0;
        $cotiza_anterior = NULL;

        // se define las entidades por defecto
        // $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
        $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(11795);
        
        if (!$usuario) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        } 

        if ($peticion->getMethod() == 'POST'){

            $unidad_familiar_id = $peticion->request->get('unidad_familiar_id');
            $grupo_familiar_id = $peticion->request->get('grupo_familiar_id');
            $persona_id = $peticion->request->get('persona_id');
            $cedula = $peticion->request->get('cedula');
            $fecha_nacimiento = $peticion->request->get('fecha_nacimiento');
            $nombre = $peticion->request->get('nombre');
            $apellido = $peticion->request->get('apellido');
            $sexo_id = $peticion->request->get('sexoid');
            $edo_civil = $peticion->request->get('edo_civil');
            $parentesco = $peticion->request->get('parentesco');
            $tipo = $peticion->request->get('tipo');
            $ingreso_mensual = $peticion->request->get('ingreso_mensual');
            $cotiza_faov = $peticion->request->get('cotiza_faov');

            $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->find($unidad_familiar_id);
            $grupo_familiar = $em->getRepository('SrpvProtocolizacionBundle:GrupoFamiliar')->find($grupo_familiar_id);
            $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($persona_id);

            $param_cedula = explode('-', $cedula);
            $nacionalidad = $param_cedula[0] == 'V' ? 1 : 0;
            $numero_cedula = $param_cedula[1];

            if($sexo_id){
                $sexo = $em->getRepository('ComunesTablasBundle:GenSexo')->find($sexo_id);
            }
            else{
                $sexo = NULL;
            }
            if($edo_civil){
                $estado_civil = $em->getRepository('ComunesTablasBundle:GenEdoCivil')->find($edo_civil);
            }
            else{
                $estado_civil = NULL;
            }
            $gen_parentesco = $em->getRepository('ComunesTablasBundle:GenParentesco')->find($parentesco);
            $datosEntrada = $em->getRepository('SrpvProtocolizacionBundle:FuenteDatosEntrada')->find(1);

            // Se guardan los datos de la persona
            $persona->setnacionalidad($nacionalidad);
            $persona->setcedula($numero_cedula);
            $persona->setprimerApellido($apellido);
            $persona->setprimerNombre($nombre);
            $persona->setfechaNacimiento(new \DateTime($fecha_nacimiento));
            $persona->setgenSexo($sexo);
            $persona->setgenEdoCivil($estado_civil);
            $persona->setsysSistemaId(4);
            $persona->setnombreCompleto($nombre.' '.$apellido);
            $em->persist($persona);
            $em->flush();

            $grupo_familiar->setgenParentesco($gen_parentesco);
            $grupo_familiar->settipoSujetoAtencion($tipo);
            if($ingreso_mensual != $grupo_familiar->getingresoMensual()){
                $ingreso_mensual_anterior = $grupo_familiar->getingresoMensual();
                $grupo_familiar->setingresoMensual($ingreso_mensual);
            }
            
            $grupo_familiar->setusuario($usuario);
            if($cotiza_faov != $grupo_familiar->getcotizaFaov()){
                $cotiza_anterior = $grupo_familiar->getcotizaFaov();
                $grupo_familiar->setcotizaFaov($cotiza_faov);
            }
            
            $em->persist($grupo_familiar);
            $em->flush();

            if($ingreso_mensual_anterior != 0){

                $suma_ingreso = ($unidad_familiar->getingresoTotalFamiliar() - $ingreso_mensual_anterior) + $ingreso_mensual;
            }
            else{
                $suma_ingreso = $unidad_familiar->getingresoTotalFamiliar() + $ingreso_mensual;
            }
            
            $total_cotiza = $unidad_familiar->gettotalPersonasCotizando();

            if($cotiza_anterior != NULL){
                
                if($cotiza_anterior == 0 && $cotiza_faov == 1){
                    $total_cotiza = $total_cotiza + 1;
                }
                elseif($cotiza_anterior == 1 && $cotiza_faov == 0){
                    $total_cotiza = $total_cotiza - 1;
                }
            }
            

            $unidad_familiar->setingresoTotalFamiliar($suma_ingreso);
            $unidad_familiar->settotalPersonasCotizando($total_cotiza);
            $unidad_familiar->setfechaActualizacion(new \DateTime(date('now')));
            $unidad_familiar->setusuario($usuario);
            $em->persist($unidad_familiar);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadfamiliar_show', array('id' => $unidad_familiar->getbeneficiario()->getid())));

        }
        else{

            return $this->redirect($this->generateUrl('beneficiario'));

        }
        

    }
    public function deleteAction($id){

        $mensaje = NULL;

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:GrupoFamiliar')->find($id);
        $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->find($entity->getunidadFamiliar());
        $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($unidad_familiar->getbeneficiario());

        // se define las entidades por defecto
        // $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
        $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(11795);
        
        if (!$usuario) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        } 

        if($beneficiario->getestatusBeneficiario() == 'SIN ASIGNACION'){

            $suma_ingreso = $unidad_familiar->getingresoTotalFamiliar() - $entity->getingresoMensual();
            $total_cotiza = $unidad_familiar->gettotalPersonasCotizando() - 1;

            $unidad_familiar->setingresoTotalFamiliar($suma_ingreso);
            $unidad_familiar->settotalPersonasCotizando($total_cotiza);
            $unidad_familiar->setfechaActualizacion(new \DateTime(date('now')));
            $unidad_familiar->setusuario($usuario);
            $em->persist($unidad_familiar);
            $em->flush();

            $em->remove($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadfamiliar_show', array('id' => $unidad_familiar->getbeneficiario()->getid())));
        }
        else{
            
            $mensaje = 'No se puede eliminar una persona del grupo familiar si el beneficiario tiene estatus de ADJUDICADO-ASIGNADO';

            return $this->redirect($this->generateUrl('unidadfamiliar_show', array('id' => $unidad_familiar->getbeneficiario()->getid(), 'message' => $mensaje)));
        }
    }
}
