<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional;
use Srpv\ProtocolizacionBundle\Form\UnidadHabitacionalType;

/**
 * UnidadHabitacional controller.
 *
 */
class UnidadHabitacionalController extends Controller
{

    /**
     * Lists all UnidadHabitacional entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->findAll();
        
        // consultando para lista de select del form (manual)
        // no genero forms de symfony porque no consegui como hacer el inner join con nombres de estados y desarrollos
        // la manera en que lo estaba generando si por casualidad habiann desarrollos con el mismo nombre explotaria error
        // con el formulario manual es por id y aunque tengan nombres iguales por id ya es especifico
        $estados = $em->getRepository('ComunesTablasBundle:GeoEstado')->findAll();
        $desarrollos = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();
        
//        $search = array('message' => 'Type your message here');
// 
//        $form = $this->createFormBuilder($search)
//            ->add('estadoid', 'entity', array('required' => false, 'class'   => 'ComunesTablasBundle:GeoEstado','property' => 'nombre','empty_value' => 'Seleccione Estado','attr' => array('class' => 'form-control')))
//            ->add('desarrolloid', 'entity', array('required' => false,'class'   => 'SrpvProtocolizacionBundle:Desarrollo','property'   => 'nombre','empty_value' => 'Seleccione Nombrede Desarrollo','attr' => array('class' => 'form-control')))
//            // si uso este submit se ve desalineado en el template, por eso use un submit en html 
//            //->add('submit', 'submit', array('label' => false,'attr' => array('class' => 'glyphicon glyphicon-search')))
//            ->getForm();
//        $form->handleRequest($request);
        
        if ($request->isMethod('POST')) {
            
            // recibiendo valores de busqueda
//            $data = $form->getData();
            $estadoid = $request->get('estadoid');
            $desarrolloid = $request->get('desarrolloid');
                        
            $logger = $this->get('logger');
            
            $logger->error('$estadoid : '.$estadoid);
            $logger->error('$desarrolloid : '.$desarrolloid);
            
            // si viene estado y desarrollo se hace una consulta por ambos parametros
            if($estadoid != NULL && $desarrolloid != NULL){
                
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\UnidadHabitacionalRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->getUnidadPorEstadoYDesarrollo($estadoid,$desarrolloid);
                
            // si viene solo estado se consulta solo por el parametro estado
            }elseif($estadoid != NULL && $desarrolloid == NULL){
                
                // usando funcion personal creada en elrepositorio Srpv\ProtocolizacionBundle\Entity\UnidadHabitacionalRepository
                $entities = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->getUnidadPorEstado($estadoid);
            
            // si viene solo desarrollo se consulta solo por el parametro desarrollo
            }elseif($estadoid == NULL && $desarrolloid != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->findBy(array('desarrollo'=>$desarrolloid));
            
            // si no viene ninguno de los parametros se trae todos los registros
            }elseif($estadoid == NULL && $desarrolloid == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->findAll();
                
            }
            
            return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:index.html.twig', array(
                'entities' => $entities,
                'title' => 'Unidad Habitacional',
//                'form' => $form->createView(),
                'estados' => $estados,
                'desarrollos' => $desarrollos,
            ));

        }

        return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Unidad Habitacional',
//            'form' => $form->createView(),
            'estados' => $estados,
            'desarrollos' => $desarrollos,
        ));
    }
    /**
     * Creates a new UnidadHabitacional entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new UnidadHabitacional();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidad_show', array('id' => $entity->getId())));
        }

        return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a UnidadHabitacional entity.
     *
     * @param UnidadHabitacional $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(UnidadHabitacional $entity)
    {
        $form = $this->createForm(new UnidadHabitacionalType(), $entity, array(
            'action' => $this->generateUrl('unidad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UnidadHabitacional entity.
     *
     */
    public function newAction()
    {
        $entity = new UnidadHabitacional();
        $form   = $this->createCreateForm($entity);

        return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UnidadHabitacional entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadHabitacional entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UnidadHabitacional entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadHabitacional entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a UnidadHabitacional entity.
    *
    * @param UnidadHabitacional $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UnidadHabitacional $entity)
    {
        $form = $this->createForm(new UnidadHabitacionalType(), $entity, array(
            'action' => $this->generateUrl('unidad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing UnidadHabitacional entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadHabitacional entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('unidad_edit', array('id' => $id)));
        }

        return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a UnidadHabitacional entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UnidadHabitacional entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('unidad'));
    }

    /**
     * Creates a form to delete a UnidadHabitacional entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
