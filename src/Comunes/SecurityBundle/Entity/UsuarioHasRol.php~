<?php

namespace Comunes\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioHasRol
 *
 * @ORM\Table(name="USUARIO_HAS_ROL", indexes={@ORM\Index(name="IDX_791A4141CC0F380A", columns={"ROL_ID"}), @ORM\Index(name="IDX_791A4141E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class UsuarioHasRol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="USUARIO_HAS_ROL_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ASIGNACION", type="date", nullable=true)
     */
    private $fechaAsignacion;

    /**
     * @var \Comunes\SecurityBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ROL_ID", referencedColumnName="id")
     * })
     */
    private $rol;

    /**
     * @var \Comunes\SecurityBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USUARIO_ID", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set fechaAsignacion
     *
     * @param \DateTime $fechaAsignacion
     * @return UsuarioHasRol
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;

        return $this;
    }

    /**
     * Get fechaAsignacion
     *
     * @return \DateTime 
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    /**
     * Set rol
     *
     * @param \Comunes\SecurityBundle\Entity\Rol $rol
     * @return UsuarioHasRol
     */
    public function setRol(\Comunes\SecurityBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Comunes\SecurityBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return UsuarioHasRol
     */
    public function setUsuario(\Comunes\SecurityBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Comunes\SecurityBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
