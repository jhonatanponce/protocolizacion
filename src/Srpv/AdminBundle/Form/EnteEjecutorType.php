<?php

namespace Srpv\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnteEjecutorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('nombre','text',array('label'  => 'Nombre:',
                                   'required' => true,
                                   'attr' => array('rows' => '1', 
                                                   'cols' => '100',
                                                   'maxlength' => '100'))) 
            ->add('observaciones','text',array('label'  => 'Observaciones:',
                                   'required' => true,
                                   'attr' => array('rows' => '2', 
                                                   'cols' => '100',
                                                   'maxlength' => '200')))    
            ->add('estatus','choice', array('label'  => 'Estatus:',
                                'choices'   => array('S' => 'ACTIVO',
                                                     'N' => 'INACTIVO'),
                                'required'  => true,)) 
            //->add('fechaActualizacion')
            //->add('fechaCreacion')
            //->add('usuario')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\EnteEjecutor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'srpv_protocolizacionbundle_enteejecutor';
    }
}
