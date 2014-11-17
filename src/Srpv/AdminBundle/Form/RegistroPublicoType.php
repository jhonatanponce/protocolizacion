<?php

namespace Srpv\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistroPublicoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
                
                
            ->add('nombre','text',array('label'  => 'Nombre:',
                                        'required' => true,
                                        'attr' => array('rows' => '1', 
                                                        'cols' => '100',
                                                        'maxlength' => '100'))) 
                
            ->add('geoEstado', 'entity', array('label' => 'Estado',
                                                'class'   => 'ComunesTablasBundle:GeoEstado',
                                                'property'   => 'nombre',
                                                'required' => true,
                                                'empty_value' => 'Seleccione'))
                
            ->add('geoMunicipio', 'entity', array('label' => 'Municipio',
                                                    'class'   => 'ComunesTablasBundle:GeoMunicipio',
                                                    'property'   => 'nombre',
                                                    'required' => true,
                                                    'empty_value' => 'Seleccione'))
            ->add('geoParroquia', 'entity', array('label' => 'Parroquia',
                                                    'class'   => 'ComunesTablasBundle:GeoParroquia',
                                                    'property'   => 'nombre',
                                                    'required' => true,
                                                    'empty_value' => 'Seleccione'))
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\RegistroPublico'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_registropublico';
    }
}
