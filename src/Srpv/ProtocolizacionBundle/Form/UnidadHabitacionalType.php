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
            ->add('ano')
            ->add('asientoRegistral')
            ->add('fechaActualizacion')
            ->add('fechaCreacion')
            ->add('fechaRegistro')
            ->add('folioReal')
            ->add('nombre')
            ->add('nroDocumento')
            ->add('nroMatricula')
            ->add('nroProtocolo')
            ->add('registroPublicoId')
            ->add('tomo')
            ->add('totalUnidades')
            ->add('fuenteDatosEntrada')
            ->add('desarrollo')
            ->add('genTipoInmueble')
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
