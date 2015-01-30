<?php

namespace Comunes\SecurityBundle\Provider;

use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

use Symfony\Component\Security\Core\Exception\CredentialsExpiredException;

class AuthenticationListener
{

    protected $em;
    
    public function __construct (EntityManager $entityManager = null) {
        
        $this->em = $entityManager ? $entityManager : null;
        
    }    
    
    public function onAuthenticationFailure( AuthenticationFailureEvent $event )
    {
        
        $token = $event->getAuthenticationToken();

        $username = $token->getUsername();
        
        
        
        if($username !== 'admin'){
        
            $user = $this->em
                         ->getRepository('ComunesSecurityBundle:Usuario')
                         ->getUsuarioByUsername($username);
            
            if(count($user)){
                
                $usuario = $user[0];

                //Control de 3 intentos para el bloqueo

                $intentos = $usuario->getIntentos();

                $usuario->setIntentos(($intentos+1));

                $this->em->persist($usuario);

                $this->em->flush();

                try {

                    if($usuario->getIntentos() >= 3){           

                        $usuario->setCuentaHabilitada('0');

                        $this->em->persist($usuario);

                        $this->em->flush();

                        throw new BadCredentialsException;

                    }

                } catch (BadCredentialsException $e) {

                    $message = sprintf(
                        'Usuario Bloqueado, diríjase con el administrador'
                    );

                    throw new BadCredentialsException($message, 0, $e);
                }
                //Fin de Control de 3 intentos para el bloqueo
            }
        }

    }
 
    public function onAuthenticationSuccess( InteractiveLoginEvent $event )
    {
        $token = $event->getAuthenticationToken();

        $username = $token->getUsername();
        
        if($username !== 'admin'){
        
            $user = $this->em
                         ->getRepository('ComunesSecurityBundle:Usuario')
                         ->findBy(array('usuario'=> $username));

            if (!$user) {
                $message = sprintf(
                        'Usuario No encontrado, diríjase con el administrador'
                );

                throw new CredentialsExpiredException($message, 0);
            }
            
            $usuario = $user[0];

            $usuario->setIntentos(0);
            
            $usuario->setUltimoAcceso(new \DateTime(date('d-M-y')));

            $this->em->persist($usuario);

            $this->em->flush();            
                  
            // Verifica caducidad de clave
            try {

                if(!($usuario->getFechaCaducidad() >= new \DateTime(date('d-M-y')))){
                    
                    throw new CredentialsExpiredException;

                }

            } catch (CredentialsExpiredException $e) {

                $message = sprintf(
                    'Su clave a caducado. Dirigase al administrador del sistema'
                );

                throw new CredentialsExpiredException($message, 0, $e);
            }            

        }       
    }
}

?>