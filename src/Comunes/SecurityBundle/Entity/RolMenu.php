<?php

namespace Comunes\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolMenu
 *
 * @ORM\Table(name="ROL_MENU", indexes={@ORM\Index(name="IDX_686FB47486B0A49F", columns={"OPCION_MENU_ID"})})
 * @ORM\Entity
 */
class RolMenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ROL_MENU_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Comunes\SecurityBundle\Entity\OpcionMenu
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\OpcionMenu", inversedBy="rolOpciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OPCION_MENU_ID", referencedColumnName="id")
     * })
     */
    private $opcionMenu;

    /**
     * @var \Comunes\SecurityBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ROL_ID", referencedColumnName="id")
     * })
     */
    private $rol;



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
     * Set opcionMenu
     *
     * @param \Comunes\SecurityBundle\Entity\OpcionMenu $opcionMenu
     * @return RolMenu
     */
    public function setOpcionMenu(\Comunes\SecurityBundle\Entity\OpcionMenu $opcionMenu = null)
    {
        $this->opcionMenu = $opcionMenu;

        return $this;
    }

    /**
     * Get opcionMenu
     *
     * @return \Comunes\SecurityBundle\Entity\OpcionMenu 
     */
    public function getOpcionMenu()
    {
        return $this->opcionMenu;
    }

    /**
     * Set rol
     *
     * @param \Comunes\SecurityBundle\Entity\Rol $rol
     * @return RolMenu
     */
    public function setRol(\Comunes\SecurityBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Comunes\SecurityBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }
}
