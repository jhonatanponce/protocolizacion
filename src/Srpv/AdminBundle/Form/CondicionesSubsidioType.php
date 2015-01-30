<?php

namespace Srpv\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CondicionesSubsidioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            ->add('tipoSubsidio', 'entity', array('class' => 'SrpvProtocolizacionBundle:TipoSubsidio',
                           'property' => 'descripcion',
                           'label'  => 'Tipo de Subsidio:',
                           'required' => true))     
            
            ->add('estatus','choice', array('label'  => 'Estatus:',
                            'choices'   => array('S' => 'ACTIVA',
                                                 'N' => 'INACTIVA'),
                            'required'  => true,))   
                               

            ->add('proporcionSalario','number', array('label'  => 'Ingreso en Salarios Mínimos',
                             'required'  => true,
                             'grouping' => true,))
                
            ->add('porcentajeSubsidio','number', array('label'  => '% del Subsidio:',
                 'required'  => true,
                 'grouping' => true,))     
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\CondicionesSubsidio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_condicionessubsidio';
    }
}
