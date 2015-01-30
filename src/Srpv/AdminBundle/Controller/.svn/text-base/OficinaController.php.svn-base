<?php

namespace Srpv\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srpv\ProtocolizacionBundle\Entity\Oficina;
use Comunes\TablasBundle\Entity\Persona;


use Srpv\AdminBundle\Form\OficinaType;

/**
 * Oficina controller.
 *
 */
class OficinaController extends Controller
{

    /**
     * Lists all Oficina entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->findAll();

        $referer = $this->getRequest()->headers->get('referer');
        
        $msg = (substr_count($referer,'delete')) ? 'Registro Eliminado' : NULL;
        
        $css_msg = (substr_count($referer,'delete')) ? 'alert-danger' : NULL;
        
        return $this->render('SrpvAdminBundle:Oficina:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Oficina Regional',
            'msg' => $msg,
            'css_msg' => $css_msg,
        ));
    }
    /**
     * Creates a new Oficina entity.
     *
     */
    public function createAction(Request $request)
    {       
        //Persona...
        $em = $this->getDoctrine()->getManager();

        $persona = $em->getRepository('ComunesTablasBundle:Persona')
                      ->find($request->request->get('oficina[personaIdJefe]', null, true));

        if (!$persona) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }        

        
        $entity = new Oficina();
        $form = $this->createCreateForm($entity,$persona);
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            
            echo $estado = $entity->getGeoEstado()->getId();
            
             echo ' - ';
            echo $municipio = $entity->getGeoMunicipio()->getId();
            echo ' - ';
            echo $parroquia = $entity->getGeoParroquia()->getId();
            

            //  se define las entidades por defecto
            /// $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($user = $this->get('security.context')->getToken()->getUser()->getId());
            
            $usuario = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(0);
            
            if (!$usuario) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }            
            
            $fecha = new \DateTime(date('d-M-y')); 
            
            $entity->setFechaCreacion($fecha);
            $entity->setUsuario($usuario);
            $entity->setPersonaIdJefe($persona);
                 
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

                                       
            return $this->render('SrpvAdminBundle:Oficina:show.html.twig', array(
                'msg'         => 'Registro Creado',
                'css_msg'     => 'alert-info',                  
                'id' => $entity->getId(),
                'entity' => $entity,
                'form'   => $form->createView(),
            ));     
        }

        return $this->render('SrpvAdminBundle:Oficina:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Oficina entity.
     *
     * @param Oficina $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Oficina $entity, Persona $persona = NULL)
            
    {
        
        $tipoForm = $persona ? new OficinaType($persona) : new OficinaType();
        
        $form = $this->createForm($tipoForm, $entity, array(
            'action' => $this->generateUrl('oficina_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));
        

        return $form;

    }

    /**
     * Displays a form to create a new Oficina entity.
     *
     */
    public function newAction(Persona $persona)
    {
        $entity = new Oficina();
        $form   = $this->createCreateForm($entity, $persona);

        
        
        return $this->render('SrpvAdminBundle:Oficina:new.html.twig', array(
                             'entity' => $entity,
                             'form'   => $form->createView(),
                             'persona' => $persona,
        ));    

    }

    /**
     * Finds and displays a Oficina entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Oficina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:Oficina:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Oficina entity.
     *
     */
    public function editAction($id)
    {
        

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Oficina entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SrpvAdminBundle:Oficina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Oficina entity.
    *
    * @param Oficina $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Oficina $entity)
            
    {

        
        $form = $this->createForm(new OficinaType($entity->getPersonaIdJefe()), $entity, array(
            'action' => $this->generateUrl('oficina_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        
        
        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Oficina entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Oficina entity.');
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

            
           
            return $this->render('SrpvAdminBundle:Oficina:edit.html.twig', array(
                'msg'         => 'Registro Actualizado',
                'css_msg'     => 'alert-success',
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));

        }

        return $this->render('SrpvAdminBundle:Oficina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Oficina entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SrpvProtocolizacionBundle:Oficina')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Oficina entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('oficina'));
    }

    /**
     * Creates a form to delete a Oficina entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('oficina_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'button', array('label' => 'Eliminar','attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
    
    
    public function buscarPersonaAction(Request $request)
    {          

        //Crea el formulario para buscar por cedula

        $form = $this->createFormBuilder()

                ->add('nacionalidad', 'choice', array(  'choices' => array('1' => 'V', '0' => 'E')))    

                ->add('cedula','number', array('label' => 'Cédula Identidad',
                                               'attr' => array('size' => '8',
                                                               'maxlength' => '8')))                     
                ->getForm();         
        
        if($request->getMethod() == 'POST'){
        

            $em = $this->getDoctrine()->getManager();
            
            $msg = '';
            
            $persona = $em->getRepository('ComunesTablasBundle:Persona')->findOneBy(array('cedula' => $request->request->get('form[cedula]', null, true),'nacionalidad' => $request->request->get('form[nacionalidad]', null, true)));
            
           
            if(!$persona){
                
                $msg = "No existen personas registradas con la cedula ingresada";
                
                return $this->forward('ComunesTablasBundle:Persona:new', 
                               array('msg' => $msg,
                                     'cedula' => $request->request->get('form[cedula]', null, true),
                                     'nac' => $request->request->get('form[nacionalidad]', null, true),
                                     'css_msg'     => 'alert-danger',));                
                                    
            }
            
            if($persona){
                //Si la persona existe creo el registro de la oficina

                return $this->forward('SrpvAdminBundle:Oficina:new', array(
                    'persona' => $persona,              
                ));
                
            }else{
                //Si la persona no existe lo mando a buscar a la persona de nuevo
                return $this->render('SrpvAdminBundle:Oficina:buscarPersona.html.twig', array(
                    'msg' => $msg,
                    'css_msg'     => 'alert-danger',                           
                    'form' => $form->createView(),
                ));                
                
            }
            
        }else{            
            
            return $this->render('SrpvAdminBundle:Oficina:buscarPersona.html.twig', array(
                'form' => $form->createView(),
            ));             
    
        }
        
    }    
    
}
