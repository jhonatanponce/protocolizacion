<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenCargo
 *
 * @ORM\Table(name="GEN_CARGO", indexes={@ORM\Index(name="IDX_DEF360336C0CDC64", columns={"GEN_NIVEL_RIESGO_ID"})})
 * @ORM\Entity
 */
class GenCargo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEN_CARGO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=40, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORDEN", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="X", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $x;

    /**
     * @var \Comunes\TablasBundle\Entity\GenNivelRiesgo
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenNivelRiesgo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_NIVEL_RIESGO_ID", referencedColumnName="id")
     * })
     */
    private $genNivelRiesgo;

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
     * Set nombre
     *
     * @param string $nombre
     * @return GenCargo
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
     * Set orden
     *
     * @param integer $orden
     * @return GenCargo
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set x
     *
     * @param string $x
     * @return GenCargo
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return string 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set genNivelRiesgo
     *
     * @param \Comunes\TablasBundle\Entity\GenNivelRiesgo $genNivelRiesgo
     * @return GenCargo
     */
    public function setGenNivelRiesgo(\Comunes\TablasBundle\Entity\GenNivelRiesgo $genNivelRiesgo = null)
    {
        $this->genNivelRiesgo = $genNivelRiesgo;

        return $this;
    }

    /**
     * Get genNivelRiesgo
     *
     * @return \Comunes\TablasBundle\Entity\GenNivelRiesgo 
     */
    public function getGenNivelRiesgo()
    {
        return $this->genNivelRiesgo;
    }
}
