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
            ->add('geoEstado', 'entity', array('label' => 'Estado','class'   => 'ComunesTablasBundle:GeoEstado','property'   => 'nombre','required' => true,'empty_value' => 'Seleccione Estado'))
            ->add('geoMunicipio', 'entity', array('label' => 'Municipio','class'   => 'ComunesTablasBundle:GeoMunicipio','property'   => 'nombre','required' => true,'empty_value' => 'Seleccione Municipio'))
            ->add('geoParroquia', 'entity', array('label' => 'Parroquia','class'   => 'ComunesTablasBundle:GeoParroquia','property'   => 'nombre','required' => true,'empty_value' => 'Seleccione Parroquia'))
            ->add('avCallEsqCarr', 'text', array('label' => 'Av. / Calle / Esq. / Carr','required' => true))
            ->add('urbanBarrio', 'text', array('label' => 'Urban. / Barrio','required' => true))
            ->add('zona', 'text', array('label' => 'Zona','required' => true))
            ->add('descripcion', 'text', array('label' => 'Descripción','required' => true))
            //->add('totalViviendas', 'integer', array('label' => 'Total Viviendas','required' => false))
            //->add('totalViviendasProtocolizadas', 'integer', array('label' => 'Total Viviendas Protocolizadas','required' => false))
            ->add('linderoEste', 'text', array('label' => 'Lindero Este','required' => false))
            ->add('linderoNorte', 'text', array('label' => 'Lindero Norte','required' => false))
            ->add('linderoOeste', 'text', array('label' => 'Lindero Oste','required' => false))
            ->add('linderoSur', 'text', array('label' => 'Lindero Sur','required' => false))
            ->add('coordenadas', 'text', array('label' => 'Coordenadas','required' => false))
            ->add('loteTerrenoMt2', 'integer', array('label' => 'Lote Terreno Mt2','required' => true))
            ->add('fuenteFinanciamiento', 'entity', array('label' => 'Fuente Financiamiento','class'   => 'SrpvProtocolizacionBundle:FuenteFinanciamiento','property'   => 'nombre','required' => true,'empty_value' => 'Seleccione Fuente Financiamiento'))
            ->add('titularidadDelTerreno', 'choice', array('label' => 'Titularidad Del Terreno','choices' => array('S' => 'Si', 'N' => 'No'),'required' => true,'empty_value' => 'Seleccione Titularidad Del Terreno'))
            ->add('enteEjecutor', 'entity', array('label' => 'Ente Ejecutor','class'   => 'SrpvProtocolizacionBundle:EnteEjecutor','property'   => 'nombre','required' => true,'empty_value' => 'Seleccione Ente Ejecutor'))
            ->add('fechaTransferencia','datetime',array('label' => 'Fecha Transferencia','widget' => 'single_text','format' => 'dd/MM/yyyy','required' => false));
            //->add('fechaTransferencia', 'text', array('label' => 'Fecha Transferencia','input'  => 'datetime','widget' => 'choice','empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Dia'),'required' => false))
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
