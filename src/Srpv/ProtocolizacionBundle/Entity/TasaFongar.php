<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TasaFongar
 *
 * @ORM\Table(name="TASA_FONGAR", indexes={@ORM\Index(name="IDX_C8568974E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class TasaFongar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="TASA_FONGAR_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTATUS", type="string", length=1, nullable=true)
     */
    private $estatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ACTUALIZACION", type="date", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="PORCENTAJE_INICIAL", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $porcentajeInicial;

    /**
     * @var string
     *
     * @ORM\Column(name="PORCENTAJE_RENOVACION", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $porcentajeRenovacion;

    /**
     * @var \Comunes\SecurityBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
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
     * Set estatus
     *
     * @param string $estatus
     * @return TasaFongar
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return TasaFongar
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime 
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return TasaFongar
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return TasaFongar
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set porcentajeInicial
     *
     * @param string $porcentajeInicial
     * @return TasaFongar
     */
    public function setPorcentajeInicial($porcentajeInicial)
    {
        $this->porcentajeInicial = $porcentajeInicial;

        return $this;
    }

    /**
     * Get porcentajeInicial
     *
     * @return string 
     */
    public function getPorcentajeInicial()
    {
        return $this->porcentajeInicial;
    }

    /**
     * Set porcentajeRenovacion
     *
     * @param string $porcentajeRenovacion
     * @return TasaFongar
     */
    public function setPorcentajeRenovacion($porcentajeRenovacion)
    {
        $this->porcentajeRenovacion = $porcentajeRenovacion;

        return $this;
    }

    /**
     * Get porcentajeRenovacion
     *
     * @return string 
     */
    public function getPorcentajeRenovacion()
    {
        return $this->porcentajeRenovacion;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return TasaFongar
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
