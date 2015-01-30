<?php

namespace Srpv\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AbogadosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('inpreabogado')
            ->add('observaciones')
            //->add('oficina')
           // ->add('usuario')
            ->add('persona')
            
            ->add('tipoAbogado', 'entity', array('label' => 'Tipo de Abogado:',
                                    'class'   => 'SrpvProtocolizacionBundle:TipoAbogado',
                                    'property'   => 'nombre',
                                    'required' => true,
                                    'empty_value' => 'Seleccione'))   
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
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\Abogados'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_abogados';
    }
}
