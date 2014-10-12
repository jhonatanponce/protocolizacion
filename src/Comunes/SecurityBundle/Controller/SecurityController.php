<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller {
    
    public function loginAction(){
        
        $request = $this->getRequest();
        
        $session = $request->getSession();
        
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);            
            
        }else{
            
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            
        }
        
        return $this->render('ComunesSecurityBundle:Security:login.html.twig', 
                array('ultimo_nombre' => $session->get(SecurityContext::LAST_USERNAME),
                      'error' => $error));        
    }
    
    public function logoutAction($homepage)
    {
        $this->get('security.context')->setToken(null);
        $this->get('request')->getSession()->invalidate();
        return $this->redirect($this->generateUrl($homepage));        
    }    

    public function indexBnvhAction()
    {              
        
        $session = $this->getRequest()->getSession();
        
        $token = $this->container->get('security.context')->getToken();
        
        $opf = $this->getDoctrine()->getRepository('ComunesTablasBundle:GenBanco')
                               ->findOneBy(array('id' => $token->getUser()->getGenOperadorFinancieroId()));        
        
        
        //Se definen las opciones a las cuales tiene acceso el usuario
        
        $roles = array();
        
        foreach($token->getRoles() as $role)
            
            array_push($roles, $role->getRole());
        
        $security = $this->getDoctrine()->getRepository('ComunesSecurityBundle:VwRolOpcion');
        
        $opciones = $security->findOpcionesByRoles($roles);
        
        // set and get session attributes
        $session->set('opciones', $opciones);
        
        // 
        $session->set('opf', $opf->getNombre());
        
        return $this->render('ComunesSecurityBundle:Security:indexBnvh.html.twig');        
    

    }    
    
    public function indexAdminAction()
    {              

        return $this->render('ComunesSecurityBundle:Security:indexAdmin.html.twig');
    }    
    
    public function indexOpfAction()
    {              
        
        $session = $this->getRequest()->getSession();
        
        $token = $this->container->get('security.context')->getToken();
        
        $opf = $this->getDoctrine()->getRepository('ComunesTablasBundle:GenBanco')
                               ->findOneBy(array('id' => $token->getUser()->getGenOperadorFinancieroId()));        
        
        
        //Se definen las opciones a las cuales tiene acceso el usuario
        
        $roles = array();
        
        foreach($token->getRoles() as $role)
            
            array_push($roles, $role->getRole());
        
        $security = $this->getDoctrine()->getRepository('ComunesSecurityBundle:VwRolOpcion');
        
        $opciones = $security->findOpcionesByRoles($roles);
        
        // set and get session attributes
        $session->set('opciones', $opciones);
        
        // 
        $session->set('opf', $opf->getNombre());
        
        return $this->render('ComunesSecurityBundle:Security:indexOpf.html.twig');
    }    
    
    public function loginCheckAction()
    {

    }
}

?>
