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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->findAll();

        return $this->render('SrpvProtocolizacionBundle:Desarrollo:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Desarrollo Habitacional',
        ));
    }
    /**
     * Creates a new Desarrollo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Desarrollo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('protocolizacion_desarrollo_show', array('id' => $entity->getId())));
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
            'action' => $this->generateUrl('protocolizacion_desarrollo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

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
            'action' => $this->generateUrl('protocolizacion_desarrollo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Desarrollo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Desarrollo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('protocolizacion_desarrollo_edit', array('id' => $id)));
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

        return $this->redirect($this->generateUrl('protocolizacion_desarrollo'));
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
            ->setAction($this->generateUrl('protocolizacion_desarrollo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
