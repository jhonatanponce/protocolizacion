<?php

namespace Srpv\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\TipoSubsidio;
use Srpv\AdminBundle\Form\TipoSubsidioType;

/**
 * TipoSubsidio controller.
 *
 */
class TipoSubsidioController extends Controller
{

    /**
     * Lists all TipoSubsidio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:TipoSubsidio')->findAll();

        $referer = $this->getRequest()->headers->get('referer');
        
        $msg = (substr_count($referer,'delete')) ? 'Registro Eliminado' : NULL;
        
        $css_msg = (substr_count($referer,'delete')) ? 'alert-danger' : NULL;


        return $this->render('SrpvAdminBundle:TipoSubsidio:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Tipo Subsidio',
            'msg' => $msg,
            'css_msg' => $css_msg,
        ));
    }
    /**
     * Creates a new TipoSubsidio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoSubsidio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            
            
            //             se define las entidades por defecto
//            $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
            $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(0);
            
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }            
            
            $fecha = new \DateTime(date('d-M-y')); 
            
            $entity->setFechaCreacion($fecha);
            $entity->setUsuario($usuario);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

      
                    
            return $this->render('SrpvAdminBundle:TipoSubsidio:show.html.twig', array(
                'msg'         => 'Registro Creado',
                'css_msg'     => 'alert-info',                  
                'id' => $entity->getId(),
                'entity' => $entity,
                'form'   => $form->createView(),
            ));
            
            
            
        }

        return $this->render('SrpvAdminBundle:TipoSubsidio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoSubsidio entity.
     *
     * @param TipoSubsidio $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoSubsidio $entity)
    {
        $form = $this->createForm(new TipoSubsidioType(), $entity, array(
            'action' => $this->generateUrl('tiposubsidio_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoSubsidio entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoSubsidio();
        $form   = $this->createCreateForm($entity);

        return $this->render('SrpvAdminBundle:TipoSubsidio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoSubsidio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvAdminBundle:TipoSubsidio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoSubsidio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:TipoSubsidio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoSubsidio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TipoSubsidio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoSubsidio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:TipoSubsidio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoSubsidio entity.
    *
    * @param TipoSubsidio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoSubsidio $entity)
    {
        $form = $this->createForm(new TipoSubsidioType(), $entity, array(
            'action' => $this->generateUrl('tiposubsidio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing TipoSubsidio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:TipoSubsidio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoSubsidio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
            
//             se define las entidades por defecto
//            $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
            $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(0);
            
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }            
            
            $fecha = new \DateTime(date('d-M-y')); 
            
            $entity->setFechaCreacion($fecha);
            $entity->setUsuario($usuario);
            
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }            

            $entity->setFechaActualizacion($fecha);
            $entity->setUsuario($usuario);  
            
            $em->flush();

                      
            return $this->render('SrpvAdminBundle:TipoSubsidio:edit.html.twig', array(
                'msg'         => 'Registro Actualizado',
                'css_msg'     => 'alert-success',
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->render('SrpvAdminBundle:TipoSubsidio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoSubsidio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvProtocolizacionBundle:TipoSubsidio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoSubsidio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiposubsidio'));
    }

    /**
     * Creates a form to delete a TipoSubsidio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiposubsidio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'button', array('label' => 'Eliminar','attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
