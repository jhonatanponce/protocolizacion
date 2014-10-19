<?php

namespace Srpv\ProtocolizacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DesarrolloType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('avCallEsqCarr')
            ->add('coordenadas')
            ->add('descripcion')
            ->add('fechaActualizacion')
            ->add('fechaCreacion')
            ->add('fechaTransferencia')
            ->add('linderoEste')
            ->add('linderoNorte')
            ->add('linderoOeste')
            ->add('linderoSur')
            ->add('loteTerrenoMt2')
            ->add('nombre')
            ->add('titularidadDelTerreno')
            ->add('totalViviendas')
            ->add('totalViviendasProtocolizadas')
            ->add('urbanBarrio')
            ->add('zona')
            ->add('fuenteFinanciamiento')
            ->add('geoEstado')
            ->add('geoMunicipio')
            ->add('geoParroquia')
            ->add('usuario')
            ->add('enteEjecutor')
            ->add('fuenteDatosEntrada')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\Desarrollo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_desarrollo';
    }
}
