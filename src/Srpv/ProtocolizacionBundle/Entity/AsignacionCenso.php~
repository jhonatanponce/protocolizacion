<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsignacionCenso
 *
 * @ORM\Table(name="ASIGNACION_CENSO", indexes={@ORM\Index(name="IDX_B2498A84C62AD666", columns={"PERSONA_ID"}), @ORM\Index(name="IDX_B2498A84E8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_B2498A84B9546268", columns={"OFICINA_ID"}), @ORM\Index(name="IDX_B2498A8436962553", columns={"UNIDAD_HABITACIONAL_ID"})})
 * @ORM\Entity
 */
class AsignacionCenso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ASIGNACION_CENSO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CENSADO", type="string", length=1, nullable=false)
     */
    private $censado;

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
     * @ORM\Column(name="FECHA_ASIGNACION", type="date", nullable=false)
     */
    private $fechaAsignacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=200, nullable=true)
     */
    private $observaciones;

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
     * @var \Comunes\SecurityBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USUARIO_ID", referencedColumnName="id")
     * })
     */
    private $usuario;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UNIDAD_HABITACIONAL_ID", referencedColumnName="id")
     * })
     */
    private $unidadHabitacional;



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
     * Set censado
     *
     * @param string $censado
     * @return AsignacionCenso
     */
    public function setCensado($censado)
    {
        $this->censado = $censado;

        return $this;
    }

    /**
     * Get censado
     *
     * @return string 
     */
    public function getCensado()
    {
        return $this->censado;
    }

    /**
     * Set estatus
     *
     * @param string $estatus
     * @return AsignacionCenso
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
     * @return AsignacionCenso
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
     * Set fechaAsignacion
     *
     * @param \DateTime $fechaAsignacion
     * @return AsignacionCenso
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;

        return $this;
    }

    /**
     * Get fechaAsignacion
     *
     * @return \DateTime 
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return AsignacionCenso
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return AsignacionCenso
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
     * Set persona
     *
     * @param \Comunes\TablasBundle\Entity\Persona $persona
     * @return AsignacionCenso
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
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return AsignacionCenso
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
     * Set oficina
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Oficina $oficina
     * @return AsignacionCenso
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
     * Set unidadHabitacional
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional $unidadHabitacional
     * @return AsignacionCenso
     */
    public function setUnidadHabitacional(\Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional $unidadHabitacional = null)
    {
        $this->unidadHabitacional = $unidadHabitacional;

        return $this;
    }

    /**
     * Get unidadHabitacional
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional 
     */
    public function getUnidadHabitacional()
    {
        return $this->unidadHabitacional;
    }
}
