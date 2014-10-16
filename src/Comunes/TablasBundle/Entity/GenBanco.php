<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenBanco
 *
 * @ORM\Table(name="GEN_BANCO", indexes={@ORM\Index(name="IDX_92C3D6937B420DF9", columns={"GEN_TIPO_INSTITUCION_ID"})})
 * @ORM\Entity
 */
class GenBanco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GEN_BANCO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="BLOQUEADO", type="string", length=1, nullable=true)
     */
    private $bloqueado;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_SUDEBAN", type="string", length=4, nullable=true)
     */
    private $codigoSudeban;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO_CONTACTO", type="string", length=70, nullable=true)
     */
    private $correoContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERADOR_FINANCIERO", type="string", length=1, nullable=true)
     */
    private $operadorFinanciero;

    /**
     * @var \Comunes\TablasBundle\Entity\GenTipoInstitucion
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenTipoInstitucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_TIPO_INSTITUCION_ID", referencedColumnName="id")
     * })
     */
    private $genTipoInstitucion;



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
     * Set bloqueado
     *
     * @param string $bloqueado
     * @return GenBanco
     */
    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado;

        return $this;
    }

    /**
     * Get bloqueado
     *
     * @return string 
     */
    public function getBloqueado()
    {
        return $this->bloqueado;
    }

    /**
     * Set codigoSudeban
     *
     * @param string $codigoSudeban
     * @return GenBanco
     */
    public function setCodigoSudeban($codigoSudeban)
    {
        $this->codigoSudeban = $codigoSudeban;

        return $this;
    }

    /**
     * Get codigoSudeban
     *
     * @return string 
     */
    public function getCodigoSudeban()
    {
        return $this->codigoSudeban;
    }

    /**
     * Set correoContacto
     *
     * @param string $correoContacto
     * @return GenBanco
     */
    public function setCorreoContacto($correoContacto)
    {
        $this->correoContacto = $correoContacto;

        return $this;
    }

    /**
     * Get correoContacto
     *
     * @return string 
     */
    public function getCorreoContacto()
    {
        return $this->correoContacto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return GenBanco
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
     * Set operadorFinanciero
     *
     * @param string $operadorFinanciero
     * @return GenBanco
     */
    public function setOperadorFinanciero($operadorFinanciero)
    {
        $this->operadorFinanciero = $operadorFinanciero;

        return $this;
    }

    /**
     * Get operadorFinanciero
     *
     * @return string 
     */
    public function getOperadorFinanciero()
    {
        return $this->operadorFinanciero;
    }

    /**
     * Set genTipoInstitucion
     *
     * @param \Comunes\TablasBundle\Entity\GenTipoInstitucion $genTipoInstitucion
     * @return GenBanco
     */
    public function setGenTipoInstitucion(\Comunes\TablasBundle\Entity\GenTipoInstitucion $genTipoInstitucion = null)
    {
        $this->genTipoInstitucion = $genTipoInstitucion;

        return $this;
    }

    /**
     * Get genTipoInstitucion
     *
     * @return \Comunes\TablasBundle\Entity\GenTipoInstitucion 
     */
    public function getGenTipoInstitucion()
    {
        return $this->genTipoInstitucion;
    }
}
