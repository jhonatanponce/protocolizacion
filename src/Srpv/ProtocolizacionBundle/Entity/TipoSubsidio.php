<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoSubsidio
 *
 * @ORM\Table(name="TIPO_SUBSIDIO", indexes={@ORM\Index(name="IDX_10592F05E8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_10592F0567A51867", columns={"GACETAS_PTOS_CTA_ID"})})
 * @ORM\Entity
 */
class TipoSubsidio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="TIPO_SUBSIDIO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTATUS", type="string", length=1, nullable=false)
     */
    private $estatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ACTUALIZACION", type="date", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var \Comunes\SecurityBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USUARIO_ID", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GACETAS_PTOS_CTA_ID", referencedColumnName="id")
     * })
     */
    private $gacetasPtosCta;



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
     * @return TipoSubsidio
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
     * Set estatus
     *
     * @param string $estatus
     * @return TipoSubsidio
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return TipoSubsidio
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime 
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return TipoSubsidio
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TipoSubsidio
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
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return TipoSubsidio
     */
    public function setUsuario(\Comunes\SecurityBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Comunes\SecurityBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set gacetasPtosCta
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta $gacetasPtosCta
     * @return TipoSubsidio
     */
    public function setGacetasPtosCta(\Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta $gacetasPtosCta = null)
    {
        $this->gacetasPtosCta = $gacetasPtosCta;

        return $this;
    }

    /**
     * Get gacetasPtosCta
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta 
     */
    public function getGacetasPtosCta()
    {
        return $this->gacetasPtosCta;
    }
}
