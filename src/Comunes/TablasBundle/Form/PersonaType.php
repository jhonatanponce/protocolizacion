<?php

namespace Comunes\TablasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Comunes\SecurityBundle\Repository\SecurityRepository;

class PersonaType extends AbstractType
{
    
    public function __construct ($cedula = NULL, $nac = NULL)
    {
        $this->cedula = $cedula;
        
        $this->nac = $nac;
    }     
    
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nacionalidad', 'choice', array('label' => 'Cédula Identidad',
                                                  'data' => $this->nac,
                                                  'read_only' => true,
                                                  'choices' => array('1' => 'V', 
                                                                     '0' => 'E')))    

            ->add('cedula','number', array('label' => 'Cédula Identidad',
                                           'data' => $this->cedula,
                                           'read_only' => true,
                                           'attr' => array('size' => '8',
                                                           'maxlength' => '8')))
            ->add('primerNombre','text',array('label' => 'Primer Nombre:',
                                        'max_length' => '50',
                                        'read_only' => true,))
                
            ->add('segundoNombre','text',array('label' => 'Segundo Nombre:',
                                        'max_length' => '50',
                                        'read_only' => true,))
                
            ->add('primerApellido','text',array('label' => 'Primer Apellido:',
                                        'max_length' => '50',
                                        'read_only' => true,))
                
            ->add('segundoApellido','text',array('label' => 'Segundo Apellido:',
                                        'max_length' => '50',
                                        'read_only' => true,))

//            ->add('fechaNacimiento','date',array('label' => 'Fecha Nacimiento:'))
                
            ->add('genEdoCivil', 'entity', array('label' => 'Estado Civil:',
                                                            'class' => 'ComunesTablasBundle:GenEdoCivil',
                                                            'property' => 'nombre',
                                                            'empty_value' => 'Seleccione')) 
                
            ->add('genSexo', 'entity', array('label' => 'Género:',
                                                        'class' => 'ComunesTablasBundle:GenSexo',
                                                        'property' => 'nombre',
                                                        'empty_value' => 'Seleccione')) 
                
            ->add('codigoHab','choice',array('label'  => 'Teléfono Habitación:',
                                                  'choices' => array('0212' => '0212',
                                                                    '0234' => '0234',
                                                                    '0235' => '0235',
                                                                    '0237' => '0237',
                                                                    '0238' => '0238',
                                                                    '0239' => '0239',
                                                                    '0240' => '0240',
                                                                    '0241' => '0241',
                                                                    '0242' => '0242',
                                                                    '0243' => '0243',
                                                                    '0244' => '0244',
                                                                    '0245' => '0245',
                                                                    '0246' => '0246',
                                                                    '0247' => '0247',
                                                                    '0248' => '0248',
                                                                    '0251' => '0251',
                                                                    '0252' => '0252',
                                                                    '0253' => '0253',
                                                                    '0254' => '0254',
                                                                    '0255' => '0255',
                                                                    '0256' => '0256',
                                                                    '0257' => '0257',
                                                                    '0258' => '0258',
                                                                    '0261' => '0261',
                                                                    '0262' => '0262',
                                                                    '0263' => '0263',
                                                                    '0264' => '0264',
                                                                    '0265' => '0265',
                                                                    '0266' => '0266',
                                                                    '0267' => '0267',
                                                                    '0271' => '0271',
                                                                    '0272' => '0272',
                                                                    '0273' => '0273',
                                                                    '0274' => '0274',
                                                                    '0275' => '0275',
                                                                    '0276' => '0276',
                                                                    '0277' => '0277',
                                                                    '0278' => '0278',
                                                                    '0281' => '0281',
                                                                    '0282' => '0282',
                                                                    '0283' => '0283',
                                                                    '0284' => '0284',
                                                                    '0285' => '0285',
                                                                    '0286' => '0286',
                                                                    '0287' => '0287',
                                                                    '0288' => '0288',
                                                                    '0289' => '0289',
                                                                    '0291' => '0291',
                                                                    '0292' => '0292',
                                                                    '0293' => '0293',
                                                                    '0294' => '0294',
                                                                    '0295' => '0295',
                                                                    '0269' => '0269',
                                                                    '0268' => '0268',
                                                                    ),
                                                  'required' => false, 
                                                  'empty_value' => 'Seleccione'))                
            ->add('telefonoHab','number', array('label'  => ' ',
                                                'attr' => array('size' => '7',
                                                         'maxlength' => '7')))    
                
            ->add('codigoMovil','choice',array('label'  => 'Teléfono Móvil:',
                                                  'choices' => array(
                                                                    '0412' => '0412',
                                                                    '0414' => '0414',
                                                                    '0424' => '0424',
                                                                    '0426' => '0426',
                                                                    '0416' => '0416',
                                                                    ),
                                                  'required' => false, 
                                                  'empty_value' => 'Seleccione')) 
                
            ->add('telefonoMovil','number', array('label'  => ' ',
                                             'attr' => array('size' => '7',
                                                         'maxlength' => '7')))    

            ->add('correoPrincipal','email', array('label'  => 'Correo Principal: ',
                                          'attr' => array('size' => '60',
                                                         'maxlength' => '60'))) 
                
            ->add('correoAlterno','email', array('label'  => 'Correo Alterno: ',
                                          'attr' => array('size' => '60',
                                                         'maxlength' => '60'))) 

            ->add('sysSistemaId','hidden',array('data' => 4))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Comunes\TablasBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'persona';
    }
}
