<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenGradoInstruccion
 *
 * @ORM\Table(name="GEN_GRADO_INSTRUCCION")
 * @ORM\Entity
 */
class GenGradoInstruccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEN_GRADO_INSTRUCCION_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="A", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $a;

    /**
     * @var string
     *
     * @ORM\Column(name="B", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $b;

    /**
     * @var integer
     *
     * @ORM\Column(name="GEN_NIVEL_RIESGO_ID", type="integer", nullable=true)
     */
    private $genNivelRiesgoId;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="X", type="integer", nullable=true)
     */
    private $x;



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
     * Set a
     *
     * @param string $a
     * @return GenGradoInstruccion
     */
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get a
     *
     * @return string 
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set b
     *
     * @param string $b
     * @return GenGradoInstruccion
     */
    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    /**
     * Get b
     *
     * @return string 
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set genNivelRiesgoId
     *
     * @param integer $genNivelRiesgoId
     * @return GenGradoInstruccion
     */
    public function setGenNivelRiesgoId($genNivelRiesgoId)
    {
        $this->genNivelRiesgoId = $genNivelRiesgoId;

        return $this;
    }

    /**
     * Get genNivelRiesgoId
     *
     * @return integer 
     */
    public function getGenNivelRiesgoId()
    {
        return $this->genNivelRiesgoId;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return GenGradoInstruccion
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
     * Set x
     *
     * @param integer $x
     * @return GenGradoInstruccion
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return integer 
     */
    public function getX()
    {
        return $this->x;
    }
}
