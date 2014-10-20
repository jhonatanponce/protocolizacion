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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:UnidadHabitacional')->findAll();

        return $this->render('SrpvProtocolizacionBundle:UnidadHabitacional:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Unidad Habitacional',
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
