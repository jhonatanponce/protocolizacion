<?php

namespace Comunes\SecurityBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Opciones
 * cnodax
 */
class SecurityRepository extends EntityRepository
{
    public function findOpcionesByRoles(array $roles)
    {
        $entities = array();
        
        foreach ($roles as $rol):
        
            $entity = $this->getEntityManager()
                             ->createQuery("SELECT o
                                            FROM ComunesSecurityBundle:VwRolOpcion o 
                                            WHERE o.nombre = '" .$rol. "'")
                             ->getResult();
        
            array_push($entities, $entity);
            
        endforeach;
        
        
        return $entities;
    }    
}
