<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApoderadoObservador
 *
 * @ORM\Table(name="APODERADO_OBSERVADOR", indexes={@ORM\Index(name="IDX_1B52E0CC78F5C1EC", columns={"PRESONA_ID"}), @ORM\Index(name="IDX_1B52E0CC6F3929D7", columns={"GEO_ESTADO_ID"}), @ORM\Index(name="IDX_1B52E0CCE8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class ApoderadoObservador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="APODERADO_OBSERVADOR_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="APODERADO", type="string", length=1, nullable=true)
     */
    private $apoderado;

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
     * @var \Comunes\TablasBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PRESONA_ID", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoEstado
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_ESTADO_ID", referencedColumnName="id")
     * })
     */
    private $geoEstado;

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
     * Set apoderado
     *
     * @param string $apoderado
     * @return ApoderadoObservador
     */
    public function setApoderado($apoderado)
    {
        $this->apoderado = $apoderado;

        return $this;
    }

    /**
     * Get apoderado
     *
     * @return string 
     */
    public function getApoderado()
    {
        return $this->apoderado;
    }

    /**
     * Set estatus
     *
     * @param string $estatus
     * @return ApoderadoObservador
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
     * @return ApoderadoObservador
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
     * @return ApoderadoObservador
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
     * @return ApoderadoObservador
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
     * Set persona
     *
     * @param \Comunes\TablasBundle\Entity\Persona $persona
     * @return ApoderadoObservador
     */
    public function setPersona(\Comunes\TablasBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Comunes\TablasBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return ApoderadoObservador
     */
    public function setGeoEstado(\Comunes\TablasBundle\Entity\GeoEstado $geoEstado = null)
    {
        $this->geoEstado = $geoEstado;

        return $this;
    }

    /**
     * Get geoEstado
     *
     * @return \Comunes\TablasBundle\Entity\GeoEstado 
     */
    public function getGeoEstado()
    {
        return $this->geoEstado;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return ApoderadoObservador
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
