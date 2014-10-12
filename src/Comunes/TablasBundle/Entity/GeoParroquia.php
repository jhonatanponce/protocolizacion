<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeoParroquia
 *
 * @ORM\Table(name="GEO_PARROQUIA", uniqueConstraints={@ORM\UniqueConstraint(name="indx01_geo_parroquia", columns={"ID_SUDEBAN"})}, indexes={@ORM\Index(name="IDX_EB893D547181F310", columns={"GEO_MUNICIPIO_ID"})})
 * @ORM\Entity
 */
class GeoParroquia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEO_PARROQUIA_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODIGO_MUNICIPIO", type="integer", nullable=true)
     */
    private $codigoMunicipio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_SUDEBAN", type="integer", nullable=true)
     */
    private $idSudeban;

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
     * @ORM\Column(name="NOMBRE_PARROQUIA", type="string", length=200, nullable=true)
     */
    private $nombreParroquia;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigoMunicipio
     *
     * @param integer $codigoMunicipio
     * @return GeoParroquia
     */
    public function setCodigoMunicipio($codigoMunicipio)
    {
        $this->codigoMunicipio = $codigoMunicipio;

        return $this;
    }

    /**
     * Get codigoMunicipio
     *
     * @return integer 
     */
    public function getCodigoMunicipio()
    {
        return $this->codigoMunicipio;
    }

    /**
     * Set idSudeban
     *
     * @param integer $idSudeban
     * @return GeoParroquia
     */
    public function setIdSudeban($idSudeban)
    {
        $this->idSudeban = $idSudeban;

        return $this;
    }

    /**
     * Get idSudeban
     *
     * @return integer 
     */
    public function getIdSudeban()
    {
        return $this->idSudeban;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return GeoParroquia
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
     * @return GeoParroquia
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
     * Set nombreParroquia
     *
     * @param string $nombreParroquia
     * @return GeoParroquia
     */
    public function setNombreParroquia($nombreParroquia)
    {
        $this->nombreParroquia = $nombreParroquia;

        return $this;
    }

    /**
     * Get nombreParroquia
     *
     * @return string 
     */
    public function getNombreParroquia()
    {
        return $this->nombreParroquia;
    }

    /**
     * Set geoMunicipio
     *
     * @param \Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipio
     * @return GeoParroquia
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
}
