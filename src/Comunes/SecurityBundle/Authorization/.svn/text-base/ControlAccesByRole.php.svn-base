<?php

namespace Comunes\SecurityBundle\Authorization;

use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class ControlAccesByRole implements VoterInterface
{

    public function supportsAttribute($attribute)
    {

        return true;
    }

    public function supportsClass($class)
    {
        // your voter supports all type of token classes, so return true
        return true;
    }

    //Esto lo hizo Noooooooda
    
    public function vote(TokenInterface $token, $object, array $attributes)
    {
                    
        if ("anon." === $token->getUser())
            
            return VoterInterface::ACCESS_ABSTAIN;
        
        $roles = array();
        
        foreach($token->getRoles() as $role)
            
            array_push($roles, $role->getRole());        

        foreach($attributes as $attribute)
            
            if (in_array($attribute, $roles, true))
                
                return VoterInterface::ACCESS_ABSTAIN;
        
        return VoterInterface::ACCESS_DENIED;
    }
}
?>