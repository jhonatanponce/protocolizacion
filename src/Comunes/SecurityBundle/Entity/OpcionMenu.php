<?php

namespace Comunes\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpcionMenu
 *
 * @ORM\Table(name="OPCION_MENU", indexes={@ORM\Index(name="IDX_11680224619CCE83", columns={"SYS_APP_ID"})})
 * @ORM\Entity
 */
class OpcionMenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="OPCION_MENU_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var integer
     *
     * @ORM\Column(name="ROL_ID", type="integer", nullable=true)
     */
    private $rolId;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=500, nullable=true)
     */
    private $url;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Comunes\SecurityBundle\Entity\RolMenu", mappedBy="opcionMenu")
     */
    private $rolOpciones;

    /**
     * @var \Comunes\SecurityBundle\Entity\SysApp
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\SysApp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SYS_APP_ID", referencedColumnName="id")
     * })
     */
    private $sysApp;

    /**
     * @var \Comunes\SecurityBundle\Entity\OpcionMenu
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\OpcionMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PADRE_ID", referencedColumnName="id")
     * })
     */
    private $padreId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rolOpciones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return OpcionMenu
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
     * @return OpcionMenu
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
     * Set rolId
     *
     * @param integer $rolId
     * @return OpcionMenu
     */
    public function setRolId($rolId)
    {
        $this->rolId = $rolId;

        return $this;
    }

    /**
     * Get rolId
     *
     * @return integer 
     */
    public function getRolId()
    {
        return $this->rolId;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return OpcionMenu
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Add rolOpciones
     *
     * @param \Comunes\SecurityBundle\Entity\RolMenu $rolOpciones
     * @return OpcionMenu
     */
    public function addRolOpcione(\Comunes\SecurityBundle\Entity\RolMenu $rolOpciones)
    {
        $this->rolOpciones[] = $rolOpciones;

        return $this;
    }

    /**
     * Remove rolOpciones
     *
     * @param \Comunes\SecurityBundle\Entity\RolMenu $rolOpciones
     */
    public function removeRolOpcione(\Comunes\SecurityBundle\Entity\RolMenu $rolOpciones)
    {
        $this->rolOpciones->removeElement($rolOpciones);
    }

    /**
     * Get rolOpciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRolOpciones()
    {
        return $this->rolOpciones;
    }

    /**
     * Set sysApp
     *
     * @param \Comunes\SecurityBundle\Entity\SysApp $sysApp
     * @return OpcionMenu
     */
    public function setSysApp(\Comunes\SecurityBundle\Entity\SysApp $sysApp = null)
    {
        $this->sysApp = $sysApp;

        return $this;
    }

    /**
     * Get sysApp
     *
     * @return \Comunes\SecurityBundle\Entity\SysApp 
     */
    public function getSysApp()
    {
        return $this->sysApp;
    }

    /**
     * Set padreId
     *
     * @param \Comunes\SecurityBundle\Entity\OpcionMenu $padreId
     * @return OpcionMenu
     */
    public function setPadreId(\Comunes\SecurityBundle\Entity\OpcionMenu $padreId = null)
    {
        $this->padreId = $padreId;

        return $this;
    }

    /**
     * Get padreId
     *
     * @return \Comunes\SecurityBundle\Entity\OpcionMenu 
     */
    public function getPadreId()
    {
        return $this->padreId;
    }
}
