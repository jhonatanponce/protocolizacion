<?php

namespace Srpv\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SalarioSubsidioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('descripcion','text',array('label'  => 'Descripción:',
                                            'required' => true,
                                            'attr' => array('rows' => '1', 
                                                            'cols' => '200',
                                                            'maxlength' => '200')))
            ->add('gacetasPtosCta', 'entity', array('class' => 'SrpvProtocolizacionBundle:GacetasPuntosCta',
                            'property' => 'descripcion',
                            'label'  => 'Gacetas, Punto de Cuenta:',
                            'required' => true))       
                
            ->add('monto','number', array('label'  => 'Monto en Bs:',
                             'required'  => true,
                             'grouping' => true,))   
           
            ->add('tipo','choice', array('label'  => 'Tipo Monto:',
                'choices'   => array('SALARIO MINIMO' => 'SALARIO MINIMO',
                                     'SUBSIDIO MAXIMO' => 'SUBSIDIO MAXIMO'),
                                            'required'  => true,))
                
            ->add('estatus','choice', array('label'  => 'Estatus:',
                            'choices'   => array('S' => 'ACTIVA',
                                                 'N' => 'INACTIVA'),
                                            'required'  => true,))
    

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\SalarioSubsidio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_salariosubsidio';
    }
}
