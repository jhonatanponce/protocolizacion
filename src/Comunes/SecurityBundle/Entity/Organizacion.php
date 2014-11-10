<?php

namespace Comunes\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organizacion
 *
 * @ORM\Table(name="ORGANIZACION", indexes={@ORM\Index(name="IDX_9912454AEB6093A0", columns={"GEO_ZONA_ID"}), @ORM\Index(name="IDX_9912454A6F3929D7", columns={"GEO_ESTADO_ID"}), @ORM\Index(name="IDX_9912454A7181F310", columns={"GEO_MUNICIPIO_ID"}), @ORM\Index(name="IDX_9912454A5D9234E7", columns={"GEO_PARROQUIA_ID"})})
 * @ORM\Entity
 */
class Organizacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ORGANIZACION_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CALLE", type="string", length=100, nullable=true)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_CONTACTO1", type="string", length=4, nullable=true)
     */
    private $codigoContacto1;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_CONTACTO2", type="string", length=4, nullable=true)
     */
    private $codigoContacto2;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_SUDEBAN", type="string", length=4, nullable=true)
     */
    private $codigoSudeban;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO1", type="string", length=4, nullable=true)
     */
    private $codigo1;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO2", type="string", length=4, nullable=true)
     */
    private $codigo2;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO3", type="string", length=4, nullable=true)
     */
    private $codigo3;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_CONTACTO1", type="string", length=100, nullable=true)
     */
    private $emailContacto1;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_CONTACTO2", type="string", length=100, nullable=true)
     */
    private $emailContacto2;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="NUM_CASA_EDIF", type="string", length=100, nullable=true)
     */
    private $numCasaEdif;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERADOR_FINANCIERO", type="string", length=1, nullable=true)
     */
    private $operadorFinanciero;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONA_CONTACTO1", type="string", length=100, nullable=true)
     */
    private $personaContacto1;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONA_CONTACTO2", type="string", length=100, nullable=true)
     */
    private $personaContacto2;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESIDENTE", type="string", length=100, nullable=true)
     */
    private $presidente;

    /**
     * @var string
     *
     * @ORM\Column(name="PUNTO_REFERENCIA", type="string", length=100, nullable=true)
     */
    private $puntoReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTOR", type="string", length=100, nullable=true)
     */
    private $sector;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_CONTACTO1", type="string", length=7, nullable=true)
     */
    private $telefonoContacto1;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_CONTACTO2", type="string", length=7, nullable=true)
     */
    private $telefonoContacto2;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO1", type="string", length=7, nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO2", type="string", length=7, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO3", type="string", length=7, nullable=true)
     */
    private $telefono3;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Organizacion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set codigoContacto1
     *
     * @param string $codigoContacto1
     * @return Organizacion
     */
    public function setCodigoContacto1($codigoContacto1)
    {
        $this->codigoContacto1 = $codigoContacto1;

        return $this;
    }

    /**
     * Get codigoContacto1
     *
     * @return string 
     */
    public function getCodigoContacto1()
    {
        return $this->codigoContacto1;
    }

    /**
     * Set codigoContacto2
     *
     * @param string $codigoContacto2
     * @return Organizacion
     */
    public function setCodigoContacto2($codigoContacto2)
    {
        $this->codigoContacto2 = $codigoContacto2;

        return $this;
    }

    /**
     * Get codigoContacto2
     *
     * @return string 
     */
    public function getCodigoContacto2()
    {
        return $this->codigoContacto2;
    }

    /**
     * Set codigoSudeban
     *
     * @param string $codigoSudeban
     * @return Organizacion
     */
    public function setCodigoSudeban($codigoSudeban)
    {
        $this->codigoSudeban = $codigoSudeban;

        return $this;
    }

    /**
     * Get codigoSudeban
     *
     * @return string 
     */
    public function getCodigoSudeban()
    {
        return $this->codigoSudeban;
    }

    /**
     * Set codigo1
     *
     * @param string $codigo1
     * @return Organizacion
     */
    public function setCodigo1($codigo1)
    {
        $this->codigo1 = $codigo1;

        return $this;
    }

    /**
     * Get codigo1
     *
     * @return string 
     */
    public function getCodigo1()
    {
        return $this->codigo1;
    }

    /**
     * Set codigo2
     *
     * @param string $codigo2
     * @return Organizacion
     */
    public function setCodigo2($codigo2)
    {
        $this->codigo2 = $codigo2;

        return $this;
    }

    /**
     * Get codigo2
     *
     * @return string 
     */
    public function getCodigo2()
    {
        return $this->codigo2;
    }

    /**
     * Set codigo3
     *
     * @param string $codigo3
     * @return Organizacion
     */
    public function setCodigo3($codigo3)
    {
        $this->codigo3 = $codigo3;

        return $this;
    }

    /**
     * Get codigo3
     *
     * @return string 
     */
    public function getCodigo3()
    {
        return $this->codigo3;
    }

    /**
     * Set emailContacto1
     *
     * @param string $emailContacto1
     * @return Organizacion
     */
    public function setEmailContacto1($emailContacto1)
    {
        $this->emailContacto1 = $emailContacto1;

        return $this;
    }

    /**
     * Get emailContacto1
     *
     * @return string 
     */
    public function getEmailContacto1()
    {
        return $this->emailContacto1;
    }

    /**
     * Set emailContacto2
     *
     * @param string $emailContacto2
     * @return Organizacion
     */
    public function setEmailContacto2($emailContacto2)
    {
        $this->emailContacto2 = $emailContacto2;

        return $this;
    }

    /**
     * Get emailContacto2
     *
     * @return string 
     */
    public function getEmailContacto2()
    {
        return $this->emailContacto2;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Organizacion
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
     * Set numCasaEdif
     *
     * @param string $numCasaEdif
     * @return Organizacion
     */
    public function setNumCasaEdif($numCasaEdif)
    {
        $this->numCasaEdif = $numCasaEdif;

        return $this;
    }

    /**
     * Get numCasaEdif
     *
     * @return string 
     */
    public function getNumCasaEdif()
    {
        return $this->numCasaEdif;
    }

    /**
     * Set operadorFinanciero
     *
     * @param string $operadorFinanciero
     * @return Organizacion
     */
    public function setOperadorFinanciero($operadorFinanciero)
    {
        $this->operadorFinanciero = $operadorFinanciero;

        return $this;
    }

    /**
     * Get operadorFinanciero
     *
     * @return string 
     */
    public function getOperadorFinanciero()
    {
        return $this->operadorFinanciero;
    }

    /**
     * Set personaContacto1
     *
     * @param string $personaContacto1
     * @return Organizacion
     */
    public function setPersonaContacto1($personaContacto1)
    {
        $this->personaContacto1 = $personaContacto1;

        return $this;
    }

    /**
     * Get personaContacto1
     *
     * @return string 
     */
    public function getPersonaContacto1()
    {
        return $this->personaContacto1;
    }

    /**
     * Set personaContacto2
     *
     * @param string $personaContacto2
     * @return Organizacion
     */
    public function setPersonaContacto2($personaContacto2)
    {
        $this->personaContacto2 = $personaContacto2;

        return $this;
    }

    /**
     * Get personaContacto2
     *
     * @return string 
     */
    public function getPersonaContacto2()
    {
        return $this->personaContacto2;
    }

    /**
     * Set presidente
     *
     * @param string $presidente
     * @return Organizacion
     */
    public function setPresidente($presidente)
    {
        $this->presidente = $presidente;

        return $this;
    }

    /**
     * Get presidente
     *
     * @return string 
     */
    public function getPresidente()
    {
        return $this->presidente;
    }

    /**
     * Set puntoReferencia
     *
     * @param string $puntoReferencia
     * @return Organizacion
     */
    public function setPuntoReferencia($puntoReferencia)
    {
        $this->puntoReferencia = $puntoReferencia;

        return $this;
    }

    /**
     * Get puntoReferencia
     *
     * @return string 
     */
    public function getPuntoReferencia()
    {
        return $this->puntoReferencia;
    }

    /**
     * Set sector
     *
     * @param string $sector
     * @return Organizacion
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set telefonoContacto1
     *
     * @param string $telefonoContacto1
     * @return Organizacion
     */
    public function setTelefonoContacto1($telefonoContacto1)
    {
        $this->telefonoContacto1 = $telefonoContacto1;

        return $this;
    }

    /**
     * Get telefonoContacto1
     *
     * @return string 
     */
    public function getTelefonoContacto1()
    {
        return $this->telefonoContacto1;
    }

    /**
     * Set telefonoContacto2
     *
     * @param string $telefonoContacto2
     * @return Organizacion
     */
    public function setTelefonoContacto2($telefonoContacto2)
    {
        $this->telefonoContacto2 = $telefonoContacto2;

        return $this;
    }

    /**
     * Get telefonoContacto2
     *
     * @return string 
     */
    public function getTelefonoContacto2()
    {
        return $this->telefonoContacto2;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return Organizacion
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Organizacion
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set telefono3
     *
     * @param string $telefono3
     * @return Organizacion
     */
    public function setTelefono3($telefono3)
    {
        $this->telefono3 = $telefono3;

        return $this;
    }

    /**
     * Get telefono3
     *
     * @return string 
     */
    public function getTelefono3()
    {
        return $this->telefono3;
    }

    /**
     * Set geoZona
     *
     * @param \Comunes\TablasBundle\Entity\GeoZona $geoZona
     * @return Organizacion
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

    /**
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return Organizacion
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
     * @return Organizacion
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
     * @return Organizacion
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
}
