<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Comunes\SecurityBundle\Entity\Usuario;
use Comunes\TablasBundle\Entity\Persona;
use Comunes\SecurityBundle\Entity\UsuarioHasRol;
use Comunes\SecurityBundle\Entity\UsuarioCambioClave;

use Comunes\SecurityBundle\Form\UsuarioType;
use Comunes\SecurityBundle\Form\CambiaClaveType;
use Comunes\SecurityBundle\Form\CambiaClaveAdminType;

use Comunes\SecurityBundle\Form\Model\CambiaClave;
use Comunes\SecurityBundle\Form\Model\CambiaClaveAdmin;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller
{

    /**
     * Lists all Usuario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ComunesSecurityBundle:Usuario')->findBy(array('sysSistema' => 4));
        
        $referer = $this->getRequest()->headers->get('referer');
        
        $msg = (substr_count($referer,'delete')) ? 'Registro Eliminado' : NULL;
        
        $css_msg = (substr_count($referer,'delete')) ? 'alert-danger' : NULL;
        
        return $this->render('ComunesSecurityBundle:Usuario:index.html.twig', array(
            'entities' => $entities,
            'title' => 'Usuario',
            'msg' => $msg,
            'css_msg' => $css_msg,
        ));
    }
    /**
     * Creates a new Usuario entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $persona = $em->getRepository('ComunesTablasBundle:Persona')
                      ->find($request->request->get('usuario[persona_id]', null, true));

        if (!$persona) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }        

        $entity = new Usuario();
        
        $form = $this->createCreateForm($entity, $persona);
        $form->handleRequest($request);

        if ($form->isValid()) {

            //1: valida que la clave este sin caracteres del username en la clave
            
            $clave = $request->request->get('usuario[clave][password]', null, true);
            $usuario = $request->request->get('usuario[usuario]', null, true);
            //die($clave.' '.$usuario);
            
            $caracteres = str_split($usuario,1);
            
            foreach ($caracteres as $caracter) {
                
                if(substr_count($clave,$caracter)){
                    
                    return $this->render('ComunesSecurityBundle:Usuario:new.html.twig', array(
                                         'msg' => 'La Clave no puede contener partes o el nombre completo del usuario',
                                         'css_msg'     => 'alert-danger',                           
                                         'form' => $form->createView(),
                    ));   
                }
            }            
            
            //2: valida que la clave este sin caracteres espaciales ni espacios
            
            if(preg_match ('/[\s_~\-!@#\$%\^&\*\(\)\?¿=¡\.\{\}\\]]/', $clave)){
                
                return $this->render('ComunesSecurityBundle:Usuario:new.html.twig', array(
                                     'msg' => 'La Clave no puede contener carácteres especiales',
                                     'css_msg'     => 'alert-danger',                           
                                     'form' => $form->createView(),
                ));                
                
            }
            
            //3: valida que la clave sea mayor a 8 caracteres
            
            if(strlen ($clave) < 8 || strlen ($clave) > 12){
                
                return $this->render('ComunesSecurityBundle:Usuario:new.html.twig', array(
                                     'msg' => 'La longitud de la clave debe ser mayor a 8 y menor a 12 caracteres',
                                     'css_msg'     => 'alert-danger',                           
                                     'form' => $form->createView(),
                ));                
                
            }
            
            $entity->setPersona($persona);
            
            $entity->setClave(md5($clave));
            
            $fecha = new \DateTime(date('d-M-y'));

            $em->persist($entity);
            
            //Se asignan los roles seleccionados
            
            $em->flush();
            
            $usuarioHasRol = new UsuarioHasRol();
            
            $roles = $request->request->get('usuario[roles]', null, true);
            
            foreach ($roles as $id) {
                
                $role = $em->getRepository('ComunesSecurityBundle:Rol')
                           ->find($id);
                
                $usuarioHasRol->setUsuario($entity);

                $usuarioHasRol->setRol($role);
                
                $em->persist($usuarioHasRol);
                
            }            

            $em->flush();            
            
            return $this->render('ComunesSecurityBundle:Usuario:show.html.twig', array(
                                 'msg'         => 'Registro Creado',
                                 'css_msg'     => 'alert-info',                  
                                 'id' => $entity->getId(),
                                 'entity' => $entity,
                                 'form'   => $form->createView(),
            ));             
        }

        return $this->render('ComunesSecurityBundle:Usuario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Usuario entity.
     *
     * @param Usuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Usuario $entity, Persona $persona = NULL)
    {
        $tipoForm = $persona ? new UsuarioType($persona) : new UsuarioType();
        
        $form = $this->createForm($tipoForm, $entity, array(
            'action' => $this->generateUrl('usuario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));
        
//        $form->add('submit', 'submit', array('label' => 'Crear','onClick' => 'encriptar(document.getElementById("login_oldPassword"),document.getElementById("login_newPassword_first"))'));        

        return $form;
    }

    /**
     * Displays a form to create a new Usuario entity.
     *
     */
    public function newAction(Persona $persona)
    {
        $entity = new Usuario();
        $form   = $this->createCreateForm($entity,$persona);

        return $this->render('ComunesSecurityBundle:Usuario:new.html.twig', array(
                             'entity' => $entity,
                             'form'   => $form->createView(),
                             'persona' => $persona,
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:Usuario:show.html.twig', array(
                             'entity'      => $entity,
                             'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createEditForm($entity);
        
        //se quitan los campos para cambio de clave y pregunta de seguridad
        $editForm->remove('clave');
        $editForm->remove('cambiarClave');
        $editForm->remove('cuentaHabilitada');
        $editForm->remove('respuesta');
        $editForm->remove('genPregConfirmacion');
        
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:Usuario:edit.html.twig', array(
                             'entity'      => $entity,
                             'edit_form'   => $editForm->createView(),
                             'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Usuario entity.
    *
    * @param Usuario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Usuario $entity)
    {
        $form = $this->createForm(new UsuarioType($entity->getPersona()), $entity, array(
            'action' => $this->generateUrl('usuario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Usuario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $claveActual = $entity->getClave();
        $habilitado = $entity->getCuentaHabilitada();
                
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
            $entity->setClave($claveActual);
            $entity->setCuentaHabilitada($habilitado);
            
            $em->flush();
            
            $roles = ($request->request->get('usuario[roles]', null, true)) 
                     ? $request->request->get('usuario[roles]', null, true)
                     : array();
            
            $usuarioHasRolOld = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')
                             ->findBy(array('usuario' => $entity));
            
            $rolesOld = array();
            
            foreach($usuarioHasRolOld as $rol){

                array_push($rolesOld,$rol->getRol()->getId());
                
            }
                        
            //roles para eliminar
            
            $rolesRemove = array_diff($rolesOld, $roles);
            
            foreach($rolesRemove as $rol){
                
                $role = $em->getRepository('ComunesSecurityBundle:Rol')->find($rol); 
                
                $usuarioHasRol = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')
                                 ->findBy(array('rol' => $role,'usuario' => $entity));

                $em->remove($usuarioHasRol[0]);


            }    

            //roles para agregar
            
            $rolesAdd = array_diff($roles, $rolesOld);

            foreach($rolesAdd as $rol){

                $usuarioHasRol = new UsuarioHasRol();

                $role = $em->getRepository('ComunesSecurityBundle:Rol')->find($rol);

                $usuarioHasRol->setRol($role);

                $usuarioHasRol->setUsuario($entity);

                $usuarioHasRol->setFechaAsignacion(new \DateTime(date('d-M-y')));

                $em->persist($usuarioHasRol);   
                    
                }
            

            $em->flush();

            return $this->render('ComunesSecurityBundle:Usuario:show.html.twig', array(
                                 'msg'         => 'Registro Actualizado',
                                 'css_msg'     => 'alert-success',
                                 'entity'      => $entity,
                                 'edit_form'   => $editForm->createView(),
                                 'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->render('ComunesSecurityBundle:Usuario:edit.html.twig', array(
                             'entity'      => $entity,
                             'edit_form'   => $editForm->createView(),
                             'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ComunesSecurityBundle:Usuario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('usuario'));
    }

    /**
     * Creates a form to delete a Usuario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $id)))
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

                return $this->forward('ComunesSecurityBundle:Usuario:new', array(
                    'persona' => $persona,              
                ));
                
            }else{
                
                return $this->render('ComunesSecurityBundle:Usuario:buscarPersona.html.twig', array(
                    'msg' => $msg,
                    'css_msg'     => 'alert-danger',                           
                    'form' => $form->createView(),
                ));                
                
            }
            
        }else{            
            
            return $this->render('ComunesSecurityBundle:Usuario:buscarPersona.html.twig', array(
                'form' => $form->createView(),
            ));             
    
        }
        
    }    
    
    
    public function cambiarClaveAction(Request $request)
    {
        $cambiaClaveModel = new CambiaClave();
        
        $form = $this->createForm(new CambiaClaveType(), $cambiaClaveModel);

        $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')
                                       ->find($this->get('security.context')->getToken()
                                       ->getUser()->getId());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if($request->request->get('login[newPassword][first]', null, true) === 
               $request->request->get('login[oldPassword]', null, true))
            {
                
                return $this->render('ComunesSecurityBundle:Usuario:cambiarClave.html.twig', array(
                    'msg' => 'La Clave Nueva es igual a la Actual',
                    'css_msg'     => 'alert-danger',                           
                    'form' => $form->createView(),
                ));                  
            }
            
            $claveNueva = $request->request->get('login[newPassword][first]', null, true);
            
            $caracteres = str_split($usuario->getUsuario(),1);
            
            foreach ($caracteres as $caracter) {
                
                if(substr_count($claveNueva,$caracter)){
                    
                    return $this->render('ComunesSecurityBundle:Usuario:cambiarClave.html.twig', array(
                                         'msg' => 'La Clave Nueva no puede contener partes o el nombre completo del usuario',
                                         'css_msg'     => 'alert-danger',                           
                                         'form' => $form->createView(),
                    ));   
                }
            }
            
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();                

                $usuario->setClave(md5($request->request->get('login[newPassword][first]', null, true)));
                
                $fecha = new \DateTime(date('d-M-y'));
                
                $fechaCaducidad = $fecha->modify('+120 day')->format('d-M-y');
                
                $usuario->setFechaCaducidad($fechaCaducidad);
                
                $em->persist($usuario);
                
                //se guarda el log del cambio de clave
                
                $cambioClaveLog = new UsuarioCambioClave();
                
                $cambioClaveLog->setUsuario($usuario);
                $cambioClaveLog->setIp($request->getClientIp());
                $cambioClaveLog->setFecha(new \DateTime(date('d-M-y H:i:s')));
                $em->persist($cambioClaveLog);                
                
                $em->flush();
                
                return $this->render('ComunesSecurityBundle:Usuario:cambiarClave.html.twig', array(
                                     'msg' => 'Clave Cambiada con Éxito. El cambio será efectivo en su próximo inicio de sesión',
                                     'css_msg'     => 'alert-success',                           
                                     'form' => $form->createView(),
                ));                
                
            }            

        } 

        return $this->render('ComunesSecurityBundle:Usuario:cambiarClave.html.twig', array(
          'form' => $form->createView(),
        ));      
    }
    
    public function cambiarClaveAdminAction(Request $request, $id)
    {
        $cambiaClaveModel = new CambiaClaveAdmin();
        
        $form = $this->createForm(new CambiaClaveAdminType(), $cambiaClaveModel);
        $form->remove('oldPassword');
        
        $usuario = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Usuario')->find($id);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $claveNueva = $request->request->get('login[newPassword][first]', null, true);
            
            $caracteres = str_split($usuario->getUsuario(),1);
            
            foreach ($caracteres as $caracter) {
                
                if(substr_count($claveNueva,$caracter)){
                    
                    return $this->render('ComunesSecurityBundle:Usuario:cambiarClave.html.twig', array(
                                         'msg' => 'La Clave Nueva no puede contener partes o el nombre completo del usuario',
                                         'css_msg'     => 'alert-danger',                           
                                         'form' => $form->createView(),
                    ));   
                }
            }
            
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();                

                $usuario->setClave(md5($request->request->get('login[newPassword][first]', null, true)));
                
                $fecha = new \DateTime(date('d-M-y'));
                
                $fechaCaducidad = $fecha->modify('+120 day')->format('d-M-y');
                
                $usuario->setFechaCaducidad($fechaCaducidad);
                
                $em->persist($usuario);
                
                //se guarda el log del cambio de clave
                
                $cambioClaveLog = new UsuarioCambioClave();
                
                $usuarioCambiaClave = $this->getDoctrine()->getManager()->getRepository('ComunesSecurityBundle:Usuario')->find(0);
                $cambioClaveLog->setUsuario($usuarioCambiaClave);
                $cambioClaveLog->setIp($request->getClientIp());
                $cambioClaveLog->setFecha(new \DateTime(date('d-M-y H:i:s')));
                $em->persist($cambioClaveLog);                
                
                $em->flush();
                
                return $this->render('ComunesSecurityBundle:Usuario:cambiarClave.html.twig', array(
                                     'msg' => 'Clave Cambiada con Éxito. El cambio será efectivo en su próximo inicio de sesión',
                                     'css_msg'     => 'alert-success',                           
                                     'form' => $form->createView(),
                ));                
                
            }            

        } 

        return $this->render('ComunesSecurityBundle:Usuario:cambiarClave.html.twig', array(
          'form' => $form->createView(),
        ));      
    }
    
    public function habilitarCuentaAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ComunesSecurityBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $actual = $entity->getCuentaHabilitada();
        
        $nuevo = $actual ? '0' : '1';
        
        $msg = $nuevo ? 'Cuenta Habilitada con Éxito. ' : 'Cuenta Deshabilitada con Éxito. ';
        
        $entity->setCuentaHabilitada($nuevo);
                
        $em->persist($entity);                

        $em->flush();        

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ComunesSecurityBundle:Usuario:show.html.twig', array(
                             'entity'      => $entity,
                             'msg' => $msg,
                             'css_msg'     => 'alert-success',             
                             'delete_form' => $deleteForm->createView(),
        ));
    }    
}
