<?php

namespace Comunes\OrganismosPublicosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seniat
 *
 * @ORM\Table(name="SENIAT")
 * @ORM\Entity
 */
class Seniat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="SENIAT_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="RIF", type="string", length=100, nullable=false)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=500, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="string", length=1000, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVIDAD_ECONOMICA", type="string", length=500, nullable=true)
     */
    private $actividadEconomica;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="string", length=250, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO_ELECTRONICO", type="string", length=250, nullable=true)
     */
    private $correoElectronico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CONSTITUCION", type="date", nullable=true)
     */
    private $fechaConstitucion;



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
     * Set rif
     *
     * @param string $rif
     * @return Seniat
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Seniat
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
     * Set direccion
     *
     * @param string $direccion
     * @return Seniat
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set actividadEconomica
     *
     * @param string $actividadEconomica
     * @return Seniat
     */
    public function setActividadEconomica($actividadEconomica)
    {
        $this->actividadEconomica = $actividadEconomica;

        return $this;
    }

    /**
     * Get actividadEconomica
     *
     * @return string 
     */
    public function getActividadEconomica()
    {
        return $this->actividadEconomica;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Seniat
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     * @return Seniat
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get correoElectronico
     *
     * @return string 
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set fechaConstitucion
     *
     * @param \DateTime $fechaConstitucion
     * @return Seniat
     */
    public function setFechaConstitucion($fechaConstitucion)
    {
        $this->fechaConstitucion = $fechaConstitucion;

        return $this;
    }

    /**
     * Get fechaConstitucion
     *
     * @return \DateTime 
     */
    public function getFechaConstitucion()
    {
        return $this->fechaConstitucion;
    }
}
