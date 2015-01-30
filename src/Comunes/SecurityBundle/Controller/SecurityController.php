<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Security\Core\SecurityContext;


class SecurityController extends Controller {

    public function loginAction($error = null){
        
        $request = $this->getRequest();
        
        $routeName = $request->get('_route');        

        $action = $routeName == '_login' ? '_login_check' : 'admin_login_check';
        
        $session = $request->getSession();
        
        if(!$error){
        
            if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){

                $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);            


            }else{

                $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);

            }  
        }
        
        $form = $this->createForm(new \Comunes\SecurityBundle\Form\LoginType(), null, array(
            'action' => $this->generateUrl($action),
            'method' => 'POST',
            'attr' => array('autocomplete' => 'off')
        ));  
        
        return $this->render('ComunesSecurityBundle:Security:login.html.twig', 
                             array('ultimo_nombre' => $session->get(SecurityContext::LAST_USERNAME),
                                   'error' => $error,
                                   'form' => $form->createView()));        

    }
    
    public function logoutAction()
    {
        $this->get('security.context')->setToken(null);
        $this->get('request')->getSession()->invalidate();
        return $this->redirect($this->generateUrl('_welcome'));        
    }    
    
    public function logoutAdminAction()
    {
        $this->get('security.context')->setToken(null);
        $this->get('request')->getSession()->invalidate();
        return $this->redirect($this->generateUrl('sicc_admin_homepage'));        
    }    

    public function indexBnvhAction()
    {              
        
        $session = $this->getRequest()->getSession();
        
        $token = $this->container->get('security.context')->getToken();
  
      
        //Se definen las opciones a las cuales tiene acceso el usuario
        
        $opcionesMenu = array();
        $rolesMenu = array();
        
        foreach($token->getRoles() as $role){
        

            $roles = $this->getDoctrine()->getRepository('ComunesSecurityBundle:Rol')->findBy(array('nombre' => $role->getRole()));
            
            foreach($roles as $rol){
                
                array_push($rolesMenu, $rol); 
                
                $rolMenu = $this->getDoctrine()->getRepository('ComunesSecurityBundle:RolMenu')->findBy(array('rol' => $rol));

                foreach($rolMenu as $rolmenu){
                
                    array_push($opcionesMenu, $rolmenu); 
                    
                }
 
            }
            
        }
        
        // set and get session attributes
        $session->set('opcionesMenu', $opcionesMenu);
        
        $session->set('rolesMenu', $rolesMenu);
        
        
        //Fin de se definen las opciones a las cuales tiene acceso el usuario

        $username = $token->getUsername();
        
        $user = $this->getDoctrine()
                     ->getRepository('ComunesSecurityBundle:Usuario')
                     ->findBy(array('usuario'=> $username));

        $usuario = $user[0];        
        

        $fechaCaducidad = $usuario->getFechaCaducidad();

        $hoy = new \DateTime(date('d-M-y'));

        $interval = $hoy->diff($fechaCaducidad);

        $diasVigencia = (int) $interval->format('%R%a');
        

        if($diasVigencia <=5){

            $session->set('dias_caduca', $diasVigencia);                

        }         

        return $this->render('ComunesSecurityBundle:Security:inicio.html.twig');        
    

    }    
    
    public function indexAdminAction()
    {              

        return $this->render('ComunesSecurityBundle:Security:indexAdmin.html.twig');
    }    
  
    
    public function loginCheckAction()
    {

    }
        
}

?>
