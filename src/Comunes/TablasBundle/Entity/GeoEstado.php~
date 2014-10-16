<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeoEstado
 *
 * @ORM\Table(name="GEO_ESTADO", indexes={@ORM\Index(name="IDX_49AEFC3EEB6093A0", columns={"GEO_ZONA_ID"})})
 * @ORM\Entity
 */
class GeoEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEO_ESTADO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_PAIS", type="string", length=10, nullable=true)
     */
    private $codigoPais;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODIGO_REGION", type="integer", nullable=true)
     */
    private $codigoRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_CAPITAL", type="string", length=50, nullable=true)
     */
    private $nombreCapital;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_REGION", type="string", length=50, nullable=true)
     */
    private $nombreRegion;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoZona
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoZona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_ZONA_ID", referencedColumnName="id")
     * })
     */
    private $geoZona;



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
     * Set codigoPais
     *
     * @param string $codigoPais
     * @return GeoEstado
     */
    public function setCodigoPais($codigoPais)
    {
        $this->codigoPais = $codigoPais;

        return $this;
    }

    /**
     * Get codigoPais
     *
     * @return string 
     */
    public function getCodigoPais()
    {
        return $this->codigoPais;
    }

    /**
     * Set codigoRegion
     *
     * @param integer $codigoRegion
     * @return GeoEstado
     */
    public function setCodigoRegion($codigoRegion)
    {
        $this->codigoRegion = $codigoRegion;

        return $this;
    }

    /**
     * Get codigoRegion
     *
     * @return integer 
     */
    public function getCodigoRegion()
    {
        return $this->codigoRegion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return GeoEstado
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
     * Set nombreCapital
     *
     * @param string $nombreCapital
     * @return GeoEstado
     */
    public function setNombreCapital($nombreCapital)
    {
        $this->nombreCapital = $nombreCapital;

        return $this;
    }

    /**
     * Get nombreCapital
     *
     * @return string 
     */
    public function getNombreCapital()
    {
        return $this->nombreCapital;
    }

    /**
     * Set nombreRegion
     *
     * @param string $nombreRegion
     * @return GeoEstado
     */
    public function setNombreRegion($nombreRegion)
    {
        $this->nombreRegion = $nombreRegion;

        return $this;
    }

    /**
     * Get nombreRegion
     *
     * @return string 
     */
    public function getNombreRegion()
    {
        return $this->nombreRegion;
    }

    /**
     * Set geoZona
     *
     * @param \Comunes\TablasBundle\Entity\GeoZona $geoZona
     * @return GeoEstado
     */
    public function setGeoZona(\Comunes\TablasBundle\Entity\GeoZona $geoZona = null)
    {
        $this->geoZona = $geoZona;

        return $this;
    }

    /**
     * Get geoZona
     *
     * @return \Comunes\TablasBundle\Entity\GeoZona 
     */
    public function getGeoZona()
    {
        return $this->geoZona;
    }
}
