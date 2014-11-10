<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Srpv\ProtocolizacionBundle\Entity\Beneficiario;


/**
 * Desarrollo controller.
 *
 */
class BeneficiarioController extends Controller
{

    /**
     * Lists all Desarrollo entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiarios();

        // creando objeto temporal para formulario
        $search = array('message' => 'Type your message here');

        // generando formulario symfony
        $form = $this->createFormBuilder($search)
            ->add('nacionalidad', 'checkbox', array('label' => 'V',
                                                'required' => false
                                                ))



            ->add('cedula', 'number', array('required' => false, 'attr' => array('placeholder' => 'Ingrese la cédula')))
            ->add('estadoid', 'entity', array('required' => false, 'class'   => 'ComunesTablasBundle:GeoEstado','property' => 'nombre','empty_value' => 'Seleccione Estado','attr' => array('class' => 'form-control')))
            ->add('procedenciaid', 'entity', array('required' => false,'class'   => 'SrpvProtocolizacionBundle:ProcedenciaBeneficio','property'   => 'nombre','empty_value' => 'Seleccione La Procedencia','attr' => array('class' => 'form-control')))
            ->add('estatusid', 'entity', array('required' => false,'class'   => 'SrpvProtocolizacionBundle:EstatusBeneficiario','property'   => 'nombre','empty_value' => 'Seleccione El Estatus','attr' => array('class' => 'form-control')))
            ->getForm();

        
        $form->handleRequest($request);

        if ($form->isValid()) {


            $nacionalidad = NULL;
            $cedula = NULL;

            $data = $form->getData();
            $nacionalidad = $data['nacionalidad'];
            $cedula = $data['cedula'];
            $estadoid = $data['estadoid'];
            $procedenciaid = $data['procedenciaid'];
            $estatusid = $data['estatusid'];
            
            if($estadoid){
                $estado = $em->getRepository('ComunesTablasBundle:GeoEstado')->find($estadoid);
                $estado_id = $estado->getId();
            }
            else{
                $estado_id = NULL;
            }
            if($procedenciaid){
                $procedencia = $em->getRepository('SrpvProtocolizacionBundle:ProcedenciaBeneficio')->find($procedenciaid);
                $procedencia_id = $procedencia->getId();
            }
            else{
                $procedencia_id = NULL;
            }
            if($estatusid){
                $estatus = $em->getRepository('SrpvProtocolizacionBundle:EstatusBeneficiario')->find($estatusid);
                $estatus_id = $estatus->getId();
            }
            else{
                $estatus_id = NULL;
            }
           
            if($nacionalidad != NULL && $cedula != NULL && $estado_id == NULL && $procedencia_id == NULL && $estatus_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByCedula($nacionalidad,$cedula);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id != NULL && $procedencia_id == NULL && $estatus_id == NULL){
                 
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByEstado($estado_id);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id == NULL && $procedencia_id != NULL && $estatus_id == NULL){
                 
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByProcedencia($procedencia_id);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id == NULL && $procedencia_id == NULL && $estatus_id != NULL){
                 
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByEstatus($estatus_id);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id != NULL && $procedencia_id != NULL && $estatus_id != NULL){
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByEstadoProcedenciaEstatus($estado_id,$procedencia_id,$estatus_id);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id != NULL && $procedencia_id != NULL && $estatus_id == NULL){
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByEstadoProcedencia($estado_id,$procedencia_id);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id != NULL && $procedencia_id == NULL && $estatus_id != NULL){
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByEstadoEstatus($estado_id,$estatus_id);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id == NULL && $procedencia_id != NULL && $estatus_id != NULL){
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiariosByProcedenciaEstatus($procedencia_id,$estatus_id);
            }
            if($nacionalidad == NULL && $cedula == NULL && $estado_id == NULL && $procedencia_id == NULL && $estatus_id == NULL){
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->getBeneficiarios();
            }

        }

        return $this->render('SrpvProtocolizacionBundle:Beneficiario:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Beneficiarios',
            'form' => $form->createView(),
        ));


    }
    public function consultaAction(Request $request,$message){

        $peticion = $this->getRequest();

        if ($peticion->getMethod() == 'POST'){

            $nacionalidad = $peticion->request->get('nacionalidad');
            $cedula = $peticion->request->get('cedula');

            return $this->redirect($this->generateUrl('beneficiario_new', array('nacionalidad' => $nacionalidad, 'cedula' => $cedula)));

        }

    
        return $this->render('SrpvProtocolizacionBundle:Beneficiario:consulta.html.twig', array(
            'message' => $message,
            
        ));


    }
    public function newAction(Request $request, $nacionalidad,$cedula){

        $em = $this->get('doctrine')->getManager();

        $sexo = $em->getRepository('ComunesTablasBundle:GenSexo')->findAll();
        $grado_instruccion = $em->getRepository('ComunesTablasBundle:GenGradoInstruccion')->findAll();
        $edo_civil = $em->getRepository('ComunesTablasBundle:GenEdoCivil')->findAll();
        $cargos = $em->getRepository('ComunesTablasBundle:GenCargo')->findAll();
        $estados = $em->getRepository('ComunesTablasBundle:GeoEstado')->findAll();
        $municipios = $em->getRepository('ComunesTablasBundle:GeoMunicipio')->findAll();
        $parroquias = $em->getRepository('ComunesTablasBundle:GeoParroquia')->findAll();
        $condicion_trabajo = $em->getRepository('SrpvProtocolizacionBundle:CondicionTrabajo')->findAll();
        $fuente_ingreso = $em->getRepository('SrpvProtocolizacionBundle:CondicionTrabajo')->findAll();
        $relacion_trabajo = $em->getRepository('SrpvProtocolizacionBundle:RelacionTrabajo')->findAll();

        $message = '';

        $nacionalidad = $request->get('nacionalidad');
        $cedula = $request->get('cedula');

        if($nacionalidad == 'V'){
            $nac = 1;
        }
        else{
            $nac = 0;
        }

        $consulta = $em->createQuery( 'SELECT p FROM ComunesTablasBundle:Persona p WHERE
                                      p.nacionalidad = :nacionalidad AND p.cedula = :cedula' )->setParameters(array('nacionalidad' => $nac, 'cedula' => $cedula));


        $persona = $consulta->getOneOrNullResult();

        if($persona){


            $param_crear = 0;
            $objeto_persona = $persona;
            $fecha_nacimiento = $objeto_persona->getfechaNacimiento();
            $sexo_id = $objeto_persona->getgenSexo();
            $edo_civil_id = $objeto_persona->getgenEdoCivil();
            $grado_instruccion_id = $objeto_persona->getgenGradoInstruccion();
            $discapacidad = $objeto_persona->getdiscapacidad();
            $telefono_habitacion = $objeto_persona->gettelefonoHab();
            $telefono_movil = $objeto_persona->gettelefonoMovil();
            $telefono_adicional = $objeto_persona->gettelefono3();
            $correo = $objeto_persona->getcorreoPrincipal();
            $correo_alterno = $objeto_persona->getcorreoPrincipal();
            $direccion = $objeto_persona->getdireccion();
            $geo_estado = $objeto_persona->getgeoEstadoNac();
            $geo_municipio = $objeto_persona->getgeoMunicipioNac();
            $geo_parroquia = NULL;

            $persona_id = $persona->getid();

            $query = "select faoveel.f_busca_datos_ahorrista($persona_id) from dual";

            $consulta_faov = $em->getConnection->prepare($query);

            $consulta_faov->execute();

            $consulta_faov->fetchAll();

            echo var_dump($consulta_faov);

            $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->findOneByPersona($persona->getId());

            if($beneficiario){
               
                $message = 'Ya existe el beneficiario';

            }
        }
        else{


            $consulta1 = $em->createQuery( 'SELECT o FROM ComunesOrganismosPublicosBundle:Onidex o WHERE
                                            o.nac = :nacionalidad AND o.cedula = :cedula' )->setParameters(array('nacionalidad' => $nacionalidad, 'cedula' => $cedula));
            $onidex = $consulta1->getSingleResult();

            if(!$onidex){
                $message = 'No se puede crear el beneficiario, no exites en ONIDEX';
            }
            else{
                $param_crear = 1;
                $objeto_persona = $onidex;
                $fecha_nacimiento = NULL;
                $sexo_id = NULL;
                $edo_civil_id = NULL;
                $grado_instruccion_id = NULL;
                $discapacidad = NULL;
                $telefono_habitacion = NULL;
                $telefono_movil = NULL;
                $telefono_adicional = NULL;
                $correo = NULL;
                $correo_alterno = NULL;
                $direccion = NULL;
                $geo_estado = NULL;
                $geo_municipio = NULL;
                $geo_parroquia = NULL;
            }

        }


        if($message){
             
            return $this->render('SrpvProtocolizacionBundle:Beneficiario:consulta.html.twig', array(
                                 'message' => $message,
            ));

        }
        else{

            $doc_identidad = $nacionalidad.'-'.$cedula;

            return $this->render('SrpvProtocolizacionBundle:Beneficiario:new.html.twig', array(
                                'objeto_persona_id' => $objeto_persona->getid(),
                                'objeto_persona' => $objeto_persona,
                                'param_crear' => $param_crear,
                                'doc_identidad' => $doc_identidad,
                                'fecha_nacimiento' => $fecha_nacimiento,
                                'sexo_id' => $sexo_id,
                                'grado_instruccion_id' => $grado_instruccion_id,
                                'edo_civil_id' => $edo_civil_id,
                                'sexo' => $sexo,
                                'grado_instruccion' => $grado_instruccion,
                                'edo_civil' => $edo_civil,
                                'discapacidad' => $discapacidad,
                                'telefono_habitacion' => $telefono_habitacion,
                                'telefono_movil' => $telefono_movil,
                                'telefono_adicional' => $telefono_adicional,
                                'correo' => $correo,
                                'correo_alterno' => $correo_alterno,
                                'direccion' => $direccion,
                                'geo_estado' => $geo_estado,
                                'geo_municipio' => $geo_municipio,
                                'geo_parroquia' => $geo_parroquia,
                                'estados' => $estados,
                                'municipios' => $municipios,
                                'parroquias' => $parroquias,
                                'condicion_trabajo' => $condicion_trabajo,
                                'fuente_ingreso' => $fuente_ingreso,
                                'relacion_trabajo' => $relacion_trabajo,
                                'cargos' => $cargos,


            ));
        }


    }
    public function showAction($id){

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollo entity.');
        }

        

        return $this->render('SrpvProtocolizacionBundle:Beneficiario:show.html.twig', array('entity' => $entity,));

    }

  
    
}
