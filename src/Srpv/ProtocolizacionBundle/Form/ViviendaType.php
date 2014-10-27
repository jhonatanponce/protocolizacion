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
            ->add('construccionMt2')
            ->add('nroPiso')
            ->add('nroVivienda')
            ->add('sala', 'choice', array( 'choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('comedor', 'choice', array( 'choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('cocina', 'choice', array( 'choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('lavandero', 'choice', array( 'choices' => array('s' => 'SI','n' => 'No'),'multiple' => false,'expanded' => true,'required' => true))
            ->add('linderoEste', 'text', array('attr' => array('required' => false)))
            ->add('linderoNorte', 'text', array('attr' => array('required' => false)))
            ->add('linderoOeste', 'text', array('attr' => array('required' => false)))
            ->add('linderoSur', 'text', array('attr' => array('required' => false)))
            ->add('coordenadas', 'text', array('attr' => array('required' => false)))
            ->add('precioVivienda', 'integer', array('attr' => array('required' => true)))
            ->add('descripcionEstac', 'text', array('label' => 'Descripcion estacionamiento','attr' => array('required' => true)))
            ->add('nroEstacionamientos', 'integer', array('attr' => array('required' => true)))
            ->add('nroBanos', 'integer', array('attr' => array('required' => true)))
            ->add('nroHabitaciones', 'integer', array('attr' => array('required' => true)))
            ->add('fechaActualizacion')
            ->add('fechaCreacion')
            ->add('tipoVivienda')
            ->add('fuenteDatosEntrada')
            ->add('usuario')
            ->add('unidadHabitacional')
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
