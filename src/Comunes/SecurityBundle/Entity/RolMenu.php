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
     * @var integer
     *
     * @ORM\Column(name="ROL_ID", type="integer", nullable=true)
     */
    private $rolId;

    /**
     * @var \Comunes\SecurityBundle\Entity\OpcionMenu
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\OpcionMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OPCION_MENU_ID", referencedColumnName="id")
     * })
     */
    private $opcionMenu;



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
     * Set rolId
     *
     * @param integer $rolId
     * @return RolMenu
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
}
