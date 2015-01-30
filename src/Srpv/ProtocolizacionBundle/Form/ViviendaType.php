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
            ->add('unidadHabitacional', 'entity', array('label' => 'Unidad Habitacional','class' => 'SrpvProtocolizacionBundle:UnidadHabitacional','property'   => 'nombre','required' => true,'empty_value' => 'Seleccione Nombre De Unidad'))
            ->add('tipoVivienda', 'entity', array('label' => 'Tipo Vivienda','class' => 'SrpvProtocolizacionBundle:TipoVivienda','property'   => 'nombre','required' => true,'empty_value' => 'Seleccione Tipo de Vivienda'))
            ->add('construccionMt2', 'text', array('label' => 'Construcción Mt2','required' => true))
            ->add('precioVivienda', 'integer', array('label' => 'Precio Vivienda','required' => true))
            ->add('nroPiso', 'text', array('label' => 'Nro. Piso','required' => true))
            ->add('nroVivienda', 'text', array('label' => 'Nro. Vivienda','required' => true))
            ->add('sala', 'choice', array('label' => 'Sala','choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('comedor', 'choice', array('label' => 'Comedor','choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('cocina', 'choice', array('label' => 'Cocina','choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('lavandero', 'choice', array('label' => 'Lavandero','choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('linderoEste', 'text', array('label' => 'Lindero Este','attr' => array('required' => false)))
            ->add('linderoNorte', 'text', array('label' => 'Lindero Norte','attr' => array('required' => false)))
            ->add('linderoOeste', 'text', array('label' => 'Lindero Oeste','attr' => array('required' => false)))
            ->add('linderoSur', 'text', array('label' => 'Lindero Sur','attr' => array('required' => false)))
            ->add('coordenadas', 'text', array('label' => 'Lindero Coordenadas','attr' => array('required' => false)))
            ->add('descripcionEstac', 'text', array('label' => 'Descripción Estacionamiento','required' => true))
            ->add('nroEstacionamientos', 'integer', array('label' => 'Nro. Estacionamientos','required' => true))
            ->add('nroBanos', 'integer', array('label' => 'Nro. Baños','required' => true))
            ->add('nroHabitaciones', 'integer', array('label' => 'Nro. Habitaciones','required' => true))
            
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\Vivienda'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_vivienda';
    }
}
