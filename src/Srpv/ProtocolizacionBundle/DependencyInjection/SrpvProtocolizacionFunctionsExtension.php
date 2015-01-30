<?php

namespace Srpv\ProtocolizacionBundle\DependencyInjection;
use Doctrine\ORM\EntityManager;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class SrpvProtocolizacionFunctionsExtension extends \Twig_Extension
{
    protected $em ;

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'jefeOficina' => new \Twig_Function_Method($this, 'jefeOficina'),

        );
    }

    public function jefeOficina($oficina)
    {
       // $em = $this->get('doctrine.orm.entity_manager');
        //$estados = $this->em->getRepository('ComunesTablasBundle:Persona')->find($jefe);
        $jefe = $this->em->getRepository('SrpvProtocolizacionBundle:AsignacionCenso')->getBuscarJefe($oficina);
        
        return $jefe;
    }

    public function getName()
    {
        return 'acme_extension';
    }
}