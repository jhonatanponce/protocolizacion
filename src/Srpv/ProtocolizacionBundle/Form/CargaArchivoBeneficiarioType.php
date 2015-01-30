<?php

namespace Srpv\ProtocolizacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ViviendaType extends AbstractType
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
                
                ->add('archivo', 'file', array('label'  => 'Seleccione el Archivo a Cargar:',
                                            'required' => true))            
                ->add('Guardar', 'submit')
                
                ->getForm();
            
            
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'carga_archivo_beneficiario';
    }
}
