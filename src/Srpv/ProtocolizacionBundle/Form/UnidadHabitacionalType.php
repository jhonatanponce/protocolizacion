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
            ->add('genTipoInmueble', 'entity', array('class'   => 'ComunesTablasBundle:GenTipoInmueble','property'   => 'nombre','attr' => array('required' => true),'empty_value' => ''))
            ->add('totalUnidades', 'integer', array('attr' => array('required' => false)))
            ->add('nombre', 'text', array('attr' => array('required' => true)))
            ->add('desarrollo', 'entity', array('class'   => 'SrpvProtocolizacionBundle:Desarrollo','property'   => 'nombre','attr' => array('required' => true),'empty_value' => ''))
            ->add('fechaCreacion')
            ->add('fechaActualizacion')
            ->add('registroPublicoId', 'integer', array('attr' => array('required' => false)))
            ->add('fechaRegistro')
            ->add('nroDocumento')
            ->add('tomo')
            ->add('ano')
            ->add('nroProtocolo')
            ->add('asientoRegistral')
            ->add('folioReal')
            ->add('nroMatricula')
            ->add('fuenteDatosEntrada')
            ->add('tipoDocumento')
            ->add('usuario')
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
