<?php

namespace Srpv\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TasaFongarType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estatus','choice', array('label'  => 'Estatus:',
                                            'choices'   => array('S' => 'ACTIVA',
                                                                 'N' => 'INACTIVA'),
                                            'required'  => true,)) 
                
            ->add('observaciones','text',array('label'  => 'Observaciones:',
                                               'required' => true,
                                               'attr' => array('rows' => '2', 
                                                               'cols' => '100',
                                                               'maxlength' => '200')))
                
            ->add('porcentajeInicial','number', array('label'  => '% Inicial:',
                                                      'required'  => true,
                                                      'grouping' => true,))
                
            ->add('porcentajeRenovacion','number', array('label'  => '% Renovacion:',
                                                         'required' => true,       
                                                         'grouping' => true,))       
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\TasaFongar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_tasafongar';
    }
}