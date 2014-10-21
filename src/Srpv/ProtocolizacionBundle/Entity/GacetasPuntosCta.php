<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GacetasPuntosCta
 *
 * @ORM\Table(name="GACETAS_PUNTOS_CTA")
 * @ORM\Entity
 */
class GacetasPuntosCta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GACETAS_PUNTOS_CTA_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=300, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTATUS", type="string", length=1, nullable=false)
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
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_PUBLICACION", type="date", nullable=false)
     */
    private $fechaPublicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_DECRETO", type="integer", nullable=true)
     */
    private $nroDecreto;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_GACETA", type="integer", nullable=true)
     */
    private $nroGaceta;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_PTO_CTA", type="integer", nullable=true)
     */
    private $nroPtoCta;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=200, nullable=true)
     */
    private $observaciones;



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
     * @return GacetasPuntosCta
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
     * Set estatus
     *
     * @param string $estatus
     * @return GacetasPuntosCta
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
     * @return GacetasPuntosCta
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
     * @return GacetasPuntosCta
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
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return GacetasPuntosCta
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set nroDecreto
     *
     * @param integer $nroDecreto
     * @return GacetasPuntosCta
     */
    public function setNroDecreto($nroDecreto)
    {
        $this->nroDecreto = $nroDecreto;

        return $this;
    }

    /**
     * Get nroDecreto
     *
     * @return integer 
     */
    public function getNroDecreto()
    {
        return $this->nroDecreto;
    }

    /**
     * Set nroGaceta
     *
     * @param integer $nroGaceta
     * @return GacetasPuntosCta
     */
    public function setNroGaceta($nroGaceta)
    {
        $this->nroGaceta = $nroGaceta;

        return $this;
    }

    /**
     * Get nroGaceta
     *
     * @return integer 
     */
    public function getNroGaceta()
    {
        return $this->nroGaceta;
    }

    /**
     * Set nroPtoCta
     *
     * @param integer $nroPtoCta
     * @return GacetasPuntosCta
     */
    public function setNroPtoCta($nroPtoCta)
    {
        $this->nroPtoCta = $nroPtoCta;

        return $this;
    }

    /**
     * Get nroPtoCta
     *
     * @return integer 
     */
    public function getNroPtoCta()
    {
        return $this->nroPtoCta;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return GacetasPuntosCta
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
}
