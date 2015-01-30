<?php

namespace Comunes\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OpcionMenuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('label' => 'Nombre:',
                                        'max_length' => '100',))
                
            ->add('url','text',array('label' => 'Nombre de la ruta en routing.yml:',
                                        'max_length' => '100',))
                
            ->add('sysApp', 'entity', array('label' => 'Aplicación:',
                                              'class' => 'ComunesSecurityBundle:SysApp',
                                              'property' => 'nombre',
                                              'empty_value' => 'Seleccione'))      
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Comunes\SecurityBundle\Entity\OpcionMenu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'comunes_securitybundle_opcionmenu';
    }
}
