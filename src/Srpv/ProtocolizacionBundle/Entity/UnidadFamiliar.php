<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadFamiliar
 *
 * @ORM\Table(name="UNIDAD_FAMILIAR", indexes={@ORM\Index(name="IDX_EDCB8ACA10C4A984", columns={"BENEFICIARIO_ID"}), @ORM\Index(name="IDX_EDCB8ACAA615B64A", columns={"CONDICION_UNIDAD_FAMILIAR_ID"}), @ORM\Index(name="IDX_EDCB8ACA42E534D7", columns={"PROCEDENCIA_BENEFICIO_ID"}), @ORM\Index(name="IDX_EDCB8ACAE8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class UnidadFamiliar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="UNIDAD_FAMILIAR_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTIDAD_DISPACITADOS", type="integer", nullable=true)
     */
    private $cantidadDispacitados;

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
     * @ORM\Column(name="FUENTE_DATOS_ENTRADA_ID", type="integer", nullable=false)
     */
    private $fuenteDatosEntradaId;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESO_TOTAL_FAMILIAR", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $ingresoTotalFamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOTAL_PERSONAS_COTIZANDO", type="integer", nullable=false)
     */
    private $totalPersonasCotizando;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Beneficiario
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Beneficiario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BENEFICIARIO_ID", referencedColumnName="id")
     * })
     */
    private $beneficiario;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\CondicionUnidadFamiliar
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\CondicionUnidadFamiliar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CONDICION_UNIDAD_FAMILIAR_ID", referencedColumnName="id")
     * })
     */
    private $condicionUnidadFamiliar;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\ProcedenciaBeneficio
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\ProcedenciaBeneficio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PROCEDENCIA_BENEFICIO_ID", referencedColumnName="id")
     * })
     */
    private $procedenciaBeneficio;

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
     * Set cantidadDispacitados
     *
     * @param integer $cantidadDispacitados
     * @return UnidadFamiliar
     */
    public function setCantidadDispacitados($cantidadDispacitados)
    {
        $this->cantidadDispacitados = $cantidadDispacitados;

        return $this;
    }

    /**
     * Get cantidadDispacitados
     *
     * @return integer 
     */
    public function getCantidadDispacitados()
    {
        return $this->cantidadDispacitados;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return UnidadFamiliar
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
     * @return UnidadFamiliar
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
     * Set fuenteDatosEntradaId
     *
     * @param integer $fuenteDatosEntradaId
     * @return UnidadFamiliar
     */
    public function setFuenteDatosEntradaId($fuenteDatosEntradaId)
    {
        $this->fuenteDatosEntradaId = $fuenteDatosEntradaId;

        return $this;
    }

    /**
     * Get fuenteDatosEntradaId
     *
     * @return integer 
     */
    public function getFuenteDatosEntradaId()
    {
        return $this->fuenteDatosEntradaId;
    }

    /**
     * Set ingresoTotalFamiliar
     *
     * @param string $ingresoTotalFamiliar
     * @return UnidadFamiliar
     */
    public function setIngresoTotalFamiliar($ingresoTotalFamiliar)
    {
        $this->ingresoTotalFamiliar = $ingresoTotalFamiliar;

        return $this;
    }

    /**
     * Get ingresoTotalFamiliar
     *
     * @return string 
     */
    public function getIngresoTotalFamiliar()
    {
        return $this->ingresoTotalFamiliar;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return UnidadFamiliar
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
     * Set totalPersonasCotizando
     *
     * @param integer $totalPersonasCotizando
     * @return UnidadFamiliar
     */
    public function setTotalPersonasCotizando($totalPersonasCotizando)
    {
        $this->totalPersonasCotizando = $totalPersonasCotizando;

        return $this;
    }

    /**
     * Get totalPersonasCotizando
     *
     * @return integer 
     */
    public function getTotalPersonasCotizando()
    {
        return $this->totalPersonasCotizando;
    }

    /**
     * Set beneficiario
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiario
     * @return UnidadFamiliar
     */
    public function setBeneficiario(\Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiario = null)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\Beneficiario 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set condicionUnidadFamiliar
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\CondicionUnidadFamiliar $condicionUnidadFamiliar
     * @return UnidadFamiliar
     */
    public function setCondicionUnidadFamiliar(\Srpv\ProtocolizacionBundle\Entity\CondicionUnidadFamiliar $condicionUnidadFamiliar = null)
    {
        $this->condicionUnidadFamiliar = $condicionUnidadFamiliar;

        return $this;
    }

    /**
     * Get condicionUnidadFamiliar
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\CondicionUnidadFamiliar 
     */
    public function getCondicionUnidadFamiliar()
    {
        return $this->condicionUnidadFamiliar;
    }

    /**
     * Set procedenciaBeneficio
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\ProcedenciaBeneficio $procedenciaBeneficio
     * @return UnidadFamiliar
     */
    public function setProcedenciaBeneficio(\Srpv\ProtocolizacionBundle\Entity\ProcedenciaBeneficio $procedenciaBeneficio = null)
    {
        $this->procedenciaBeneficio = $procedenciaBeneficio;

        return $this;
    }

    /**
     * Get procedenciaBeneficio
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\ProcedenciaBeneficio 
     */
    public function getProcedenciaBeneficio()
    {
        return $this->procedenciaBeneficio;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return UnidadFamiliar
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
