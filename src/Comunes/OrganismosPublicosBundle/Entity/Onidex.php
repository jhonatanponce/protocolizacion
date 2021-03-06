<?php

namespace Comunes\OrganismosPublicosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Onidex
 *
 * @ORM\Table(name="ONIDEX")
 * @ORM\Entity
 */
class Onidex
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ONIDEX_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAC", type="string", length=1, nullable=false)
     */
    private $nac;

    /**
     * @var string
     *
     * @ORM\Column(name="CEDULA", type="string", length=13, nullable=false)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIMERAPELLIDO", type="string", length=50, nullable=false)
     */
    private $primerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="SEGUNDOAPELLIDO", type="string", length=50, nullable=true)
     */
    private $segundoApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIMERNOMBRE", type="string", length=50, nullable=false)
     */
    private $primerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="SEGUNDONOMBRE", type="string", length=50, nullable=true)
     */
    private $segundoNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTATUS", type="integer", length=50, nullable=true)
     */
    private $estatus;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FECHA", type="string", length=20, nullable=true)
     */
    private $fecha;    

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
     * Set nac
     *
     * @param string $nac
     * @return Onidex
     */
    public function setNac($nac)
    {
        $this->nac = $nac;

        return $this;
    }

    /**
     * Get nac
     *
     * @return string 
     */
    public function getNac()
    {
        return $this->nac;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Onidex
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     * @return Onidex
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     * @return Onidex
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string 
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set primerNombre
     *
     * @param string $primerNombre
     * @return Onidex
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get primerNombre
     *
     * @return string 
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set segundoNombre
     *
     * @param string $segundoNombre
     * @return Onidex
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    /**
     * Get segundoNombre
     *
     * @return string 
     */
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set estatus
     *
     * @param integer $estatus
     * @return Onidex
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return integer 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     * @return Onidex
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }    
}
