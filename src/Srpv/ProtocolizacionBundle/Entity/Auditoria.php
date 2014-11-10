<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auditoria
 *
 * @ORM\Table(name="AUDITORIA", indexes={@ORM\Index(name="IDX_EB89AA72E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class Auditoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="AUDITORIA_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCION", type="string", length=10, nullable=false)
     */
    private $accion;

    /**
     * @var string
     *
     * @ORM\Column(name="COLUMNA_AFECTADA", type="string", length=50, nullable=false)
     */
    private $columnaAfectada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=15, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="MAQUINA", type="string", length=100, nullable=false)
     */
    private $maquina;

    /**
     * @var string
     *
     * @ORM\Column(name="MODULO", type="string", length=100, nullable=false)
     */
    private $modulo;

    /**
     * @var string
     *
     * @ORM\Column(name="VALOR_NUEVO", type="string", length=300, nullable=false)
     */
    private $valorNuevo;

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
     * Set accion
     *
     * @param string $accion
     * @return Auditoria
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return string 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set columnaAfectada
     *
     * @param string $columnaAfectada
     * @return Auditoria
     */
    public function setColumnaAfectada($columnaAfectada)
    {
        $this->columnaAfectada = $columnaAfectada;

        return $this;
    }

    /**
     * Get columnaAfectada
     *
     * @return string 
     */
    public function getColumnaAfectada()
    {
        return $this->columnaAfectada;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Auditoria
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Auditoria
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set maquina
     *
     * @param string $maquina
     * @return Auditoria
     */
    public function setMaquina($maquina)
    {
        $this->maquina = $maquina;

        return $this;
    }

    /**
     * Get maquina
     *
     * @return string 
     */
    public function getMaquina()
    {
        return $this->maquina;
    }

    /**
     * Set modulo
     *
     * @param string $modulo
     * @return Auditoria
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    /**
     * Get modulo
     *
     * @return string 
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set valorNuevo
     *
     * @param string $valorNuevo
     * @return Auditoria
     */
    public function setValorNuevo($valorNuevo)
    {
        $this->valorNuevo = $valorNuevo;

        return $this;
    }

    /**
     * Get valorNuevo
     *
     * @return string 
     */
    public function getValorNuevo()
    {
        return $this->valorNuevo;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return Auditoria
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
