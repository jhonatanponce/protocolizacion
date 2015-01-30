<?php

namespace Srpv\ProtocolizacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\Desarrollo;
use Srpv\ProtocolizacionBundle\Form\DesarrolloType;

/**
 * Desarrollo controller.
 *
 */
class DesarrolloController extends Controller
{

    /**
     * Lists all Desarrollo entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();
        
        // creando objeto temporal para formulario
        $search = array('message' => 'Type your message here');
        
        // generando formulario symfony
        $form = $this->createFormBuilder($search)
            ->add('estadoid', 'entity', array('required' => false, 'class'   => 'ComunesTablasBundle:GeoEstado','property' => 'nombre','empty_value' => 'Seleccione Estado','attr' => array('class' => 'form-control')))
            // si uso este submit se ve desalineado en el template, por eso use un submit en html 
            //->add('submit', 'submit', array('label' => false,'attr' => array('class' => 'glyphicon glyphicon-search')))
            ->getForm();
        
        // verificandoque el form se ha enviado (submit)
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            // recibiendo valores de busqueda
            $data = $form->getData();
            $estadoid = $data['estadoid'];
            
            // si viene estado se hace una consulta por ese parametro
            if($estadoid != NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findBy(array('geoEstado'=>$estadoid));
            
            // si viene solo desarrollo se consulta solo por el parametro desarrollo
            }elseif($estadoid == NULL){
                
                $entities = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();
                
            }
            
            return $this->render('SrpvProtocolizacionBundle:Desarrollo:index.html.twig', array(
                'entities' => $entities,
                'title' => 'Desarrollo Habitacional',
                'form' => $form->createView(),
            ));

        }

        return $this->render('SrpvProtocolizacionBundle:Desarrollo:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Desarrollo Habitacional',
            'form' => $form->createView(),
        ));
    }
    /**
     * Creates a new Desarrollo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Desarrollo();
        $user = $this->getUser();
        $fecha = new \DateTime(date('d-M-y'));
        
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

            return $this->redirect($this->generateUrl('desarrollo_show', array('id' => $entity->getId())));
        }

        return $this->render('SrpvProtocolizacionBundle:Desarrollo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Desarrollo entity.
     *
     * @param Desarrollo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Desarrollo $entity)
    {
        $form = $this->createForm(new DesarrolloType(), $entity, array(
            'action' => $this->generateUrl('desarrollo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Desarrollo entity.
     *
     */
    public function newAction()
    {
        $entity = new Desarrollo();
        $form   = $this->createCreateForm($entity);

        return $this->render('SrpvProtocolizacionBundle:Desarrollo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Desarrollo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:Desarrollo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Desarrollo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollo entity.');
        }
        // obteniendo la fecha de transferencia
        //$fecha_Transferencia = $entity->getFechaTransferencia();
        //formateando la fecha
        //$fechaTransferencia = $fecha_Transferencia->format("d/m/Y");
        //seteando la fechar de transferencia al objeto para el formulario a editar
        //$entity->setFechaTransferencia(new \DateTime($fechaTransferencia));
        
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvProtocolizacionBundle:Desarrollo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Desarrollo entity.
    *
    * @param Desarrollo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Desarrollo $entity)
    {
        $form = $this->createForm(new DesarrolloType(), $entity, array(
            'action' => $this->generateUrl('desarrollo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Desarrollo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $fecha = new \DateTime(date('d-M-y'));

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
            // seteando fecha actualizacion
            $entity->setFechaActualizacion($fecha);
            $em->flush();

            return $this->redirect($this->generateUrl('desarrollo_edit', array('id' => $id)));
        }

        return $this->render('SrpvProtocolizacionBundle:Desarrollo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Desarrollo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Desarrollo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('desarrollo'));
    }

    /**
     * Creates a form to delete a Desarrollo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('desarrollo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
