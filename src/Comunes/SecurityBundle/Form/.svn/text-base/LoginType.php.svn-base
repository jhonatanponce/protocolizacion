<?php

namespace Comunes\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\True;

class LoginType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            ->add('_usinsajo','text',array('label'  => 'Usuario:',
                                           'required' => true,
                                           'attr' => array('size' => '100', 
                                                           'maxlength' => '100')))       
                
            ->add('_psinsajo','password', array('label'  => 'Clave:',
                                                'required'  => true,
                                                'attr' => array('size' => 10,
                                                                'maxlength' => 10
                                                    )))
            ->add('captcha', 'captcha', array('label'  => 'Captcha:', 
                  'background_color' => [255,255,255],
                  'width' => 150,
                  'height' => 50,
                  'length' => 6,))           
                
//            ->add('refresh', 'button', array('label' => ' ','attr' => array('class' => 'btn btn-success glyphicon glyphicon-refresh')))                
   
            ->add('Conectarse', 'button', array('label' => 'Ingresar',
                                'attr' => array('class' => 'btn btn-primary',
                                                'onclick' => 'javascript:encriptar(document.getElementById("login__psinsajo"),document.getElementById("login__psinsajo"),document.getElementById("login__usinsajo"))')))
                
            ->add('reset', 'reset', array('label' => 'Limpiar'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\Comunes\SecurityBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'login';
    }
}