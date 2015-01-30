<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Srpv\ProtocolizacionBundle\Entity\Beneficiario;
use Comunes\TablasBundle\Entity\Persona;


/**
 * Beneficiario controller.
 *
 */
class BeneficiarioController extends Controller
{

    /**
     * Lists all Beneficiario entities.
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
    public function editAction($id){


        $em = $this->getDoctrine()->getManager();

        $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($id);


        if (!$beneficiario) {
            throw $this->createNotFoundException('Unable to find Beneficiario entity.');

        }

        $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($beneficiario->getpersona());

        $nacionalidad = $persona->getnacionalidad();
        $cedula = $persona->getcedula();

        return $this->redirect($this->generateUrl('beneficiario_new', array('persona_id' => $persona->getid(), 'param_editar' => 'editar', 'nacionalidad' => $nacionalidad, 'cedula' => $cedula)));


    }
    public function newAction(Request $request, $nacionalidad,$cedula){

        $em = $this->get('doctrine')->getManager();


        $sexo = $em->getRepository('ComunesTablasBundle:GenSexo')->findAll();
        $grado_instruccion = $em->getRepository('ComunesTablasBundle:GenGradoInstruccion')->findAll();
        $ocupacion = $em->getRepository('ComunesTablasBundle:GenOcupacion')->findAll();
        $edo_civil = $em->getRepository('ComunesTablasBundle:GenEdoCivil')->findAll();
        $cargos = $em->getRepository('ComunesTablasBundle:GenCargo')->findAll();
        $estados = $em->getRepository('ComunesTablasBundle:GeoEstado')->findAll();
        $municipios = $em->getRepository('ComunesTablasBundle:GeoMunicipio')->findAll();
        $parroquias = $em->getRepository('ComunesTablasBundle:GeoParroquia')->findAll();
        $condicion_trabajo = $em->getRepository('SrpvProtocolizacionBundle:CondicionTrabajo')->findAll();
        $fuente_ingreso = $em->getRepository('SrpvProtocolizacionBundle:CondicionTrabajo')->findAll();
        $relacion_trabajo = $em->getRepository('SrpvProtocolizacionBundle:RelacionTrabajo')->findAll();
        $sector_trabajo = $em->getRepository('SrpvProtocolizacionBundle:SectorTrabajo')->findAll();

        $message = '';

        $param_editar = $request->get('param_editar') ? $request->get('param_editar') : NULL;

        $persona_id = $request->get('persona_id') ? $request->get('persona_id') : NULL;

        if($param_editar != NULL){

            $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($persona_id);

            $nacionalidad = $request->get('nacionalidad') == 1 ? 'V' : 'E';

            $cedula =  $request->get('cedula');
        }
        else{

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

        }
        

        if($persona){

            $param_crear = 0;
            $objeto_persona = $persona;
            $fecha_nacimiento = $objeto_persona->getfechaNacimiento();
            $codigo1 = $objeto_persona->getcodigoHab();
            $codigo2 = $objeto_persona->getcodigoMovil();
            $codigo3 = $objeto_persona->getcodigo3();
            $sexo_id = $objeto_persona->getgenSexo();
            $edo_civil_id = $objeto_persona->getgenEdoCivil();
            $grado_instruccion_id = $objeto_persona->getgenGradoInstruccion();
            $ocupacion_id = $objeto_persona->getgenOcupacion();
            $discapacidad = $objeto_persona->getdiscapacidad();
            $telefono_habitacion = $codigo1.$objeto_persona->gettelefonoHab();
            $telefono_movil = $codigo2.$objeto_persona->gettelefonoMovil();
            $telefono_adicional = $codigo3.$objeto_persona->gettelefono3();
            $correo = $objeto_persona->getcorreoPrincipal();
            $correo_alterno = $objeto_persona->getcorreoPrincipal();
            $direccion = $objeto_persona->getdireccion();
            $geo_estado = $objeto_persona->getgeoEstadoNac();
            $geo_municipio = $objeto_persona->getgeoMunicipioNac();
            $geo_parroquia = NULL;
            $fecha_censo = $objeto_persona->getultimoCenso();

            $rif = NULL;
            $condicion_trabajo_id = NULL;
            $fuente_ingreso_id = NULL;
            $relacion_trabajo_id = NULL;
            $sector_trabajo_id = NULL;
            $nombre_empresa = NULL;
            $direccion_empresa = NULL;
            $telefono_trabajo = NULL;
            $cargo_id = NULL;
            $ingreso_mensual = NULL;
            $ingreso_declarado = NULL;
            $ingreso_promedio_faov = NULL;
            $cotiza = NULL;
            $urban_barrio = NULL;
            $avenida = NULL;
            $zona = NULL;
            $beneficiario_id = NULL;

            $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->findOneByPersona($persona->getId());

            if($param_editar == NULL){

                $persona_id = $persona->getid();

                $query = "select faoveel.f_busca_datos_ahorrista($persona_id) as datos_ahorrista from dual";

                $connection = $em->getConnection();

                $stmt = $connection->prepare($query);

                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach($result as $r){
                    $resultados = $r['DATOS_AHORRISTA'];
                }
            
                $resultados_param = explode(';',$resultados);

                $cotiza = $resultados_param[0];

                $ingreso_promedio_faov = $resultados_param[4];

                $ingreso_mensual = $resultados_param[11];

                if($beneficiario){
               
                    $message = 'Ya existe el beneficiario';

                    $beneficiario_ilicito1 = $em->getRepository('SrpvProtocolizacionBundle:ReasignacionVivienda')->findOneByBeneficiarioAnterior($beneficiario->getId());
                    $beneficiario_ilicito2 = $em->getRepository('SrpvProtocolizacionBundle:ReasignacionVivienda')->findOneByBeneficiarioActual($beneficiario->getId());

                    if($beneficiario_ilicito1){

                        $message .= 'Persona adjudicada incurrió en negocio ilícito con vivienda adjudicada previamente';
                    }
                    elseif($beneficiario_ilicito2){

                        $message .= 'Persona adjudicada incurrió en negocio ilícito con vivienda adjudicada previamente';
                    }

                }

            }
            else{

                $rif = $beneficiario->getrif();
                $condicion_trabajo_id = $beneficiario->getcondicionTrabajo();
                $fuente_ingreso_id = $beneficiario->getfuenteIngreso();
                $relacion_trabajo_id = $beneficiario->getrelacionTrabajo();
                $sector_trabajo_id = $beneficiario->getsectorTrabajo();
                $nombre_empresa = $beneficiario->getnombreEmpresa();
                $direccion_empresa = $beneficiario->getdireccionEmpresa();

                $telefono_trabajo = $beneficiario->getcodigoTrab().$beneficiario->gettelefonoTrabajo();
                $cargo_id = $beneficiario->getgenCargo();
                $ingreso_mensual = $beneficiario->getingresoMensual();
                $ingreso_declarado = $beneficiario->getingresoDeclarado();
                $ingreso_promedio_faov = $beneficiario->getingresoPromedioFaov();
                $cotiza =$beneficiario->getcotizaFaov();
                $direccion = $beneficiario->getdireccionAnterior();
                $geo_estado = $beneficiario->getgeoEstado();
                $geo_municipio = $beneficiario->getgeoMunicipio();
                $geo_parroquia = $beneficiario->getgeoParroquia();
                $urban_barrio = $beneficiario->geturbanBarrio();
                $avenida = $beneficiario->getavCallEsqCarr();
                $zona = $beneficiario->getzona();
                $fecha_censo = $beneficiario->getfechaUltimoCenso();
                $beneficiario_id = $beneficiario->getid();

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
                $ocupacion_id = NULL;
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
                $cotiza = NULL;
                $fecha_censo = NULL;
                $ingreso_mensual = NULL;
                $ingreso_declarado = NULL;
                $ingreso_promedio_faov = NULL;
                $rif = NULL;
                $urban_barrio = NULL;
                $avenida = NULL;
                $zona = NULL;
                $beneficiario_id = NULL;
                $condicion_trabajo_id = NULL;
                $fuente_ingreso_id = NULL;
                $relacion_trabajo_id = NULL;
                $sector_trabajo_id = NULL;
                $nombre_empresa = NULL;
                $direccion_empresa = NULL;
                $telefono_trabajo = NULL;
                $cargo_id = NULL;

            }

        }


        if($message){

            return $this->redirect($this->generateUrl('beneficiario_consulta', array('message' => $message)));

        }
        else{


            $doc_identidad = $nacionalidad.'-'.$cedula;

            return $this->render('SrpvProtocolizacionBundle:Beneficiario:new.html.twig', array(
                                'objeto_persona_id' => $objeto_persona->getid(),
                                'objeto_persona' => $objeto_persona,
                                'param_crear' => $param_crear,
                                'param_editar' => $param_editar,
                                'doc_identidad' => $doc_identidad,
                                'fecha_nacimiento' => $fecha_nacimiento,
                                'sexo_id' => $sexo_id,
                                'grado_instruccion_id' => $grado_instruccion_id,
                                'ocupacion_id' => $ocupacion_id,
                                'edo_civil_id' => $edo_civil_id,
                                'sexo' => $sexo,
                                'grado_instruccion' => $grado_instruccion,
                                'ocupacion' => $ocupacion,
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
                                'sector_trabajo' => $sector_trabajo,
                                'cargos' => $cargos,
                                'cotiza' => $cotiza,
                                'ingreso_mensual' => $ingreso_mensual,
                                'ingreso_promedio_faov' => $ingreso_promedio_faov,
                                'ingreso_declarado' => $ingreso_declarado,
                                'fecha_censo' => $fecha_censo,
                                'rif' => $rif,
                                'urban_barrio' => $urban_barrio,
                                'avenida' => $avenida,
                                'zona' => $zona,
                                'condicion_trabajo_id' => $condicion_trabajo_id,
                                'fuente_ingreso_id' => $fuente_ingreso_id,
                                'relacion_trabajo_id' => $relacion_trabajo_id,
                                'sector_trabajo_id' => $sector_trabajo_id,
                                'nombre_empresa' => $nombre_empresa,
                                'direccion_empresa' => $direccion_empresa,
                                'cargo_id' => $cargo_id,
                                'telefono_trabajo' => $telefono_trabajo,
                                'ingreso_declarado' => $ingreso_declarado,
                                'beneficiario_id' => $beneficiario_id,




            ));
        }


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

            $param_crear = $peticion->request->get('param_crear');
            $param_editar = $peticion->request->get('param_editar') ? $peticion->request->get('param_editar') : NULL;
            $objeto_persona_id = $peticion->request->get('objeto_persona_id');
            $beneficiario_id = $peticion->request->get('beneficiario_id');
            $doc_identidad = $peticion->request->get('cedula');
            $telefono_habitacion = $peticion->request->get('telefono_habitacion');
            $telefono_movil = $peticion->request->get('telefono_movil');
            $telefono_adicional = $peticion->request->get('telefono_adicional');
            $correo = $peticion->request->get('correo');
            $correo_alterno = $peticion->request->get('correo_alterno');
            $direccion = $peticion->request->get('direccion');
            $discapacidad = $peticion->request->get('discapacidad') ? $peticion->request->get('discapacidad') : 0;
            $fecha_nacimiento = $peticion->request->get('fecha_nacimiento');
            $primer_nombre = $peticion->request->get('primer_nombre');
            $segundo_nombre = $peticion->request->get('segundo_nombre') ? $peticion->request->get('segundo_nombre') : NULL;
            $primer_apellido = $peticion->request->get('primer_apellido');
            $segundo_apellido = $peticion->request->get('segundo_apellido') ? $peticion->request->get('segundo_apellido') : NULL;
            $fecha_censo = $peticion->request->get('fecha_censo');
            $estado_civil_id = $peticion->request->get('estado_civil');
            $sexoid = $peticion->request->get('sexoid');
            $estadoid = $peticion->request->get('estadoid');
            $municipioid = $peticion->request->get('municipioid');
            $parroquiaid = $peticion->request->get('parroquiaid');
            $grado_id = $peticion->request->get('grado');
            $ocupacion_id = $peticion->request->get('ocupacion');
            $rif = $peticion->request->get('rif');
            $condicion_trabajo_id = $peticion->request->get('condicion_trabajo');
            $fuente_ingreso_id = $peticion->request->get('fuente_ingreso');
            $relacion_trabajo_id = $peticion->request->get('relacion_trabajo');
            $sector_trabajo_id = $peticion->request->get('sector_trabajo');
            $nombre_empresa = $peticion->request->get('nombre_empresa');
            $direccion_empresa = $peticion->request->get('direccion_empresa');
            $telefono_trabajo = $peticion->request->get('telefono_trabajo');
            $cargo_id = $peticion->request->get('cargo');
            $ingreso_mensual = $peticion->request->get('ingreso_mensual');
            $ingreso_declarado = $peticion->request->get('ingreso_declarado');
            $ingreso_promedio = $peticion->request->get('ingreso_promedio');
            $cotiza = $peticion->request->get('cotiza') ? $peticion->request->get('cotiza') : 0;
            $urban_barrio = $peticion->request->get('urban_barrio');
            $avenida = $peticion->request->get('avenida');
            $zona = $peticion->request->get('zona');

            $estado = $em->getRepository('ComunesTablasBundle:GeoEstado')->find($estadoid);
            $municipio = $em->getRepository('ComunesTablasBundle:GeoMunicipio')->find($municipioid);
            $parroquia = $em->getRepository('ComunesTablasBundle:GeoParroquia')->find($parroquiaid);

            if($sexoid){
                $sexo = $em->getRepository('ComunesTablasBundle:GenSexo')->find($sexoid);
            }
            else{
                $sexo = NULL;
            }

            if($estado_civil_id){
                $estado_civil = $em->getRepository('ComunesTablasBundle:GenEdoCivil')->find($estado_civil_id);
            }
            else{
                $estado_civil = NULL;
            }

            if($grado_id){
                $grado = $em->getRepository('ComunesTablasBundle:GenGradoInstruccion')->find($grado_id);
            }
            else{
                $grado = NULL;
            }

            if ($ocupacion_id) {
                $ocupacion = $em->getRepository('ComunesTablasBundle:GenOcupacion')->find($ocupacion_id);
            }
            else{
                $ocupacion = NULL;
            }

            $condicion_trabajo = $em->getRepository('SrpvProtocolizacionBundle:CondicionTrabajo')->find($condicion_trabajo_id);
            $fuente_ingreso = $em->getRepository('SrpvProtocolizacionBundle:FuenteIngreso')->find($fuente_ingreso_id);
            $relacion_trabajo = $em->getRepository('SrpvProtocolizacionBundle:RelacionTrabajo')->find($relacion_trabajo_id);
            $sector_trabajo = $em->getRepository('SrpvProtocolizacionBundle:SectorTrabajo')->find($sector_trabajo_id);
            $cargo = $em->getRepository('ComunesTablasBundle:GenCargo')->find($cargo_id);
            $estatus_beneficiario = $em->getRepository('SrpvProtocolizacionBundle:EstatusBeneficiario')->find(1);
            
            $param_cedula = explode('-',$doc_identidad);
            
            if($param_cedula[0] == 'V'){
                $nacionalidad = 1;
            }
            else{
                $nacionalidad = 0;
            }
            $cedula = $param_cedula[1];

            if($telefono_habitacion){
                $codigo1 = substr($telefono_habitacion, 0, 4);
                $telefono_habitacion = substr($telefono_habitacion, 4);
            }
            else{

                $codigo1 = NULL;
                
            }
           
            if($telefono_movil){
                $codigo2 = substr($telefono_movil, 0, 4);
                $telefono_movil = substr($telefono_movil, 4);
            }
            else{
                $codigo2 = NULL;
            }

            if($telefono_adicional){
                $codigo3 = substr($telefono_adicional, 0, 4);
                $telefono_adicional = substr($telefono_adicional, 4);
            }
            else{
                $codigo3 = NULL;
            }

            if($telefono_trabajo){
                $codigo4 = substr($telefono_trabajo, 0, 4);
                $telefono_trabajo = substr($telefono_trabajo, 4);
            }
            else{
                $codigo4 = NULL;
            }

            $nombre_completo = $primer_nombre.' '.$segundo_nombre.' '.$primer_apellido.' '.$segundo_apellido;

            if($param_editar == NULL){

                if($param_crear == 0){

                    $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($objeto_persona_id);
                }
                else{

                    $persona = new Persona();
                }

                $beneficiario = new Beneficiario();

            }
            else{

                $beneficiario = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($beneficiario_id);
                $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($beneficiario->getpersona());

            }

            $sistema = $em->getRepository('ComunesSecurityBundle:SysSistema')->find(4);

            $persona->setnacionalidad($nacionalidad);
            $persona->setcedula($cedula);
            $persona->setprimerApellido($primer_apellido);
            $persona->setsegundoApellido($segundo_apellido);
            $persona->setprimerNombre($primer_nombre);
            $persona->setsegundoNombre($segundo_nombre);
            $persona->settelefonoHab($telefono_habitacion);
            $persona->setcodigoHab($codigo1);
            $persona->settelefonoMovil($telefono_movil);
            $persona->setcodigoMovil($codigo2);
            $persona->settelefono3($telefono_adicional);
            $persona->setcodigo3($codigo3);
            $persona->setcorreoPrincipal($correo);
            $persona->setcorreoAlterno($correo_alterno);
            $persona->setdireccion($direccion);
            $persona->setultimoCenso(new \DateTime($fecha_censo));
            $persona->setfechaNacimiento(new \DateTime($fecha_nacimiento));
            $persona->setgeoEstadoNac($estado);
            $persona->setgeoMunicipioNac($municipio);
            $persona->setgenSexo($sexo);
            $persona->setgenEdoCivil($estado_civil);
            $persona->setgenGradoInstruccion($grado);
            $persona->setgenOcupacion($ocupacion);
            $persona->setdiscapacidad($discapacidad);
            $persona->setsysSistemaId(4);
            $persona->setnombreCompleto($nombre_completo);
            $em->persist($persona);
            $em->flush();
            
            
            $beneficiario->setpersona($persona);
            $beneficiario->setrif($rif);
            $beneficiario->setcondicionTrabajo($condicion_trabajo);
            $beneficiario->setfuenteIngreso($fuente_ingreso);
            $beneficiario->setrelacionTrabajo($relacion_trabajo);
            $beneficiario->setsectorTrabajo($sector_trabajo);
            $beneficiario->setnombreEmpresa($nombre_empresa);
            $beneficiario->setdireccionEmpresa($direccion_empresa);
            $beneficiario->setcodigoTrab($codigo4);
            $beneficiario->settelefonoTrabajo($telefono_trabajo);
            $beneficiario->setgenCargo($cargo);
            $beneficiario->setingresoDeclarado($ingreso_declarado);
            $beneficiario->setingresoMensual($ingreso_mensual);
            $beneficiario->setingresoPromedioFaov($ingreso_promedio);
            $beneficiario->setcotizaFaov($cotiza);
            $beneficiario->setdireccionAnterior($direccion);
            $beneficiario->setgeoEstado($estado);
            $beneficiario->setgeoMunicipio($municipio);
            $beneficiario->setgeoParroquia($parroquia);
            $beneficiario->seturbanBarrio($urban_barrio);
            $beneficiario->setavCallEsqCarr($avenida);
            $beneficiario->setzona($zona);
            $beneficiario->setfechaUltimoCenso(new \DateTime($fecha_censo));
            $beneficiario->setprotocolizado(0);
            
            $beneficiario->setusuario($usuario);
            if($param_editar == NULL){
                $beneficiario->setestatusBeneficiario($estatus_beneficiario);
                $beneficiario->setfechaCreacion(new \DateTime(date('now')));
            }
            else{
                $beneficiario->setfechaActualizacion(new \DateTime(date('now')));
            }
           
            $em->persist($beneficiario);
            $em->flush();

            if($param_editar == NULL){
                return $this->redirect($this->generateUrl('unidadfamiliar_new', array('id' => $beneficiario->getId())));
            }
            else{
                return $this->redirect($this->generateUrl('beneficiario_show', array('id' => $beneficiario->getId())));
            }
           

        }

        return $this->redirect($this->generateUrl('beneficiario'));

    }

    public function showAction($id, $message){

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Beneficiario entity.');
        }

        

        return $this->render('SrpvProtocolizacionBundle:Beneficiario:show.html.twig', array('entity' => $entity, 'message' => $message));

    }

    public function deleteAction($id){

        $mensaje = NULL;

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Beneficiario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Beneficiario entity.');
        }

        if($entity->getestatusBeneficiario() == 'SIN ASIGNACION'){

            $unidad_familiar = $em->getRepository('SrpvProtocolizacionBundle:UnidadFamiliar')->findOneByBeneficiario($entity->getid());

            if($unidad_familiar){

                $grupo_familiar = $em->getRepository('SrpvProtocolizacionBundle:GrupoFamiliar')->findByUnidadFamilar($$unidad_familiar->getid());

                if($grupo_familiar){

                    foreach ($grupo_familiar as $familiar) {

                        $em->remove($familiar);
                        $em->flush();
                
                    }
                }

                $em->remove($unidad_familiar);
                $em->flush();

            }


            $em->remove($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('beneficiario'));
        }
        else{

            $mensaje = 'No se puede eliminar un beneficiario con estatus ADJUDICADO-ASIGNADO';

            return $this->redirect($this->generateUrl('beneficiario_show', array('id' => $id, 'message' => $mensaje)));

        }
        

    }
    
}
