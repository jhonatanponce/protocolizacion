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
            ->add('nombre', 'text', array('attr' => array('required' => true)))
            ->add('geoEstado', 'entity', array('class'   => 'ComunesTablasBundle:GeoEstado','property'   => 'nombre','attr' => array('required' => true),'empty_value' => ''))
            ->add('geoMunicipio', 'entity', array('class'   => 'ComunesTablasBundle:GeoMunicipio','property'   => 'nombre','attr' => array('required' => true),'empty_value' => ''))
            ->add('geoParroquia', 'entity', array('class'   => 'ComunesTablasBundle:GeoParroquia','property'   => 'nombre','attr' => array('required' => true),'empty_value' => ''))
            ->add('avCallEsqCarr', 'text', array('attr' => array('required' => true)))
            ->add('urbanBarrio', 'text', array('attr' => array('required' => true)))
            ->add('zona', 'text', array('attr' => array('required' => true)))
            ->add('descripcion', 'text', array('attr' => array('required' => true)))
            ->add('totalViviendas', 'integer', array('attr' => array('required' => false)))
            ->add('totalViviendasProtocolizadas', 'integer', array('attr' => array('required' => false)))
            ->add('linderoEste', 'text', array('attr' => array('required' => false)))
            ->add('linderoNorte', 'text', array('attr' => array('required' => false)))
            ->add('linderoOeste', 'text', array('attr' => array('required' => false)))
            ->add('linderoSur', 'text', array('attr' => array('required' => false)))
            ->add('coordenadas', 'integer', array('attr' => array('required' => false)))
            ->add('loteTerrenoMt2', 'integer', array('attr' => array('required' => true)))
            ->add('fuenteFinanciamiento', 'entity', array('class'   => 'SrpvProtocolizacionBundle:FuenteFinanciamiento','property'   => 'nombre','attr' => array('required' => true),'empty_value' => ''))
            ->add('titularidadDelTerreno', 'choice', array('choices' => array('S' => 'Si', 'N' => 'No'),'attr' => array('required' => true),'empty_value' => ''))
            ->add('usuario')
            ->add('enteEjecutor')
            ->add('fuenteDatosEntrada')
            ->add('fechaActualizacion', 'date', array('attr' => array('required' => false)))
            ->add('fechaCreacion', 'date', array('attr' => array('required' => false)))
            ->add('fechaTransferencia', 'date', array('attr' => array('required' => false)))
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
