<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\Vivienda;
use Srpv\ProtocolizacionBundle\Form\ViviendaType;

/**
 * Vivienda controller.
 *
 */
class ViviendaController extends Controller
{

    /**
     * Lists all Vivienda entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendas();
        // consultando para lista de select del form (manual)
        // no genero forms de symfony porque no consegui como hacer el inner join con nombres de estados y desarrollos
        // la manera en que lo estaba generando si por casualidad habiann desarrollos con el mismo nombre explotaria error
        // con el formulario manual es por id y aunque tengan nombres iguales por id ya es especifico
        $estados = $em->getRepository('ComunesTablasBundle:GeoEstado')->findAll();
        $desarrollos = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();
        $unidades = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->findAll();
        
        if ($request->isMethod('POST')) {
            
            // recibiendo valores de busqueda
//            $data = $form->getData();
            $estadoid = $request->get('estadoid');
            $desarrolloid = $request->get('desarrolloid');
            $unidadid = $request->get('unidadid');
                        
            $logger = $this->get('logger');
            
            $logger->error('$estadoid : '.$estadoid);
            $logger->error('$desarrolloid : '.$desarrolloid);
            
            // si viene estado, desarrollo y unidad se hace una consulta por todos los parametros
            if($estadoid != NULL && $desarrolloid != NULL && $unidadid != NULL){
                
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\ViviendaRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendaPorEstadoDesarrolloUnidad($estadoid,$desarrolloid,$unidadid);
             
            // si viene solo estado y desarrollo se consulta por esos parametros
            }elseif($estadoid != NULL && $desarrolloid != NULL && $unidadid == NULL){
                
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\ViviendaRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendaPorEstadoDesarrollo($estadoid,$desarrolloid);
             
            // si viene solo estado y unidad se consulta por esos parametros
            }elseif($estadoid != NULL && $desarrolloid == NULL && $unidadid != NULL){
             
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\ViviendaRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendaPorEstadoUnidad($estadoid,$unidadid);
                
            // si viene solo desarrollo y unidad se consulta por esos parametros
            }elseif($estadoid == NULL && $desarrolloid != NULL && $unidadid != NULL){
              
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\ViviendaRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendaPorDesarrolloUnidad($desarrolloid,$unidadid);
                
            // si viene solo estado se consulta por ese parametro
            }elseif($estadoid != NULL && $desarrolloid == NULL && $unidadid == NULL){
              
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\ViviendaRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendaPorEstado($estadoid);
                
            // si viene solo desarrollo se consulta por ese parametro
            }elseif($estadoid == NULL && $desarrolloid != NULL && $unidadid == NULL){
                
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\ViviendaRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendaPorDesarrollo($desarrolloid);
                
            // si viene solo unidad se consulta por ese parametro
            }elseif($estadoid == NULL && $desarrolloid == NULL && $unidadid != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendaPorUnidad($unidadid);
                
            // si se hace submit sin parametros se trae todas las viviendas
            }elseif($estadoid == NULL && $desarrolloid == NULL && $unidadid == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->getViviendas();
                
            }
            
            return $this->render('SrpvProtocolizacionBundle:Vivienda:index.html.twig', array(
                'entities' => $entities,
                'title' => 'Vivienda',
//                'form' => $form->createView(),
                'estados' => $estados,
                'desarrollos' => $desarrollos,
                'unidades' => $unidades,
            ));

        }

        return $this->render('SrpvProtocolizacionBundle:Vivienda:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Vivienda',
            'estados' => $estados,
            'desarrollos' => $desarrollos,
            'unidades' => $unidades,
        ));
    }
    /**
     * Creates a new Vivienda entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Vivienda();
        $user = $this->getUser();
        $fecha = new \DateTime(date('d-M-y'));
        $es = $this->getDoctrine()->getManager();
        $desarrollos = $es->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();
        
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // seteando usuario logeado
            $entity->setUsuario($user);
            // buscando al objeto fuente datos de entrada
            $datosEntrada = $em->getRepository('SrpvProtocolizacionBundle:FuenteDatosEntrada')->find(1);
            //seteando la entrada por defecto
            $entity->setFuenteDatosEntrada($datosEntrada);
            //seteando fecha de creacion
            $entity->setFechaCreacion($fecha);
            
            $em->persist($entity);
            $em->flush();
            
            // verificando si hay cantidad de unidades (viviendas) en unidad
            $unidad = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($entity->getUnidadHabitacional());
            // si hay cantidades se suma 1 nueva unidad
            if($unidad->getTotalUnidades() != NULL){
                
                    $cantidad = $unidad->getTotalUnidades() + 1;
                    $unidad->setTotalUnidades($cantidad);
                    $em->persist($unidad);
                    $em->flush();
            // si cantidad de unidades es null, esta es su primer unidad (vivienda)
            }else{
                $unidad->setTotalUnidades(1);
                $em->persist($unidad);
                $em->flush();
            }

            return $this->redirect($this->generateUrl('vivienda_show', array('id' => $entity->getId())));
        }

        return $this->render('SrpvProtocolizacionBundle:Vivienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'desarrollos' => $desarrollos,
        ));
    }

    /**
     * Creates a form to create a Vivienda entity.
     *
     * @param Vivienda $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Vivienda $entity)
    {
        $form = $this->createForm(new ViviendaType(), $entity, array(
            'action' => $this->generateUrl('vivienda_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vivienda entity.
     *
     */
    public function newAction()
    {
        $entity = new Vivienda();
        $es = $this->getDoctrine()->getManager();
        $desarrollos = $es->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();
        $form   = $this->createCreateForm($entity);

        return $this->render('SrpvProtocolizacionBundle:Vivienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'desarrollos' => $desarrollos,
        ));
    }

    /**
     * Finds and displays a Vivienda entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vivienda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:Vivienda:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Vivienda entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $desarrollos = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vivienda entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:Vivienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'desarrollos' => $desarrollos,
        ));
    }

    /**
    * Creates a form to edit a Vivienda entity.
    *
    * @param Vivienda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Vivienda $entity)
    {
        $form = $this->createForm(new ViviendaType(), $entity, array(
            'action' => $this->generateUrl('vivienda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Vivienda entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $fecha = new \DateTime(date('d-M-y'));
        $es = $this->getDoctrine()->getManager();
        $desarrollos = $es->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vivienda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
            // seteando fecha actualizacion
            $entity->setFechaActualizacion($fecha);
            $em->flush();

            return $this->redirect($this->generateUrl('vivienda_edit', array('id' => $id)));
        }

        return $this->render('SrpvProtocolizacionBundle:Vivienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'desarrollos' => $desarrollos,
        ));
    }
    /**
     * Deletes a Vivienda entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvProtocolizacionBundle:Vivienda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vivienda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vivienda'));
    }

    /**
     * Creates a form to delete a Vivienda entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vivienda_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
