<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Comunes\SecurityBundle\Entity\RolMenu;
use Comunes\SecurityBundle\Form\RolMenuType;

/**
 * RolMenu controller.
 *
 */
class RolMenuController extends Controller
{

    /**
     * Lists all RolMenu entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        
        $rol = $em->getRepository('ComunesSecurityBundle:Rol')->findBy(array('sysSistema' => 4));//18

        $entities = $em->getRepository('ComunesSecurityBundle:RolMenu')->findBy(array('rol' => $rol));

        $referer = $this->getRequest()->headers->get('referer');
        
        $msg = (substr_count($referer,'delete')) ? 'Registro Eliminado' : NULL;
        
        $css_msg = (substr_count($referer,'delete')) ? 'alert-danger' : NULL;
                
        
        return $this->render('ComunesSecurityBundle:RolMenu:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Menu',
            'msg' => $msg,
            'css_msg' => $css_msg,
        ));        
        
        
    }
    /**
     * Creates a new RolMenu entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new RolMenu();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->render('ComunesSecurityBundle:RolMenu:show.html.twig', array(
                'msg'         => 'Registro Creado',
                'css_msg'     => 'alert-info',                  
                'id' => $entity->getId(),
                'entity' => $entity,
                'form'   => $form->createView(),
            )); 
            
        }

        return $this->render('ComunesSecurityBundle:RolMenu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RolMenu entity.
     *
     * @param RolMenu $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RolMenu $entity)
    {
        $form = $this->createForm(new RolMenuType(), $entity, array(
            'action' => $this->generateUrl('rolmenu_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new RolMenu entity.
     *
     */
    public function newAction()
    {
        $entity = new RolMenu();
        $form   = $this->createCreateForm($entity);

        return $this->render('ComunesSecurityBundle:RolMenu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RolMenu entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:RolMenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RolMenu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:RolMenu:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RolMenu entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:RolMenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RolMenu entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:RolMenu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RolMenu entity.
    *
    * @param RolMenu $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RolMenu $entity)
    {
        $form = $this->createForm(new RolMenuType(), $entity, array(
            'action' => $this->generateUrl('rolmenu_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing RolMenu entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:RolMenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RolMenu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->render('ComunesSecurityBundle:RolMenu:show.html.twig', array(
                'msg'         => 'Registro Actualizado',
                'css_msg'     => 'alert-success',
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->render('ComunesSecurityBundle:RolMenu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RolMenu entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ComunesSecurityBundle:RolMenu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RolMenu entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rolmenu'));
    }

    /**
     * Creates a form to delete a RolMenu entity by id.
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
