<?php

namespace Comunes\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * Rol
 *
 * @ORM\Table(name="ROL", indexes={@ORM\Index(name="IDX_98F27DBD99C94272", columns={"GEN_TIPO_USUARIO_ID"}), @ORM\Index(name="IDX_98F27DBD619CCE83", columns={"SYS_APP_ID"}), @ORM\Index(name="IDX_98F27DBD63F89AA7", columns={"SYS_SISTEMA_ID"})})
 * @ORM\Entity
 */
class Rol implements RoleInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ROL_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=40, nullable=true)
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Comunes\SecurityBundle\Entity\UsuarioHasRol", mappedBy="rol")
     */
    private $usuarioRoles;

    /**
     * @var \Comunes\SecurityBundle\Entity\GenTipoUsuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\GenTipoUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_TIPO_USUARIO_ID", referencedColumnName="id")
     * })
     */
    private $genTipoUsuario;

    /**
     * @var \Comunes\SecurityBundle\Entity\SysApp
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\SysApp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SYS_APP_ID", referencedColumnName="id")
     * })
     */
    private $sysApp;

    /**
     * @var \Comunes\SecurityBundle\Entity\SysSistema
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\SysSistema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SYS_SISTEMA_ID", referencedColumnName="id")
     * })
     */
    private $sysSistema;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarioRoles = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Rol
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Rol
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add usuarioRoles
     *
     * @param \Comunes\SecurityBundle\Entity\UsuarioHasRol $usuarioRoles
     * @return Rol
     */
    public function addUsuarioRole(\Comunes\SecurityBundle\Entity\UsuarioHasRol $usuarioRoles)
    {
        $this->usuarioRoles[] = $usuarioRoles;

        return $this;
    }

    /**
     * Remove usuarioRoles
     *
     * @param \Comunes\SecurityBundle\Entity\UsuarioHasRol $usuarioRoles
     */
    public function removeUsuarioRole(\Comunes\SecurityBundle\Entity\UsuarioHasRol $usuarioRoles)
    {
        $this->usuarioRoles->removeElement($usuarioRoles);
    }

    /**
     * Get usuarioRoles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarioRoles()
    {
        return $this->usuarioRoles;
    }

    /**
     * Set genTipoUsuario
     *
     * @param \Comunes\SecurityBundle\Entity\GenTipoUsuario $genTipoUsuario
     * @return Rol
     */
    public function setGenTipoUsuario(\Comunes\SecurityBundle\Entity\GenTipoUsuario $genTipoUsuario = null)
    {
        $this->genTipoUsuario = $genTipoUsuario;

        return $this;
    }

    /**
     * Get genTipoUsuario
     *
     * @return \Comunes\SecurityBundle\Entity\GenTipoUsuario 
     */
    public function getGenTipoUsuario()
    {
        return $this->genTipoUsuario;
    }

    /**
     * Set sysApp
     *
     * @param \Comunes\SecurityBundle\Entity\SysApp $sysApp
     * @return Rol
     */
    public function setSysApp(\Comunes\SecurityBundle\Entity\SysApp $sysApp = null)
    {
        $this->sysApp = $sysApp;

        return $this;
    }

    /**
     * Get sysApp
     *
     * @return \Comunes\SecurityBundle\Entity\SysApp 
     */
    public function getSysApp()
    {
        return $this->sysApp;
    }

    /**
     * Set sysSistema
     *
     * @param \Comunes\SecurityBundle\Entity\SysSistema $sysSistema
     * @return Rol
     */
    public function setSysSistema(\Comunes\SecurityBundle\Entity\SysSistema $sysSistema = null)
    {
        $this->sysSistema = $sysSistema;

        return $this;
    }

    /**
     * Get sysSistema
     *
     * @return \Comunes\SecurityBundle\Entity\SysSistema 
     */
    public function getSysSistema()
    {
        return $this->sysSistema;
    }

    public function getRole() {
       return $this; 
    }
}
