<?php

namespace Srpv\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\TasaFongar;
use Srpv\AdminBundle\Form\TasaFongarType;

/**
 * TasaFongar controller.
 *
 */
class TasaFongarController extends Controller
{

    /**
     * Lists all TasaFongar entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:TasaFongar')->findAll();

        return $this->render('SrpvAdminBundle:TasaFongar:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Tasa Fongar',
        ));
    }
    /**
     * Creates a new TasaFongar entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TasaFongar();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            
//             se define las entidades por defecto
//            $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
            $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(11795);
            
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }            
            
            $fecha = new \DateTime(date('d-M-y')); 
            
            $entity->setFechaCreacion($fecha);
            $entity->setUsuario($usuario);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tasafongar_show', array('id' => $entity->getId())));
        }

        return $this->render('SrpvAdminBundle:TasaFongar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TasaFongar entity.
     *
     * @param TasaFongar $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TasaFongar $entity)
    {
        $form = $this->createForm(new TasaFongarType(), $entity, array(
            'action' => $this->generateUrl('tasafongar_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new TasaFongar entity.
     *
     */
    public function newAction()
    {
        $entity = new TasaFongar();
        $form   = $this->createCreateForm($entity);

        return $this->render('SrpvAdminBundle:TasaFongar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TasaFongar entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TasaFongar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TasaFongar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:TasaFongar:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TasaFongar entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TasaFongar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TasaFongar entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:TasaFongar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TasaFongar entity.
    *
    * @param TasaFongar $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TasaFongar $entity)
    {
        $form = $this->createForm(new TasaFongarType(), $entity, array(
            'action' => $this->generateUrl('tasafongar_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing TasaFongar entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TasaFongar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TasaFongar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
//             se define las entidades por defecto
//            $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
            $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(11795);
            
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }            
            
            $fecha = new \DateTime(date('d-M-y')); 
            
            $entity->setFechaCreacion($fecha);
            $entity->setUsuario($usuario);
            
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }            

            $entity->setFechaCreacion($fecha);
            $entity->setUsuario($usuario);            
            
            $em->flush();

            return $this->render('SrpvAdminBundle:TasaFongar:edit.html.twig', array(
                'msg'         => 'Registro Actualizado',
                'css_msg'     => 'alert-success',
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->render('SrpvAdminBundle:TasaFongar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TasaFongar entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvProtocolizacionBundle:TasaFongar')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TasaFongar entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tasafongar'));
    }

    /**
     * Creates a form to delete a TasaFongar entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tasafongar_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
