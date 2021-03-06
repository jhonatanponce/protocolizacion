<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroPublico
 *
 * @ORM\Table(name="REGISTRO_PUBLICO", indexes={@ORM\Index(name="IDX_390792926F3929D7", columns={"GEO_ESTADO_ID"}), @ORM\Index(name="IDX_390792927181F310", columns={"GEO_MUNICIPIO_ID"}), @ORM\Index(name="IDX_390792925D9234E7", columns={"GEO_PARROQUIA_ID"}), @ORM\Index(name="IDX_39079292E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class RegistroPublico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="REGISTRO_PUBLICO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=false)
     */
    private $nombre;

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

    public function __toString()
    {
        return $this->nombre;
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
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return RegistroPublico
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
     * @return RegistroPublico
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
     * @return RegistroPublico
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
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return RegistroPublico
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
     * @return RegistroPublico
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
     * @return RegistroPublico
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
     * @return RegistroPublico
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
