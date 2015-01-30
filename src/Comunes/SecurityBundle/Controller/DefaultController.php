<?php

namespace Comunes\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComunesSecurityBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function getRolesUsuarioAction() {
        
        $role = array();

        $em = $this->getDoctrine()->getManager();
        
        $request = Request::createFromGlobals();
        
        $id = $request->query->get('id');
        
        $usuario = $em->getRepository('ComunesSecurityBundle:Usuario')->find($id);
        
        $usuarioRol = $em->getRepository('ComunesSecurityBundle:UsuarioHasRol')->findBy(array('usuario' => $usuario));
        
        if (count($usuarioRol) == 0) {
            
            $respuesta = array("responseCode"=>400, "msg"=>"El usuario no tiene roles asignados");
        
        }else{
                     
            foreach ($usuarioRol as $rol) {
                
                array_push($role,"usuario_roles_".$rol->getRol()->getId());
                
            }
            
            $respuesta = array("responseCode" => 200, "role" => $role);
        }
        
        $respuesta = json_encode($respuesta);

        return new Response($respuesta,200,array('Content-Type'=>'application/json'));
    }    
    
    public function getOpcionesRolAction() {
        
        $opciones = array();

        $em = $this->getDoctrine()->getManager();
        
        $request = Request::createFromGlobals();
        
        $id = $request->query->get('id');
        
        $rol = $em->getRepository('ComunesSecurityBundle:Rol')->find($id);

        $rolOpcion = $em->getRepository('ComunesSecurityBundle:RolMenu')->findBy(array('rol' => $rol));

        if (count($rolOpcion) == 0) {
            
            $respuesta = array("responseCode"=>400, "msg"=>"El rol no tiene opciones asignadas");
        
        }else{
                     
            foreach ($rolOpcion as $opcion) {
                
                array_push($opciones,"rol_opciones_".$opcion->getOpcionMenu()->getId());
                
            }
            
            $respuesta = array("responseCode" => 200, "opcion" => $opciones);
        }
        
        $respuesta = json_encode($respuesta);

        return new Response($respuesta,200,array('Content-Type'=>'application/json'));
    }    
}
