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
            ->add('comedor')
            ->add('construccionMt2')
            ->add('coordenadas')
            ->add('descripcionEstac')
            ->add('fechaActualizacion')
            ->add('fechaCreacion')
            ->add('lavandero')
            ->add('linderoEste')
            ->add('linderoNorte')
            ->add('linderoOeste')
            ->add('linderoSur')
            ->add('nroBanos')
            ->add('nroEstacionamientos')
            ->add('nroHabitaciones')
            ->add('nroPiso')
            ->add('nroVivienda')
            ->add('precioVivienda')
            ->add('sala')
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
