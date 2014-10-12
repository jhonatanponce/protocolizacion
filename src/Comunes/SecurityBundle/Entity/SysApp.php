<?php

namespace Comunes\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysApp
 *
 * @ORM\Table(name="SYS_APP", indexes={@ORM\Index(name="IDX_E88534D363F89AA7", columns={"SYS_SISTEMA_ID"})})
 * @ORM\Entity
 */
class SysApp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="SYS_APP_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORDEN", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var \Comunes\SecurityBundle\Entity\SysSistema
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\SysSistema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SYS_SISTEMA_ID", referencedColumnName="id")
     * })
     */
    private $sysSistema;



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
     * Set descripcion
     *
     * @param string $descripcion
     * @return SysApp
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return SysApp
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
     * @return SysApp
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
     * Set sysSistema
     *
     * @param \Comunes\SecurityBundle\Entity\SysSistema $sysSistema
     * @return SysApp
     */
    public function setSysSistema(\Comunes\SecurityBundle\Entity\SysSistema $sysSistema = null)
    {
        $this->sysSistema = $sysSistema;

        return $this;
    }

    /**
     * Get sysSistema
     *
     * @return \Comunes\SecurityBundle\Entity\SysSistema 
     */
    public function getSysSistema()
    {
        return $this->sysSistema;
    }
}
