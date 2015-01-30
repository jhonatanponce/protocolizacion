<?php

namespace Srpv\ProtocolizacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BeneficiarioTemporalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

                ->add('desarrollo', 'entity', array('label' => 'Desarrollo Habitacional:',
                                                    'class'   => 'SrpvProtocolizacionBundle:Desarrollo',
                                                    'property'   => 'nombre',
                                                    'required' => true,'empty_value' => 'Seleccione'))
                
                ->add('unidadHabitacional', 'entity', array('label' => 'Unidad Habitacional:',
                                                    'class'   => 'SrpvProtocolizacionBundle:UnidadHabitacional',
                                                    'property'   => 'nombre',
                                                    'required' => true,'empty_value' => 'Seleccione'))
                ->add('nombreArchivo', 'file', array('label'  => 'Seleccione el Archivo a Cargar:',
                                                       'required' => true))       

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\BeneficiarioTemporal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_beneficiariotemporal';
    }
}
