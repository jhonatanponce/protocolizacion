<?php

namespace Comunes\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Comunes\SecurityBundle\Repository\SecurityRepository;

class RolType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('label' => 'Nombre del Rol',
                                        'max_length' => '40',))
                
            ->add('genTipoUsuario', 'entity', array('label' => 'Tipo Usuario:',
                                              'class' => 'ComunesSecurityBundle:GenTipoUsuario',
                                              'property' => 'nombre',
                                              'empty_value' => 'Seleccione'))  
                
            ->add('sysSistema', 'entity', array('label' => 'Sistema:',
                                              'class' => 'ComunesSecurityBundle:SysSistema',
                                              'property' => 'nombre',
                                              'empty_value' => 'Seleccione'))  
                
            ->add('sysApp', 'entity', array('label' => 'Aplicaciones:',
                                              'class' => 'ComunesSecurityBundle:SysApp',
                                              'property' => 'nombre',
                                              'query_builder' => function(SecurityRepository $er)
                                                            {return $er->getAppBySysSistema(4);},                
                                              'empty_value' => 'Seleccione'))  
                
            ->add('descripcion','textarea', array('label'  => 'Descripcion: ',
                                                 'attr' => array('rows' => '5', 'cols' => '100',
                                                                 'maxlength' => '255',),
                                                 'required' => false))
                
            ->add('opciones', 'entity', array('label' => 'Opciones:',
                                              'mapped' => false,
                                              'class' => 'ComunesSecurityBundle:OpcionMenu',
                                              'property' => 'nombre',
                                              'multiple' => true,
                                              'expanded' => true,
                                              'query_builder' => function(SecurityRepository $er)
                                                            {return $er->getOpcionesBySysApp(18);},                
                                              'empty_value' => 'Seleccione'))  
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Comunes\SecurityBundle\Entity\Rol'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rol';
    }
}
