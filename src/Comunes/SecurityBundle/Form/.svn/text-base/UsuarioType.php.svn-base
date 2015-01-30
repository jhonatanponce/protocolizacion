<?php

namespace Comunes\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Comunes\TablasBundle\Entity\Persona;
use Comunes\SecurityBundle\Repository\SecurityRepository;

class UsuarioType extends AbstractType
{
    
    public function __construct (Persona $persona = NULL)
    {
        $this->persona = $persona;
    }    
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('persona_id','hidden', array('mapped' => false, 'data' => $this->persona->getId(),))                

            ->add('nombre','text',array('label' => 'Nombres:',
                                        'max_length' => '100',
                                        'read_only' => true,
                                        'data' => $this->persona->getPrimerNombre().' '.$this->persona->getSegundoNombre()))
                
            ->add('apellido','text',array('label' => 'Apellidos:',
                                          'max_length' => '100',
                                          'read_only' => true,
                                          'data' => $this->persona->getPrimerApellido().' '.$this->persona->getSegundoApellido()))                
                
            ->add('usuario','text',array('label' => 'Usuario:',
                                         'max_length' => '100',
                                         'read_only' => true,
                                         'data' => ($this->persona->getNacionalidad() ? 'V' : 'E').$this->persona->getCedula()))               
                
            ->add('clave', 'repeated', array('first_name'  => 'password',
                                             'max_length' => '12',
                                             'second_name' => 'confirm',
                                             'first_options'  => array('label' => 'Clave','required' => false),
                                             'second_options' => array('label' => 'Repetir Clave','required' => false),
                                             'type'        => 'password',
                                             'invalid_message' => 'Las Claves deben coincidir.',))
                
            ->add('cambiarClave','choice', array('label'  => 'Cambiar Clave:',
                                                 'max_length' => '12',
                                                 'choices'   => array('1' => 'SI',
                                                                      '0' => 'NO'),
                                                 'empty_value' => 'Seleccione')) 
                
            ->add('genTipoUsuario', 'entity', array('label' => 'Tipo Usuario:',
                                              'class' => 'ComunesSecurityBundle:GenTipoUsuario',
                                              'property' => 'nombre',
                                              'empty_value' => 'Seleccione'))                      
                
            ->add('cuentaHabilitada','choice', array('label'  => 'Cuenta Habilitada:',
                                                     'choices'   => array('1' => 'SI',
                                                                          '0' => 'NO'),
                                                     'required'  => true,
                                                     'empty_value' => 'Seleccione'))
                
            ->add('sysSistema', 'entity', array('label' => 'Sistema:',
                                                'class' => 'ComunesSecurityBundle:SysSistema',
                                                'property' => 'nombre',
                                                'empty_value' => 'Seleccione'))
                
            ->add('intentos','hidden',array('label' => 'Cantidad Intentos Fallidos:','data' => 0))
                
            ->add('genPregConfirmacion', 'entity', array('label' => 'Pregunta de Confirmación:',
                                                         'class' => 'ComunesSecurityBundle:GenPregConfirmacion',
                                                         'property' => 'nombre',
                                                         'empty_value' => 'Seleccione'))

            ->add('respuesta','text',array('label' => 'Respuesta:','max_length' => '100'))     

            ->add('fechaCaducidad','date',array('label' => 'Fec. Caducidad de la Clave:'))              
                
            ->add('organizacion', 'entity', array('label' => 'Organizacion:',
                                              'class' => 'ComunesSecurityBundle:Organizacion',
                                              'property' => 'nombre',))     
                
//            ->add('ultimoAcceso','date',array('label' => 'Último Acceso:'))     
                
//            ->add('geoEstado','entity', array('label'  => 'Estado: ',
//                                              'class' => 'ComunesTablasBundle:GeoEstado',
//                                              'property' => 'ID',
//                                              'property' => 'nombre',
//                                              'empty_value' => 'Seleccione'))
//
//            ->add('geoMunicipio','entity', array('label'  => 'Municipio: ',
//                                                 'class' => 'ComunesTablasBundle:GeoMunicipio',
//                                                 'property' => 'ID',
//                                                 'empty_value' => 'Seleccione',
//                                             ))
//
//            ->add('geoParroquia','entity', array('label'  => 'Parroquia: ',
//                                                 'class' => 'ComunesTablasBundle:GeoParroquia',
//                                                 'property' => 'id',
//                                                 'property' => 'nombre',
//                                                 'required' => true,
//                                                 'empty_value' => 'Seleccione',))               
//                
//            ->add('sector','text', array('label'  => 'Sector / Etapa: ',
//                                         'attr' => array('size' => '100',
//                                                         'maxlength' => '100')))     
//                
//            ->add('calle','text', array('label'  => 'Calle: ',
//                                         'attr' => array('size' => '100',
//                                                         'maxlength' => '100')))       
//                
//            ->add('puntoReferencia','text', array('label'  => 'PuntoReferencia: ',
//                                         'attr' => array('size' => '100',
//                                                         'maxlength' => '100')))    
//                
//            ->add('numCasaEdif','text', array('label'  => 'Casa - Edif: ',
//                                         'attr' => array('size' => '100',
//                                                         'maxlength' => '100')))               
                
            ->add('correo','email', array('label'  => 'Correo Electrónico: ',
                                          'attr' => array('size' => '40',
                                                         'maxlength' => '40')))  
                
            ->add('codigoTelefono','choice',array('label'  => 'Teléfono Habitación:',
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
                                                                    '0412' => '0412',
                                                                    '0414' => '0414',
                                                                    '0424' => '0424',
                                                                    '0426' => '0426',
                                                                    '0416' => '0416',
                                                                    '0295' => '0295',
                                                                    '0269' => '0269',
                                                                    '0268' => '0268',
                                                                    ),
                                                  'required' => false, 
                                                  'empty_value' => 'Seleccione'))       
                
            ->add('telefono','number', array('label'  => ' ',
                                             'attr' => array('size' => '7',
                                                         'maxlength' => '7')))    

            ->add('genBanco','entity', array('label'  => 'Banco: ',
                                             'class' => 'ComunesTablasBundle:GenBanco',
                                             'property' => 'ID',
                                             'property' => 'nombre',
                                             'required' => true,
                                             'empty_value' => 'Seleccione'))
  
            ->add('departamento', 'entity', array('label' => 'Departamento:',
                                              'class' => 'ComunesSecurityBundle:Departamento',
                                              'property' => 'nombre',
                                              'empty_value' => 'Seleccione'))   
                
            ->add('observaciones','textarea', array('label'  => 'Observaciones: ',
                                                    'attr' => array('rows' => '5', 'cols' => '100',
                                                                    'maxlength' => '255',),
                                                    'required' => false)) 
                
            ->add('roles','entity',array('label'  => 'Roles:',
                                         'mapped' => false,
                                         'multiple'  => true,
                                         'expanded' => true,
                                         'class' => 'ComunesSecurityBundle:Rol',
                                         'property' => 'nombre', 
                                         'query_builder' => function(SecurityRepository $er)
                                                            {return $er->getRolesBySysSistema(4);},
                                         'required' => true, 
                                         ))                 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Comunes\SecurityBundle\Entity\Usuario',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'usuario';
    }
}
