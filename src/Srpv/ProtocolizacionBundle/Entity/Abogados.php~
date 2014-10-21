<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abogados
 *
 * @ORM\Table(name="ABOGADOS", indexes={@ORM\Index(name="IDX_96E40C6AB9546268", columns={"OFICINA_ID"}), @ORM\Index(name="IDX_96E40C6AE8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_96E40C6AC62AD666", columns={"PERSONA_ID"}), @ORM\Index(name="IDX_96E40C6AF10517DF", columns={"TIPO_ABOGADO_ID"})})
 * @ORM\Entity
 */
class Abogados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ABOGADOS_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTATUS", type="string", length=1, nullable=true)
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
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="INPREABOGADO", type="string", length=20, nullable=true)
     */
    private $inpreabogado;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Oficina
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Oficina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OFICINA_ID", referencedColumnName="id")
     * })
     */
    private $oficina;

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
     * @var \Comunes\TablasBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PERSONA_ID", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\TipoAbogado
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TipoAbogado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_ABOGADO_ID", referencedColumnName="id")
     * })
     */
    private $tipoAbogado;



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
     * @return Abogados
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
     * @return Abogados
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
     * @return Abogados
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
     * Set inpreabogado
     *
     * @param string $inpreabogado
     * @return Abogados
     */
    public function setInpreabogado($inpreabogado)
    {
        $this->inpreabogado = $inpreabogado;

        return $this;
    }

    /**
     * Get inpreabogado
     *
     * @return string 
     */
    public function getInpreabogado()
    {
        return $this->inpreabogado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Abogados
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set oficina
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Oficina $oficina
     * @return Abogados
     */
    public function setOficina(\Srpv\ProtocolizacionBundle\Entity\Oficina $oficina = null)
    {
        $this->oficina = $oficina;

        return $this;
    }

    /**
     * Get oficina
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\Oficina 
     */
    public function getOficina()
    {
        return $this->oficina;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return Abogados
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
     * Set persona
     *
     * @param \Comunes\TablasBundle\Entity\Persona $persona
     * @return Abogados
     */
    public function setPersona(\Comunes\TablasBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Comunes\TablasBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set tipoAbogado
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TipoAbogado $tipoAbogado
     * @return Abogados
     */
    public function setTipoAbogado(\Srpv\ProtocolizacionBundle\Entity\TipoAbogado $tipoAbogado = null)
    {
        $this->tipoAbogado = $tipoAbogado;

        return $this;
    }

    /**
     * Get tipoAbogado
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TipoAbogado 
     */
    public function getTipoAbogado()
    {
        return $this->tipoAbogado;
    }
}
