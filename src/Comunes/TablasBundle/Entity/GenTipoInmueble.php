<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenTipoInmueble
 *
 * @ORM\Table(name="GEN_TIPO_INMUEBLE")
 * @ORM\Entity
 */
class GenTipoInmueble
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEN_TIPO_INMUEBLE_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=false)
     */
    private $nombre;

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
     * @return GenTipoInmueble
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
