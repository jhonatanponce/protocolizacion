<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReasignacionVivienda
 *
 * @ORM\Table(name="REASIGNACION_VIIVENDA", indexes={@ORM\Index(name="IDX_AFC790DE25702D62", columns={"BENEFICIARIO_ID_ACTUAL"}), @ORM\Index(name="IDX_AFC790DEE419CD15", columns={"BENEFICIARIO_ID_ANTERIOR"}), @ORM\Index(name="IDX_AFC790DE8E33B263", columns={"PERSONA_ID_AUTORIZA"}), @ORM\Index(name="IDX_AFC790DEE8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_AFC790DE6FDD3E33", columns={"TIPO_REASIGNACION_ID"}), @ORM\Index(name="IDX_AFC790DE34E98380", columns={"VIVIENDA_ID"})})
 * @ORM\Entity
 */
class ReasignacionVivienda
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="REASIGNACION_VIIVENDA_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_REASIGNACION", type="date", nullable=false)
     */
    private $fechaReasignacion;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Beneficiario
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Beneficiario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BENEFICIARIO_ID_ACTUAL", referencedColumnName="id")
     * })
     */
    private $beneficiarioActual;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Beneficiario
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Beneficiario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BENEFICIARIO_ID_ANTERIOR", referencedColumnName="id")
     * })
     */
    private $beneficiarioAnterior;

    /**
     * @var \Comunes\TablasBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PERSONA_ID_AUTORIZA", referencedColumnName="id")
     * })
     */
    private $personaAutoriza;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\TipoReasignacion
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TipoReasignacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_REASIGNACION_ID", referencedColumnName="id")
     * })
     */
    private $tipoReasignacion;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Vivienda
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Vivienda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VIVIENDA_ID", referencedColumnName="id")
     * })
     */
    private $vivienda;



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
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return ReasignacionVivienda
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
     * @return ReasignacionVivienda
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
     * Set fechaReasignacion
     *
     * @param \DateTime $fechaReasignacion
     * @return ReasignacionVivienda
     */
    public function setFechaReasignacion($fechaReasignacion)
    {
        $this->fechaReasignacion = $fechaReasignacion;

        return $this;
    }

    /**
     * Get fechaReasignacion
     *
     * @return \DateTime 
     */
    public function getFechaReasignacion()
    {
        return $this->fechaReasignacion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ReasignacionVivienda
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
     * Set beneficiarioActual
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiarioActual
     * @return ReasignacionVivienda
     */
    public function setBeneficiarioActual(\Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiarioActual = null)
    {
        $this->beneficiarioActual = $beneficiarioActual;

        return $this;
    }

    /**
     * Get beneficiarioActual
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\Beneficiario 
     */
    public function getBeneficiarioActual()
    {
        return $this->beneficiarioActual;
    }

    /**
     * Set beneficiarioAnterior
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiarioAnterior
     * @return ReasignacionVivienda
     */
    public function setBeneficiarioAnterior(\Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiarioAnterior = null)
    {
        $this->beneficiarioAnterior = $beneficiarioAnterior;

        return $this;
    }

    /**
     * Get beneficiarioAnterior
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\Beneficiario 
     */
    public function getBeneficiarioAnterior()
    {
        return $this->beneficiarioAnterior;
    }

    /**
     * Set personaAutoriza
     *
     * @param \Comunes\TablasBundle\Entity\Persona $personaAutoriza
     * @return ReasignacionVivienda
     */
    public function setPersonaAutoriza(\Comunes\TablasBundle\Entity\Persona $personaAutoriza = null)
    {
        $this->personaAutoriza = $personaAutoriza;

        return $this;
    }

    /**
     * Get personaAutoriza
     *
     * @return \Comunes\TablasBundle\Entity\Persona 
     */
    public function getPersonaAutoriza()
    {
        return $this->personaAutoriza;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return ReasignacionVivienda
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
     * Set tipoReasignacion
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TipoReasignacion $tipoReasignacion
     * @return ReasignacionVivienda
     */
    public function setTipoReasignacion(\Srpv\ProtocolizacionBundle\Entity\TipoReasignacion $tipoReasignacion = null)
    {
        $this->tipoReasignacion = $tipoReasignacion;

        return $this;
    }

    /**
     * Get tipoReasignacion
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TipoReasignacion 
     */
    public function getTipoReasignacion()
    {
        return $this->tipoReasignacion;
    }

    /**
     * Set vivienda
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Vivienda $vivienda
     * @return ReasignacionVivienda
     */
    public function setVivienda(\Srpv\ProtocolizacionBundle\Entity\Vivienda $vivienda = null)
    {
        $this->vivienda = $vivienda;

        return $this;
    }

    /**
     * Get vivienda
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\Vivienda 
     */
    public function getVivienda()
    {
        return $this->vivienda;
    }
}
