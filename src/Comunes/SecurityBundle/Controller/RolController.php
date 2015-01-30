<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Comunes\SecurityBundle\Entity\Rol;
use Comunes\SecurityBundle\Entity\RolMenu;

use Comunes\SecurityBundle\Form\RolType;

/**
 * Rol controller.
 *
 */
class RolController extends Controller
{

    /**
     * Lists all Rol entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        
        $sysSistema = $em->getRepository('ComunesSecurityBundle:SysSistema')->find(4);
       
        $entities = $em->getRepository('ComunesSecurityBundle:Rol')->findBy(array('sysSistema'=> $sysSistema));

        $referer = $this->getRequest()->headers->get('referer');
        
        $msg = (substr_count($referer,'delete')) ? 'Registro Eliminado' : NULL;
        
        $css_msg = (substr_count($referer,'delete')) ? 'alert-danger' : NULL;
                
        
        return $this->render('ComunesSecurityBundle:Rol:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Rol',
            'msg' => $msg,
            'css_msg' => $css_msg,
        ));        
    }
    
    /**
     * Creates a new Rol entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rol();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            
            $em->flush();

            $rolMenu = new RolMenu();
            
            $opciones = $request->request->get('rol[opciones]', null, true);
            
            
            foreach ($opciones as $id) {             
                
                $opcion = $em->getRepository('ComunesSecurityBundle:OpcionMenu')
                           ->find($id);
                
                $rolMenu->setRol($entity);

                $rolMenu->setOpcionMenu($opcion);
                
                $em->persist($rolMenu);
                
            }
            
            $em->flush();
            
            return $this->render('ComunesSecurityBundle:Rol:show.html.twig', array(
                                 'msg'         => 'Registro Creado',
                                 'css_msg'     => 'alert-info',                  
                                 'id' => $entity->getId(),
                                 'entity' => $entity,
                                 'form'   => $form->createView(),
            ));            
            
        }

        return $this->render('ComunesSecurityBundle:Rol:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rol entity.
     *
     * @param Rol $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rol $entity)
    {
        $form = $this->createForm(new RolType(), $entity, array(
            'action' => $this->generateUrl('rol_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Rol entity.
     *
     */
    public function newAction()
    {
        $entity = new Rol();
        $form   = $this->createCreateForm($entity);

        return $this->render('ComunesSecurityBundle:Rol:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rol entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rol entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:Rol:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rol entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rol entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:Rol:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rol entity.
    *
    * @param Rol $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rol $entity)
    {
        $form = $this->createForm(new RolType(), $entity, array(
            'action' => $this->generateUrl('rol_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Rol entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rol entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
            $em->flush();

            $opciones = ($request->request->get('rol[opciones]', null, true)) 
                     ? $request->request->get('rol[opciones]', null, true)
                     : array();            
                
            $rolMenuOld = $em->getRepository('ComunesSecurityBundle:RolMenu')
                             ->findBy(array('rol' => $entity));

            $opcionesOld = array();
            
            foreach($rolMenuOld as $opcion){

                array_push($opcionesOld, $opcion->getOpcionMenu()->getId());
                
            }
            

            //opciones para eliminar
            
            $opcionesRemove = array_diff($opcionesOld, $opciones);
            
            foreach($opcionesRemove as $opcion){
                
                $opt = $em->getRepository('ComunesSecurityBundle:OpcionMenu')->find($opcion); 
                
                $RolMenu = $em->getRepository('ComunesSecurityBundle:RolMenu')
                              ->findBy(array('opcionMenu' => $opt,'rol' => $entity));

                $em->remove($RolMenu[0]);


            }    

            //roles para agregar
            
            $opcionesAdd = array_diff($opciones, $opcionesOld);

            foreach($opcionesAdd as $opcion){

                $RolMenu = new RolMenu();

                $opt = $em->getRepository('ComunesSecurityBundle:OpcionMenu')->find($opcion);

                $RolMenu->setOpcionMenu($opt);

                $RolMenu->setRol($entity);

                $em->persist($RolMenu);   
                    
                }

            $em->flush();            

            return $this->render('ComunesSecurityBundle:Rol:show.html.twig', array(
                'msg'         => 'Registro Actualizado',
                'css_msg'     => 'alert-success',
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->render('ComunesSecurityBundle:Rol:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
        
    }
    /**
     * Deletes a Rol entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ComunesSecurityBundle:Rol')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rol entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rol'));
    }

    /**
     * Creates a form to delete a Rol entity by id.
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
