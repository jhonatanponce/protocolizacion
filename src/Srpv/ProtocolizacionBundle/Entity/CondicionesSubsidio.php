<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CondicionesSubsidio
 *
 * @ORM\Table(name="CONDICIONES_SUBSIDIO", indexes={@ORM\Index(name="IDX_BD95D6ACECBD29C", columns={"TIPO_SUBSIDIO_ID"}), @ORM\Index(name="IDX_BD95D6AE8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class CondicionesSubsidio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="CONDICIONES_SUBSIDIO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @ORM\Column(name="PORCENTAJE_SUBSIDIO", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $porcentajeSubsidio;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPORCION_SALARIO", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $proporcionSalario;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\TipoSubsidio
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TipoSubsidio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_SUBSIDIO_ID", referencedColumnName="id")
     * })
     */
    private $tipoSubsidio;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set estatus
     *
     * @param string $estatus
     * @return CondicionesSubsidio
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
     * @return CondicionesSubsidio
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
     * @return CondicionesSubsidio
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
     * Set porcentajeSubsidio
     *
     * @param string $porcentajeSubsidio
     * @return CondicionesSubsidio
     */
    public function setPorcentajeSubsidio($porcentajeSubsidio)
    {
        $this->porcentajeSubsidio = $porcentajeSubsidio;

        return $this;
    }

    /**
     * Get porcentajeSubsidio
     *
     * @return string 
     */
    public function getPorcentajeSubsidio()
    {
        return $this->porcentajeSubsidio;
    }

    /**
     * Set proporcionSalario
     *
     * @param string $proporcionSalario
     * @return CondicionesSubsidio
     */
    public function setProporcionSalario($proporcionSalario)
    {
        $this->proporcionSalario = $proporcionSalario;

        return $this;
    }

    /**
     * Get proporcionSalario
     *
     * @return string 
     */
    public function getProporcionSalario()
    {
        return $this->proporcionSalario;
    }

    /**
     * Set tipoSubsidio
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TipoSubsidio $tipoSubsidio
     * @return CondicionesSubsidio
     */
    public function setTipoSubsidio(\Srpv\ProtocolizacionBundle\Entity\TipoSubsidio $tipoSubsidio = null)
    {
        $this->tipoSubsidio = $tipoSubsidio;

        return $this;
    }

    /**
     * Get tipoSubsidio
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TipoSubsidio 
     */
    public function getTipoSubsidio()
    {
        return $this->tipoSubsidio;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return CondicionesSubsidio
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
}
