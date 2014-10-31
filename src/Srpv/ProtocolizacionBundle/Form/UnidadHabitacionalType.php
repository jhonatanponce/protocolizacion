<?php

namespace Srpv\ProtocolizacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UnidadHabitacionalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('desarrollo', 'entity', array('label' => 'Desarrollo','class'   => 'SrpvProtocolizacionBundle:Desarrollo','property'   => 'nombre','required' => true,'empty_value' => ''))
            ->add('nombre', 'text', array('label' => 'Nombre','required' => true))
            ->add('genTipoInmueble', 'entity', array('label' => 'Tipo Inmueble','class' => 'ComunesTablasBundle:GenTipoInmueble','property'   => 'nombre','required' => true,'empty_value' => ''))
            //->add('registroPublicoId', 'entity', array('label' => 'Registro Público','class'   => 'SrpvProtocolizacionBundle:RegistroPublico','property'   => 'nombre','required' => false,'empty_value' => ''))
            ->add('registroPublicoId', 'number', array('label' => 'Registro Público','required' => false))
            ->add('fechaRegistro', 'date', array('label' => 'Fecha Registro','required' => false))
            ->add('nroDocumento', 'text', array('label' => 'Nro. Documento','required' => false))
            ->add('tomo', 'text', array('label' => 'Tomo','required' => false))
            ->add('ano', 'number', array('label' => 'Año','required' => false))
            ->add('nroProtocolo', 'number', array('label' => 'Nro. Protocolo','required' => false))
            ->add('asientoRegistral', 'number', array('label' => 'Asiento Registral','required' => false))
            ->add('folioReal', 'number', array('label' => 'Folio Real','required' => false))
            ->add('nroMatricula', 'text', array('label' => 'Nro. Matrícula','required' => false))
            ->add('tipoDocumento', 'entity', array('label' => 'Tipo Documento','class'   => 'SrpvProtocolizacionBundle:TipoDocumento','property'   => 'nombre','required' => false,'empty_value' => ''))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_unidadhabitacional';
    }
}
