<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oficina
 *
 * @ORM\Table(name="OFICINA", indexes={@ORM\Index(name="IDX_3A065BB66F3929D7", columns={"GEO_ESTADO_ID"}), @ORM\Index(name="IDX_3A065BB67181F310", columns={"GEO_MUNICIPIO_ID"}), @ORM\Index(name="IDX_3A065BB65D9234E7", columns={"GEO_PARROQUIA_ID"}), @ORM\Index(name="IDX_3A065BB6E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class Oficina
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="OFICINA_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERSONA_ID_JEFE", type="integer", nullable=false)
     */
    private $personaIdJefe;

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
     * @var \Comunes\TablasBundle\Entity\GeoMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_MUNICIPIO_ID", referencedColumnName="id")
     * })
     */
    private $geoMunicipio;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoParroquia
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoParroquia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_PARROQUIA_ID", referencedColumnName="id")
     * })
     */
    private $geoParroquia;

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
     * Set estatus
     *
     * @param string $estatus
     * @return Oficina
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
     * @return Oficina
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
     * @return Oficina
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
     * Set nombre
     *
     * @param string $nombre
     * @return Oficina
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return Oficina
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
     * Set personaIdJefe
     *
     * @param integer $personaIdJefe
     * @return Oficina
     */
    public function setPersonaIdJefe($personaIdJefe)
    {
        $this->personaIdJefe = $personaIdJefe;

        return $this;
    }

    /**
     * Get personaIdJefe
     *
     * @return integer 
     */
    public function getPersonaIdJefe()
    {
        return $this->personaIdJefe;
    }

    /**
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return Oficina
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
     * Set geoMunicipio
     *
     * @param \Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipio
     * @return Oficina
     */
    public function setGeoMunicipio(\Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipio = null)
    {
        $this->geoMunicipio = $geoMunicipio;

        return $this;
    }

    /**
     * Get geoMunicipio
     *
     * @return \Comunes\TablasBundle\Entity\GeoMunicipio 
     */
    public function getGeoMunicipio()
    {
        return $this->geoMunicipio;
    }

    /**
     * Set geoParroquia
     *
     * @param \Comunes\TablasBundle\Entity\GeoParroquia $geoParroquia
     * @return Oficina
     */
    public function setGeoParroquia(\Comunes\TablasBundle\Entity\GeoParroquia $geoParroquia = null)
    {
        $this->geoParroquia = $geoParroquia;

        return $this;
    }

    /**
     * Get geoParroquia
     *
     * @return \Comunes\TablasBundle\Entity\GeoParroquia 
     */
    public function getGeoParroquia()
    {
        return $this->geoParroquia;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return Oficina
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
