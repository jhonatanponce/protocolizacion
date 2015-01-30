<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Comunes\SecurityBundle\Entity\UsuarioHasRol;
use Comunes\SecurityBundle\Form\UsuarioHasRolType;

/**
 * UsuarioHasRol controller.
 *
 */
class UsuarioHasRolController extends Controller
{

    /**
     * Lists all UsuarioHasRol entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')->findAll();

        return $this->render('ComunesSecurityBundle:UsuarioHasRol:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new UsuarioHasRol entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new UsuarioHasRol();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('usuariohasrol_show', array('id' => $entity->getId())));
        }

        return $this->render('ComunesSecurityBundle:UsuarioHasRol:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a UsuarioHasRol entity.
     *
     * @param UsuarioHasRol $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(UsuarioHasRol $entity)
    {
        $form = $this->createForm(new UsuarioHasRolType(), $entity, array(
            'action' => $this->generateUrl('usuariohasrol_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UsuarioHasRol entity.
     *
     */
    public function newAction()
    {
        $entity = new UsuarioHasRol();
        $form   = $this->createCreateForm($entity);

        return $this->render('ComunesSecurityBundle:UsuarioHasRol:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UsuarioHasRol entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UsuarioHasRol entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:UsuarioHasRol:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UsuarioHasRol entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UsuarioHasRol entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:UsuarioHasRol:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a UsuarioHasRol entity.
    *
    * @param UsuarioHasRol $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UsuarioHasRol $entity)
    {
        $form = $this->createForm(new UsuarioHasRolType(), $entity, array(
            'action' => $this->generateUrl('usuariohasrol_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing UsuarioHasRol entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UsuarioHasRol entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('usuariohasrol_edit', array('id' => $id)));
        }

        return $this->render('ComunesSecurityBundle:UsuarioHasRol:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a UsuarioHasRol entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UsuarioHasRol entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('usuariohasrol'));
    }

    /**
     * Creates a form to delete a UsuarioHasRol entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuariohasrol_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
