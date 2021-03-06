<?php

namespace Comunes\SecurityBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Opciones
 * cnodax
 */
class SecurityRepository extends EntityRepository
{
    public function getCodigosArea(){
        
        //Trae todos los codigos de area, ya que en tablas comunes la relacion no esta establecida
        
        $genCodigoArea = $this->getEntityManager()->getRepository('ComunesTablasBundle:GenCodigoArea')->findAll();

        return $this->getEntityManager()->createQueryBuilder()
                    ->select('ca')
                    ->from('ComunesTablasBundle:GenCodigoArea', 'ca');
    }     
    
    public function getRolesBySysSistema($id){
        
        //Trae todos los roles asociados a un sistema
        
        $sysSistema = $this->getEntityManager()->getRepository('ComunesSecurityBundle:SysSistema')->find($id);

        return $this->getEntityManager()->createQueryBuilder()
                    ->select('rol')
                    ->from('ComunesSecurityBundle:Rol', 'rol')
                    ->where('rol.sysSistema = :id')
                    ->setParameter('id', $sysSistema);
    }  
    
    public function getOpcionesBySysApp($id){
        
        //Trae todos los roles asociados a un sistema
        
        $sysApp = $this->getEntityManager()->getRepository('ComunesSecurityBundle:SysApp')->find($id);

        return $this->getEntityManager()->createQueryBuilder()
                    ->select('opcion')
                    ->from('ComunesSecurityBundle:OpcionMenu', 'opcion')
                    ->where('opcion.sysApp = :id')
                    ->setParameter('id', $sysApp);
    }        
    
    public function getAppBySysSistema($id){
        
        //Trae todos los roles asociados a un sistema
        
        $sysSistema = $this->getEntityManager()->getRepository('ComunesSecurityBundle:SysSistema')->find($id);

        return $this->getEntityManager()->createQueryBuilder()
                    ->select('app')
                    ->from('ComunesSecurityBundle:SysApp', 'app')
                    ->where('app.sysSistema = :id')
                    ->setParameter('id', $sysSistema);
    }        
    
    public function getUsuarioByUsername($username){
        
        //Trae el objeto usuario segun el nombre de usuario
        

        $sql = $this->getEntityManager()->createQueryBuilder()
                    ->select('u')
                    ->from('ComunesSecurityBundle:Usuario', 'u')
                    ->where('u.usuario = :username AND u.cuentaHabilitada = :si')
                    ->setParameter('username', $username)
                    ->setParameter('si', '1')
                    ->getQuery();
        
        return $sql->execute();
                
    }        
    
}
