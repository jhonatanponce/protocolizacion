<?php
namespace Comunes\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CambiaClaveAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('newPassword', 'repeated', array(
                      'type' => 'password',
                      'invalid_message' => 'La Confirmación de Clave no es correcta. Verifique',
                      'required' => true,
                      'first_options'  => array('label' => 'Clave Nueva'),
                      'second_options' => array('label' => 'Confirme Clave Nueva')));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Comunes\SecurityBundle\Form\Model\CambiaClaveAdmin',
        ));
    }

    public function getName()
    {
        return 'change_passwd';
    }
}
?>
