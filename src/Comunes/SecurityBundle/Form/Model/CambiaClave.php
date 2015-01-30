<?php
namespace Comunes\SecurityBundle\Form\Model;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Validator\Constraints as Assert;

class CambiaClave
{
    /**
     * @SecurityAssert\UserPassword(
     *     message = "Valor actual de la clave errado. Verifique"
     * )
     */
     public $oldPassword;

    /**
     * @Assert\Length(
     *     min = 8,
     *     minMessage = "La Clave debe tener como minimo 8 caracteres. Verifique"
     * )
     * 
     * @Assert\Regex(
     *     pattern="/[\s_~\-!@#\$%\^&\*\(\)\?¿=¡\.\{\}\\]/",
     *     match=false,
     *     message="La Clave No puede contener caracteres especiales ni espacios"
     * )
     */
     public $newPassword;
}
?>