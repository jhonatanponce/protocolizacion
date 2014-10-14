<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeoMunicipio
 *
 * @ORM\Table(name="GEO_MUNICIPIO", uniqueConstraints={@ORM\UniqueConstraint(name="indx01_geo_municipio", columns={"ID_SUDEBAN"})}, indexes={@ORM\Index(name="IDX_36B6DEDC6F3929D7", columns={"GEO_ESTADO_ID"})})
 * @ORM\Entity
 */
class GeoMunicipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEO_MUNICIPIO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @ORM\Column(name="NOMBRE_MUNICIPIO", type="string", length=50, nullable=true)
     */
    private $nombreMunicipio;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idSudeban
     *
     * @param integer $idSudeban
     * @return GeoMunicipio
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
     * @return GeoMunicipio
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
     * @return GeoMunicipio
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
     * Set nombreMunicipio
     *
     * @param string $nombreMunicipio
     * @return GeoMunicipio
     */
    public function setNombreMunicipio($nombreMunicipio)
    {
        $this->nombreMunicipio = $nombreMunicipio;

        return $this;
    }

    /**
     * Get nombreMunicipio
     *
     * @return string 
     */
    public function getNombreMunicipio()
    {
        return $this->nombreMunicipio;
    }

    /**
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return GeoMunicipio
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
}
