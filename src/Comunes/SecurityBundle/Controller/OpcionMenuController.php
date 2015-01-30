<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Comunes\SecurityBundle\Entity\OpcionMenu;
use Comunes\SecurityBundle\Form\OpcionMenuType;

/**
 * OpcionMenu controller.
 *
 */
class OpcionMenuController extends Controller
{

    /**
     * Lists all OpcionMenu entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $sysApp = $em->getRepository('ComunesSecurityBundle:SysApp')->findBy(array('sysSistema' => 4));//18

        $entities = $em->getRepository('ComunesSecurityBundle:OpcionMenu')->findBy(array('sysApp' => $sysApp));

        $referer = $this->getRequest()->headers->get('referer');
        
        $msg = (substr_count($referer,'delete')) ? 'Registro Eliminado' : NULL;
        
        $css_msg = (substr_count($referer,'delete')) ? 'alert-danger' : NULL;
                
        
        return $this->render('ComunesSecurityBundle:OpcionMenu:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Opcion Menu',
            'msg' => $msg,
            'css_msg' => $css_msg,
        ));         
    }
    
    /**
     * Creates a new OpcionMenu entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new OpcionMenu();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->render('ComunesSecurityBundle:OpcionMenu:show.html.twig', array(
                'msg'         => 'Registro Creado',
                'css_msg'     => 'alert-info',                  
                'id' => $entity->getId(),
                'entity' => $entity,
                'form'   => $form->createView(),
            )); 
        }

        return $this->render('ComunesSecurityBundle:OpcionMenu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a OpcionMenu entity.
     *
     * @param OpcionMenu $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OpcionMenu $entity)
    {
        $form = $this->createForm(new OpcionMenuType(), $entity, array(
            'action' => $this->generateUrl('opcionmenu_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new OpcionMenu entity.
     *
     */
    public function newAction()
    {
        $entity = new OpcionMenu();
        $form   = $this->createCreateForm($entity);

        return $this->render('ComunesSecurityBundle:OpcionMenu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OpcionMenu entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:OpcionMenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OpcionMenu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:OpcionMenu:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OpcionMenu entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:OpcionMenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OpcionMenu entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:OpcionMenu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a OpcionMenu entity.
    *
    * @param OpcionMenu $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OpcionMenu $entity)
    {
        $form = $this->createForm(new OpcionMenuType(), $entity, array(
            'action' => $this->generateUrl('opcionmenu_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing OpcionMenu entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:OpcionMenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OpcionMenu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->render('ComunesSecurityBundle:OpcionMenu:show.html.twig', array(
                'msg'         => 'Registro Actualizado',
                'css_msg'     => 'alert-success',
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->render('ComunesSecurityBundle:OpcionMenu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a OpcionMenu entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ComunesSecurityBundle:OpcionMenu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OpcionMenu entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('opcionmenu'));
    }

    /**
     * Creates a form to delete a OpcionMenu entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rol_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'button', array('label' => 'Eliminar','attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
