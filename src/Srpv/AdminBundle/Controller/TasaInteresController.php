<?php

namespace Srpv\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\TasaInteres;
use Srpv\AdminBundle\Form\TasaInteresType;

/**
 * TasaInteres controller.
 *
 */
class TasaInteresController extends Controller
{

    /**
     * Lists all TasaInteres entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:TasaInteres')->findAll();

        return $this->render('SrpvAdminBundle:TasaInteres:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TasaInteres entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TasaInteres();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tasainteres_show', array('id' => $entity->getId())));
        }

        return $this->render('SrpvAdminBundle:TasaInteres:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TasaInteres entity.
     *
     * @param TasaInteres $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TasaInteres $entity)
    {
        $form = $this->createForm(new TasaInteresType(), $entity, array(
            'action' => $this->generateUrl('tasainteres_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TasaInteres entity.
     *
     */
    public function newAction()
    {
        $entity = new TasaInteres();
        $form   = $this->createCreateForm($entity);

        return $this->render('SrpvAdminBundle:TasaInteres:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TasaInteres entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TasaInteres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TasaInteres entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:TasaInteres:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TasaInteres entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TasaInteres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TasaInteres entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:TasaInteres:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TasaInteres entity.
    *
    * @param TasaInteres $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TasaInteres $entity)
    {
        $form = $this->createForm(new TasaInteresType(), $entity, array(
            'action' => $this->generateUrl('tasainteres_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TasaInteres entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TasaInteres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TasaInteres entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tasainteres_edit', array('id' => $id)));
        }

        return $this->render('SrpvAdminBundle:TasaInteres:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TasaInteres entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvAdminBundle:TasaInteres')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TasaInteres entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tasainteres'));
    }

    /**
     * Creates a form to delete a TasaInteres entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tasainteres_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
