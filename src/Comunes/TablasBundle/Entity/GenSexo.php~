<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenSexo
 *
 * @ORM\Table(name="GEN_SEXO")
 * @ORM\Entity
 */
class GenSexo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEN_SEXO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ABREV_GENERO", type="string", length=1, nullable=true)
     */
    private $abrevGenero;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=40, nullable=true)
     */
    private $nombre;



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
     * Set abrevGenero
     *
     * @param string $abrevGenero
     * @return GenSexo
     */
    public function setAbrevGenero($abrevGenero)
    {
        $this->abrevGenero = $abrevGenero;

        return $this;
    }

    /**
     * Get abrevGenero
     *
     * @return string 
     */
    public function getAbrevGenero()
    {
        return $this->abrevGenero;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return GenSexo
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
}
