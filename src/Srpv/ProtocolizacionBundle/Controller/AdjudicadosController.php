<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Srpv\ProtocolizacionBundle\Entity\AsignacionCenso;

class AdjudicadosController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicados();
        
        $municipo = NULL;
        $nacionalidad = NULL;
        $cedula = NULL;
       
        $allestados= $em->getRepository('ComunesTablasBundle:GeoEstado')->findAll();
        $allmunicipios= $em->getRepository('ComunesTablasBundle:GeoMunicipio')->findAll();
        $alljefes= $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getCoordinador($municipo);
        
        if ($request->isMethod('POST')) {

            $nacionalidad = $request->get('nacionalidad');
            $cedula = $request->get('cedula');
            $estadoid = $request->get('estado');
            $municipioid = $request->get('municipio');
            $coordinadorid = $request->get('coordinador');
            
            if($nacionalidad == 1){
                $nacionalidad = 1; 
            }else{
                $nacionalidad = 0;
            }
            if($estadoid){
                $estado = $em->getRepository('ComunesTablasBundle:GeoEstado')->find($estadoid);
                $estado_id = $estado->getId();
            }
            else{
                $estado_id = NULL;
            }
            if($municipioid){
                $municipio = $em->getRepository('ComunesTablasBundle:GeoMunicipio')->find($municipioid);
                $municipio_id = $municipio->getId();
            }
            else{
                $municipio_id = NULL;
            }
            if($coordinadorid){
                $coordinador = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->findOneBy(array('personaIdJefe'=>$coordinadorid));
                $oficina_id = $coordinador->getId();
            }
            else{
                $oficina_id = NULL;
            }
           
            if($nacionalidad != NULL && $cedula == NULL && $estado_id == NULL && $municipio_id == NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicados();
            }
            if($nacionalidad != NULL && $cedula != NULL && $estado_id == NULL && $municipio_id == NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiarioAdjudicado($nacionalidad,$cedula);
            }
            if($nacionalidad != NULL && $cedula != NULL && $estado_id != NULL && $municipio_id == NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByNacionalidadCedulaEstado($nacionalidad,$cedula,$estado_id);
            }
            if($nacionalidad != NULL && $cedula != NULL && $estado_id != NULL && $municipio_id != NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByNacionalidadCedulaEstadoMunicipio($nacionalidad,$cedula,$estado_id,$municipio_id);
            }
            if($nacionalidad != NULL && $cedula != NULL && $estado_id != NULL && $municipio_id != NULL && $oficina_id != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByNacionalidadCedulaEstadoMunicipioOficina($nacionalidad,$cedula,$estado_id,$municipio_id,$oficina_id);
            }
            if($nacionalidad != NULL && $cedula == NULL && $estado_id != NULL && $municipio_id == NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByEstado($estado_id);
            }
            if($nacionalidad != NULL && $cedula == NULL && $estado_id != NULL && $municipio_id != NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByEstadoMunicipio($estado_id,$municipio_id);
            }
            if($nacionalidad != NULL && $cedula == NULL && $estado_id != NULL && $municipio_id != NULL && $oficina_id != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByEstadoMunicipioOficina($estado_id,$municipio_id,$oficina_id);
            }
            if($nacionalidad != NULL && $cedula == NULL && $estado_id == NULL && $municipio_id != NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByMunicipio($municipio_id);
            }
            if($nacionalidad != NULL && $cedula == NULL && $estado_id == NULL && $municipio_id != NULL && $oficina_id != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByMunicipioOficina($municipio_id,$oficina_id);
            }
            if($nacionalidad != NULL && $cedula == NULL && $estado_id == NULL && $municipio_id == NULL && $oficina_id != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByOficina($oficina_id);
            }
            if($nacionalidad != NULL && $cedula != NULL && $estado_id == NULL && $municipio_id != NULL && $oficina_id == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByNacionalidadCedulaMunicipio($nacionalidad,$cedula,$municipio_id);
            }
            if($nacionalidad != NULL && $cedula != NULL && $estado_id == NULL && $municipio_id == NULL && $oficina_id != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicadosByNacionalidadCedulaOficina($nacionalidad,$cedula,$oficina_id);
            }

        }

        return $this->render('SrpvProtocolizacionBundle:Adjudicados:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Lista de Beneficiarios Adjudicados',
            'allestados' => $allestados,
            'allmunicipios' => $allmunicipios,
            'alljefes' => $alljefes,
        ));
    }
    
    public function individualAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            
            $cedula = $request->get('cedula_asignacion');
            $nacionalidad = $request->get('nacionalidad');
            return $this->redirect($this->generateUrl('asignacionAdjudicados', array('cedula' => $cedula, 'nacionalidad' => $nacionalidad )));
        
            
        }
        return $this->render('SrpvProtocolizacionBundle:Adjudicados:individual.html.twig', array(
            
        ));
        
    }
    
    public function formToRedirectIndividualAction(Request $request)
    {
        $cedula = $request->get('cedula_asignacion');
        $nacionalidad = $request->get('nacionalidad');
        return $this->redirect($this->generateUrl('asignacionAdjudicados', array('cedula' => $cedula, 'nacionalidad' => $nacionalidad )));
    }
    
    public function formToRedirectMasivoAction(Request $request)
    {
        return $this->redirect($this->generateUrl('asignacionMasivaAdjudicados', array()));
    }
    
    public function asignacionAdjudicadosAction(Request $request)
    {
        $cedula = $request->get('cedula');
        $nacionalidad = $request->get('nacionalidad');
        
        $em = $this->getDoctrine()->getManager();
        
        if($nacionalidad == 1){
           $nacionalidad_char = 'V'; 
           $nacionalidad_num = 1; 
        }else{
            $nacionalidad_char = 'E';
            $nacionalidad_num = 0;
        }
        
        $allestados= $em->getRepository('ComunesTablasBundle:GeoEstado')->findAll();
        $allmunicipios= $em->getRepository('ComunesTablasBundle:GeoMunicipio')->findAll();
        $allparroquias= $em->getRepository('ComunesTablasBundle:GeoParroquia')->findAll();
        $alloficinas= $em->getRepository('SrpvProtocolizacionBundle:Oficina')->findAll();

        //buscando en asignacion cenco por si es una reasignacion - edicion
        $benef_asignacion = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiarioAdjudicado($nacionalidad_num,$cedula);
        //buscando al beneficiario en beneficiario temporal
        $benef_temp = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosTemporales($nacionalidad_char,$cedula);
        //buscando beneficiario en analisis credito
        $benef_credit = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAnalisis($nacionalidad_num,$cedula);
        //condicionando si es una creacion o edicion
        if(count($benef_asignacion) > 0){
            $params = 'edit';
            
        }elseif(count($benef_temp) > 0 || count($benef_credit) > 0){
            $params = 'new';
            
        }else{
            $params = 'sin resultados';
        }
        
        if($params == 'new' || $params == 'edit'){
        if($params == 'new'){
            //instanciando el objeto para el formulario
            $asignacion = new AsignacionCenso();
           // si existe en beneficiario temporal
            if(count($benef_temp) > 0){
                $entities = $benef_temp;
            }
            // si no entonces se busca en analisis credito
            else{
                $entities = $benef_credit;
            }
            
            $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($entities[0]['persona_id']);
            $unidad = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($entities[0]['unidad_id']);
            $desarrollo = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->find($unidad->getDesarrollo());
            $oficina = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->findBy(array('geoEstado'=>$desarrollo->getGeoEstado(),'geoMunicipio'=>$desarrollo->getGeoMunicipio(),'geoParroquia'=>$desarrollo->getGeoParroquia()));
           
//            $choices = array();
//            
//            foreach($oficina as $of){
//                $choices = [
//                    $of->getId() => $of->getNombre()
//                    ];
//            }
            $form = $this->createFormBuilder($asignacion)
            ->add('censado', 'choice', array('choices' => array('S' => 'Si', 'N' => 'No'),'required' => true))
            ->add('estatus', 'choice', array('choices' => array('S' => 'Si', 'N' => 'No'),'required' => true))
            ->add('observaciones', 'textarea', array('attr' => array('class'=>'form-control', 'rows'=>'6'), 'required' => true))
            //->add('oficina', 'choice', array('choices' => $choices,'required' => true))
            //->add('oficina', 'entity', array('class'   => $oficina,'property'   => 'nombre'))
//            ->add('oficina', 'entity', array('class'   => 'SrpvProtocolizacionBundle:Oficina',
//                "query_builder" => function(EntityRepository $er){
//                    return $er->createQueryBuilder("o")->where("o.geoEstado = $desarrollo->getGeoEstado()")->orderBy("o.id", "ASC");
//                    
//                },'property'   => 'nombre','attr' => array('required' => true,'class'=>'form-control')))
            ->getForm();
        
        }elseif($params == 'edit'){
            
//            $asignacion = $benef_asignacion;
//            $entities = $benef_asignacion;
            $asignacion = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->find($benef_asignacion[0]['id']);
            $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->find($benef_asignacion[0]['id']);
            
            $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($asignacion->getPersona());
            $unidad = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($asignacion->getUnidadHabitacional());
            $oficina = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($asignacion->getOficina());
            
            $form = $this->createFormBuilder($asignacion)
            ->add('censado', 'choice', array('choices' => array('S' => 'Si', 'N' => 'No'),'required' => true))
            ->add('estatus', 'choice', array('choices' => array('S' => 'Si', 'N' => 'No'),'required' => true))
            ->add('observaciones', 'textarea', array('attr' => array('class'=>'form-control', 'rows'=>'6'), 'required' => true))
            //->add('oficina', 'choice', array('choices' => $oficina,'multiple'  => false, 'required' => true))
            ->getForm();
        }
 
        
 
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $usuario = $this->getUser()->getId();
            $user = $em->getRepository('ComunesSecurityBundle:Usuario')->find($usuario);
            $fecha = new \DateTime(date('d-M-y'));
            
            
            $params = $request->get('params');
            if($params == 'new'){
                
                $oficina_id = $request->get('oficina');
                $oficina = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($oficina_id);
                
                $asignacion->setOficina($oficina);
                $asignacion->setFechaAsignacion($fecha);
                $asignacion->setFechaCreacion($fecha);
                $asignacion->setUnidadHabitacional($unidad);
                $asignacion->setUsuario($user);
                $asignacion->setPersona($persona);
                
                $em->persist($asignacion);
                $em->flush();
                
                return $this->redirect($this->generateUrl('detalleasignacionAdjudicados', array('id' => $asignacion->getId())));
            
            }elseif($params == 'edit'){
                
                $reasignacion_oficinaid = $request->get('reasignacion_oficinaid');
                $oficinaid = $request->get('reasignacion_oficinaid');
                if($reasignacion_oficinaid != NULL){
                    $oficina_id = $reasignacion_oficinaid;
                }else{
                    $oficina_id = $oficinaid;
                }
                $oficina = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($oficina_id);
                
                $asignacion->setOficina($oficina);
                $asignacion->setFechaActualizacion($fecha);
                $asignacion->setUnidadHabitacional($unidad);
                $asignacion->setUsuario($user);
                $asignacion->setPersona($persona);
                
                $em->persist($asignacion);
                $em->flush();
                
                return $this->redirect($this->generateUrl('detalleasignacionAdjudicados', array('id' => $asignacion->getId())));
                
            }
                // recibiendo valores de busqueda
//            $data = $form->getData();
//            $estadoid = $data['estadoid'];       
            
        }
        
        return $this->render('SrpvProtocolizacionBundle:Adjudicados:asignacionAdjudicados.html.twig', array(
            'entities' => $entities,
            'title' => 'Asignacion Individual',
            'form' => $form->createView(),
            'persona' => $persona,
            'unidad' => $unidad,
            'params' => $params,
            'oficina' => $oficina,
            'allestados' => $allestados,
            'allmunicipios' => $allmunicipios,
            'allparroquias' => $allparroquias,
            'alloficinas' => $alloficinas,
        ));
        
        }else{
            return $this->render('SrpvProtocolizacionBundle:Adjudicados:asignacionAdjudicados.html.twig', array(
                'entities' => NULL,
                'title' => 'Asignacion Individual',
                'form' => NULL,
                'persona' => NULL,
                'unidad' => NULL,
                'params' => NULL,
                'oficina' => NULL,
                'allestados' => NULL,
                'allmunicipios' => NULL,
                'allparroquias' => NULL,
                'alloficinas' => NULL,
            ));
        }
    }
    
    public function asignacionMasivaAdjudicadosAction(Request $request)
    {
        $cedula = $request->get('cedula');
        $nacionalidad = $request->get('nacionalidad');

        $em = $this->getDoctrine()->getManager();
        //buscando al beneficiario en beneficiario temporal
        $benef_temp = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosTemporales($nacionalidad,$cedula);
        //buscando beneficiario en analisis credito
        $benef_credit = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAnalisis($nacionalidad,$cedula);

        // si existe en beneficiario temporal
        if(count($benef_temp) > 0){
            $entities = $benef_temp;
        }
        // si no entonces se busca en analisis credito
        else{
            $entities = $benef_credit;
        }
        
        $asignacion = new AsignacionCenso();
//        $asignacion->setTask('Write a blog post');
//        $asignacion->setDueDate(new \DateTime('tomorrow'));
 
        $form = $this->createFormBuilder($asignacion)
            ->add('censado', 'text')
            ->add('estatus', 'text')
            ->add('fechaActualizacion','datetime',array('label' => 'Fecha Transferencia','widget' => 'single_text','format' => 'dd/MM/yyyy','required' => false,'attr' => array('class'=>'JqueryDate')))
            ->add('fechaAsignacion', 'datetime',array('label' => 'Fecha Transferencia','widget' => 'single_text','format' => 'dd/MM/yyyy','required' => false,'attr' => array('class'=>'JqueryDate')))
            ->add('fechaCreacion', 'datetime',array('label' => 'Fecha Transferencia','widget' => 'single_text','format' => 'dd/MM/yyyy','required' => false,'attr' => array('class'=>'JqueryDate')))
            ->add('observaciones', 'text')
            ->add('persona', 'text')
            ->add('usuario', 'text')
            ->add('oficina', 'text')
            ->add('unidadHabitacional', 'text')
            ->add('save', 'submit')
            ->getForm();
 
        $form->handleRequest($request);
        
        if ($form->isValid()) {
                // recibiendo valores de busqueda
//            $data = $form->getData();
//            $estadoid = $data['estadoid'];       
            
        }
        
        
        return $this->render('SrpvProtocolizacionBundle:Adjudicados:asignacionMasivaAdjudicados.html.twig', array(
            'entities' => $entities,
            'title' => 'Asignacion Masiva',
            'form' => $form->createView(),
        ));
    }
    
    public function detalleasignacionAdjudicadosAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $asignacion = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->find($id);
        $persona = $em->getRepository('ComunesTablasBundle:Persona')->find($asignacion->getPersona());
        $unidad = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($asignacion->getUnidadHabitacional());
        $desarrollo = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->find($unidad->getDesarrollo());
        $oficina = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($asignacion->getOficina());
            
        return $this->render('SrpvProtocolizacionBundle:Adjudicados:asignacionDetalle.html.twig', array(
            'asignacion' => $asignacion,
            'persona' => $persona,
            'unidad' => $unidad,
            'oficina' => $oficina,
            'desarrollo' => $desarrollo,
        ));
    }
    
    public function reasignacionMasivaAdjudicadosAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('SrpvProtocolizacionBundle:Adjudicados:reasignacionMasivaAdjudicados.html.twig', array('name' => 'reasignacionMasivaAdjudicados'));
    }
}
