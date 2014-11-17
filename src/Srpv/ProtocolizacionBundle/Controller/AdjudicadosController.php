<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdjudicadosController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBeneficiariosAdjudicados();

        // creando objeto temporal para formulario
        $search = array('message' => 'Type your message here');

        // generando formulario symfony
        $form = $this->createFormBuilder($search)
            ->add('nacionalidad', 'checkbox', array('label' => 'V',
                                                'required' => false
                                                ))



            ->add('cedula', 'number', array('required' => false, 'attr' => array('placeholder' => 'Ingrese la cédula')))
            ->add('estadoid', 'entity', array('required' => false, 'class'   => 'ComunesTablasBundle:GeoEstado','property' => 'nombre','empty_value' => 'Seleccione Estado','attr' => array('class' => 'form-control')))
            ->add('municipioid', 'entity', array('required' => false,'class'   => 'ComunesTablasBundle:GeoMunicipio','property'   => 'nombre','empty_value' => 'Seleccione El Municipio','attr' => array('class' => 'form-control')))
            ->add('coordinadorid', 'entity', array('required' => false,'class'   => 'SrpvProtocolizacionBundle:EstatusBeneficiario','property'   => 'nombre','empty_value' => 'Seleccione El Estatus','attr' => array('class' => 'form-control')))
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

        return $this->render('SrpvProtocolizacionBundle:Adjudicados:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Lista de Beneficiarios Adjudicados',
            'form' => $form->createView(),
        ));


    }
}
