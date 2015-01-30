<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeneficiarioTemporal
 *
 * @ORM\Table(name="BENEFICIARIO_TEMPORAL", indexes={@ORM\Index(name="IDX_5C86E8D6A2441D43", columns={"DESARROLLO_ID"}), @ORM\Index(name="IDX_5C86E8D636962553", columns={"UNIDAD_HABITACIONAL_ID"}), @ORM\Index(name="IDX_5C86E8D6C62AD666", columns={"PERSONA_ID"}), @ORM\Index(name="IDX_5C86E8D6E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class BeneficiarioTemporal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="BENEFICIARIO_TEMPORAL_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="CEDULA", type="integer", nullable=false)
     */
    private $cedula;

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
     * @var integer
     *
     * @ORM\Column(name="ID_CONTROL", type="integer", nullable=true)
     */
    private $idControl;

    /**
     * @var string
     *
     * @ORM\Column(name="NACIONALIDAD", type="string", length=1, nullable=false)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_ARCHIVO", type="string", length=200, nullable=true)
     */
    private $nombreArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_COMPLETO", type="string", length=200, nullable=false)
     */
    private $nombreCompleto;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Desarrollo
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Desarrollo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DESARROLLO_ID", referencedColumnName="ID")
     * })
     */
    private $desarrollo;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UNIDAD_HABITACIONAL_ID", referencedColumnName="ID")
     * })
     */
    private $unidadHabitacional;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PERSONA_ID", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\")
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
     * Set cedula
     *
     * @param integer $cedula
     * @return BeneficiarioTemporal
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return BeneficiarioTemporal
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
     * @return BeneficiarioTemporal
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
     * Set idControl
     *
     * @param integer $idControl
     * @return BeneficiarioTemporal
     */
    public function setIdControl($idControl)
    {
        $this->idControl = $idControl;

        return $this;
    }

    /**
     * Get idControl
     *
     * @return integer 
     */
    public function getIdControl()
    {
        return $this->idControl;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     * @return BeneficiarioTemporal
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return BeneficiarioTemporal
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     * @return BeneficiarioTemporal
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get nombreCompleto
     *
     * @return string 
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set desarrollo
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Desarrollo $desarrollo
     * @return BeneficiarioTemporal
     */
    public function setDesarrollo(\Srpv\ProtocolizacionBundle\Entity\Desarrollo $desarrollo = null)
    {
        $this->desarrollo = $desarrollo;

        return $this;
    }

    /**
     * Get desarrollo
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\Desarrollo 
     */
    public function getDesarrollo()
    {
        return $this->desarrollo;
    }

    /**
     * Set unidadHabitacional
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional $unidadHabitacional
     * @return BeneficiarioTemporal
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

    /**
     * Set persona
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\ $persona
     * @return BeneficiarioTemporal
     */
    public function setPersona(\Comunes\TablasBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\ 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set usuario
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\ $usuario
     * @return BeneficiarioTemporal
     */
    public function setUsuario(\Comunes\SecurityBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\ 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
