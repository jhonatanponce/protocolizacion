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
            ->add('nombre', 'text', array('label' => 'Nombre', 'required' => true))
            ->add('geoEstado', 'entity', array('label' => 'Estado','class'   => 'ComunesTablasBundle:GeoEstado','property'   => 'nombre','required' => true,'empty_value' => ''))
            ->add('geoMunicipio', 'entity', array('label' => 'Municipio','class'   => 'ComunesTablasBundle:GeoMunicipio','property'   => 'nombre','required' => true,'empty_value' => ''))
            ->add('geoParroquia', 'entity', array('label' => 'Parroquia','class'   => 'ComunesTablasBundle:GeoParroquia','property'   => 'nombre','required' => true,'empty_value' => ''))
            ->add('avCallEsqCarr', 'text', array('label' => 'Av/Calle/Esq/Carr','required' => true))
            ->add('urbanBarrio', 'text', array('label' => 'Urban/Barrio','required' => true))
            ->add('zona', 'text', array('label' => 'Zona','required' => true))
            ->add('descripcion', 'text', array('required' => true))
            ->add('totalViviendas', 'integer', array('required' => false))
            ->add('totalUnidades', 'integer', array('required' => false))
            ->add('totalViviendasProtocolizadas', 'integer', array('required' => false))
            ->add('linderoEste', 'text', array('required' => false))
            ->add('linderoNorte', 'text', array('required' => false))
            ->add('linderoOeste', 'text', array('required' => false))
            ->add('linderoSur', 'text', array('required' => false))
            ->add('coordenadas', 'text', array('required' => false))
            ->add('loteTerrenoMt2', 'integer', array('required' => true))
            ->add('fuenteFinanciamiento', 'entity', array('class'   => 'SrpvProtocolizacionBundle:FuenteFinanciamiento','property'   => 'nombre','required' => true,'empty_value' => ''))
            ->add('titularidadDelTerreno', 'choice', array('choices' => array('S' => 'Si', 'N' => 'No'),'required' => true,'empty_value' => ''))
            ->add('usuario')
            ->add('enteEjecutor')
            ->add('fuenteDatosEntrada')
            ->add('fechaActualizacion', 'date', array('required' => false))
            ->add('fechaCreacion', 'date', array('required' => false))
            ->add('fechaTransferencia', 'date', array('required' => false))
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
