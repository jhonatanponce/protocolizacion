<?php

namespace Srpv\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Comunes\TablasBundle\Entity\Persona;



class OficinaType extends AbstractType
{
    public function __construct (Persona $personaIdJefe = NULL)
    {
        $this->personaIdJefe = $personaIdJefe;
    }    
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            //Datos de la persona     
            ->add('personaIdJefe','hidden', array('mapped' => false, 'data' => $this->personaIdJefe->getId(),)) 
             
            ->add('nombre_persona','text',array('label' => 'Nombres:',
                                        'mapped' => false,
                                        'max_length' => '100',
                                        'read_only' => true,
                                        'data' => $this->personaIdJefe->getPrimerNombre().' '.$this->personaIdJefe->getSegundoNombre()))
                
            ->add('apellido_persona','text',array('label' => 'Apellidos:',
                                           'mapped' => false, 
                                          'max_length' => '100',
                                          'read_only' => true,
                                          'data' => $this->personaIdJefe->getPrimerApellido().' '.$this->personaIdJefe->getSegundoApellido()))                
                
             //Datos de la persona      
                
            ->add('nombre','text',array('label'  => 'Nombre Oficina:',
                            'required' => true,
                            'attr' => array('rows' => '1', 
                                            'cols' => '100',
                                            'maxlength' => '100'))) 
                
            ->add('observaciones','text',array('label'  => 'Observaciones:',
                                'required' => true,
                                'attr' => array('rows' => '3', 
                                                'cols' => '200',
                                                'maxlength' => '200')))     
           
           
            ->add('geoEstado', 'entity', array('label' => 'Estado:',
                                                'class'   => 'ComunesTablasBundle:GeoEstado',
                                                'property'   => 'nombre',
                                                'required' => true,
                                                'empty_value' => 'Seleccione'))
                
            ->add('geoMunicipio', 'entity', array('label' => 'Municipio:',
                                                    'class'   => 'ComunesTablasBundle:GeoMunicipio',
                                                    'property'   => 'nombre',
                                                    'required' => true,
                                                    'empty_value' => 'Seleccione'))
            ->add('geoParroquia', 'entity', array('label' => 'Parroquia:',
                                                    'class'   => 'ComunesTablasBundle:GeoParroquia',
                                                    'property'   => 'nombre',
                                                    'required' => true,
                                                    'empty_value' => 'Seleccione'))
            ->add('estatus','choice', array('label'  => 'Estatus:',
                    'choices'   => array('S' => 'ACTIVA',
                                         'N' => 'INACTIVA'),
                    'required'  => true,))       
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srpv\ProtocolizacionBundle\Entity\Oficina'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oficina';
    }
}
