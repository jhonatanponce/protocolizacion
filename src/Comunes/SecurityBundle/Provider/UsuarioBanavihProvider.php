<?php
namespace Comunes\SecurityBundle\Provider;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Doctrine\ORM\EntityManager;

/** 
  * Este es el proveedor de instancias Usuario. 
  * Se tiene que aplicar el UserProviderInterface, 
  * Que requiere tres métodos: loadUserByUsername($username), 
  *                            refreshUser (User $user), 
  *                            supportsClass ($class). 
  * loadUserByUsername ($usuario) hace la carga real del usuario: 
  * Busca un usuario con el username dado en la forma que estime 
  * Apropiarse y devuelve una instancia de Usuario. 
  * Si el usuario no se puede encontrar, este método debe lanzar una UsernameNotFoundException. 
  * 
  * @ Author cnoda 
  */
class UsuarioBanavihProvider extends \Comunes\SecurityBundle\Entity\Usuario implements UserProviderInterface
{

    protected $em;
    
    /*Se toma del tipo de acceso que eligio el usuario al momento de hacer login */
    
    public function __construct (EntityManager $entityManager) {
        
        $this->em = $entityManager;
        
        $this->tipoUsuario = 3; //3
        
        $this->sysSistema = 4; //1
        
        $this->sysApp = 18;  //4  
        
    }

    /**
     * Carga un usuario con el username dado.
     *
     * Si el usuario no se puede encontrar, este método debe lanzar una 
     * UsernameNotFoundException
     * @throws UsernameNotFoundException if the user is not found
     * @param string $username The username
     *
     * @return UserInterface
     */
    
    public function loadUserByUsername($username)
    {
        
        $username = ucfirst($username);
        
        $q = $this->em->getRepository('ComunesSecurityBundle:Usuario')
            ->createQueryBuilder('u')
            ->select('u')
            ->leftJoin('u.usuarioRoles', 'ur') //usuario u left join usuario_has_rol ur
            ->leftJoin('ur.rol', 'r')// ur.usuario_id left join rol r
            ->where('u.usuario = :username AND 
                     u.sysSistema = :sysSistema AND 
                     u.genTipoUsuario = :genTipoUsuario ')
            ->setParameter('username', $username)
            ->setParameter('sysSistema', $this->sysSistema)
            ->setParameter('genTipoUsuario', $this->tipoUsuario)
            //->setParameter('sysApp', $this->sysApp)
            ->getQuery();
//AND 
//                     r.sysApp = :sysApp
        try {
            // The Query::getSingleResult() method throws an exception
            // if there is no record matching the criteria.
            
            $user = $q->execute();
            if(!$user)
                throw new UsernameNotFoundException;
            
        } catch (UsernameNotFoundException $e) {
            
            $message = sprintf(
                'No Existen el usuario: "%s".',
                $username
            );
            
            throw new UsernameNotFoundException($message, 0, $e);
        }

        return array_shift($user);
    }

    /**
     * Actualiza el usuario para la interfaz de la cuenta.
     *
     * Corresponde a la aplicación de su decisión de volver a cargar los datos de usuario 
     * De la base de datos, o si simplemente se funde el usuario pasado en el 
     * Mapa de la identidad de un gestor de la entidad.
     *
     * @throws UnsupportedUserException if the account is not supported
     * @param UserInterface $user
     *
     * @return UserInterface
     */
    function refreshUser(UserInterface $user) {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        }        
        return $user;
    }

    /**
     * Si este proveedor admite la clase de usuario dado
     *
     * @param string $class
     *
     * @return Boolean
     */
    function supportsClass($class) {
        return $class === 'Comunes\SecurityBundle\Entity\Usuario';
    }

}

?>
