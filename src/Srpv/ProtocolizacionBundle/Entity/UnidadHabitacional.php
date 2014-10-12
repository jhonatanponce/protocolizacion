<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadHabitacional
 *
 * @ORM\Table(name="UNIDAD_HABITACIONAL", indexes={@ORM\Index(name="IDX_D3ABAFC479F45E9B", columns={"FUENTE_DATOS_ENTRADA_ID"}), @ORM\Index(name="IDX_D3ABAFC4A2441D43", columns={"DESARROLLO_ID"}), @ORM\Index(name="IDX_D3ABAFC428319DDA", columns={"ESTATUS_UNIDAD_HABITACIONAL_ID"}), @ORM\Index(name="IDX_D3ABAFC499CB0E9D", columns={"GEN_TIPO_INMUEBLE_ID"}), @ORM\Index(name="IDX_D3ABAFC427D19144", columns={"TIPO_DOCUMENTO_ID"}), @ORM\Index(name="IDX_D3ABAFC4E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class UnidadHabitacional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="UNIDAD_HABITACIONAL_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANO", type="integer", nullable=true)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASIENTO_REGISTRAL", type="integer", nullable=true)
     */
    private $asientoRegistral;

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
     * @ORM\Column(name="FECHA_REGISTRO", type="date", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @var integer
     *
     * @ORM\Column(name="FOLIO_REAL", type="integer", nullable=true)
     */
    private $folioReal;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_DOCUMENTO", type="string", length=50, nullable=true)
     */
    private $nroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_MATRICULA", type="string", length=100, nullable=true)
     */
    private $nroMatricula;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_PROTOCOLO", type="string", length=50, nullable=true)
     */
    private $nroProtocolo;

    /**
     * @var integer
     *
     * @ORM\Column(name="REGISTRO_PUBLICO_ID", type="integer", nullable=false)
     */
    private $registroPublicoId;

    /**
     * @var string
     *
     * @ORM\Column(name="TOMO", type="string", length=50, nullable=true)
     */
    private $tomo;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOTAL_UNIDADES", type="integer", nullable=false)
     */
    private $totalUnidades;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FUENTE_DATOS_ENTRADA_ID", referencedColumnName="id")
     * })
     */
    private $fuenteDatosEntrada;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Desarrollo
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Desarrollo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DESARROLLO_ID", referencedColumnName="id")
     * })
     */
    private $desarrollo;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\EstatusUnidadHabitacional
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\EstatusUnidadHabitacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ESTATUS_UNIDAD_HABITACIONAL_ID", referencedColumnName="id")
     * })
     */
    private $estatusUnidadHabitacional;

    /**
     * @var \Comunes\TablasBundle\Entity\GenTipoInmueble
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenTipoInmueble")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_TIPO_INMUEBLE_ID", referencedColumnName="id")
     * })
     */
    private $genTipoInmueble;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\TipoDocumento
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TipoDocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_DOCUMENTO_ID", referencedColumnName="id")
     * })
     */
    private $tipoDocumento;

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
     * Set ano
     *
     * @param integer $ano
     * @return UnidadHabitacional
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set asientoRegistral
     *
     * @param integer $asientoRegistral
     * @return UnidadHabitacional
     */
    public function setAsientoRegistral($asientoRegistral)
    {
        $this->asientoRegistral = $asientoRegistral;

        return $this;
    }

    /**
     * Get asientoRegistral
     *
     * @return integer 
     */
    public function getAsientoRegistral()
    {
        return $this->asientoRegistral;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return UnidadHabitacional
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
     * @return UnidadHabitacional
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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return UnidadHabitacional
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set folioReal
     *
     * @param integer $folioReal
     * @return UnidadHabitacional
     */
    public function setFolioReal($folioReal)
    {
        $this->folioReal = $folioReal;

        return $this;
    }

    /**
     * Get folioReal
     *
     * @return integer 
     */
    public function getFolioReal()
    {
        return $this->folioReal;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return UnidadHabitacional
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
     * Set nroDocumento
     *
     * @param string $nroDocumento
     * @return UnidadHabitacional
     */
    public function setNroDocumento($nroDocumento)
    {
        $this->nroDocumento = $nroDocumento;

        return $this;
    }

    /**
     * Get nroDocumento
     *
     * @return string 
     */
    public function getNroDocumento()
    {
        return $this->nroDocumento;
    }

    /**
     * Set nroMatricula
     *
     * @param string $nroMatricula
     * @return UnidadHabitacional
     */
    public function setNroMatricula($nroMatricula)
    {
        $this->nroMatricula = $nroMatricula;

        return $this;
    }

    /**
     * Get nroMatricula
     *
     * @return string 
     */
    public function getNroMatricula()
    {
        return $this->nroMatricula;
    }

    /**
     * Set nroProtocolo
     *
     * @param string $nroProtocolo
     * @return UnidadHabitacional
     */
    public function setNroProtocolo($nroProtocolo)
    {
        $this->nroProtocolo = $nroProtocolo;

        return $this;
    }

    /**
     * Get nroProtocolo
     *
     * @return string 
     */
    public function getNroProtocolo()
    {
        return $this->nroProtocolo;
    }

    /**
     * Set registroPublicoId
     *
     * @param integer $registroPublicoId
     * @return UnidadHabitacional
     */
    public function setRegistroPublicoId($registroPublicoId)
    {
        $this->registroPublicoId = $registroPublicoId;

        return $this;
    }

    /**
     * Get registroPublicoId
     *
     * @return integer 
     */
    public function getRegistroPublicoId()
    {
        return $this->registroPublicoId;
    }

    /**
     * Set tomo
     *
     * @param string $tomo
     * @return UnidadHabitacional
     */
    public function setTomo($tomo)
    {
        $this->tomo = $tomo;

        return $this;
    }

    /**
     * Get tomo
     *
     * @return string 
     */
    public function getTomo()
    {
        return $this->tomo;
    }

    /**
     * Set totalUnidades
     *
     * @param integer $totalUnidades
     * @return UnidadHabitacional
     */
    public function setTotalUnidades($totalUnidades)
    {
        $this->totalUnidades = $totalUnidades;

        return $this;
    }

    /**
     * Get totalUnidades
     *
     * @return integer 
     */
    public function getTotalUnidades()
    {
        return $this->totalUnidades;
    }

    /**
     * Set fuenteDatosEntrada
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada $fuenteDatosEntrada
     * @return UnidadHabitacional
     */
    public function setFuenteDatosEntrada(\Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada $fuenteDatosEntrada = null)
    {
        $this->fuenteDatosEntrada = $fuenteDatosEntrada;

        return $this;
    }

    /**
     * Get fuenteDatosEntrada
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada 
     */
    public function getFuenteDatosEntrada()
    {
        return $this->fuenteDatosEntrada;
    }

    /**
     * Set desarrollo
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Desarrollo $desarrollo
     * @return UnidadHabitacional
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
     * Set estatusUnidadHabitacional
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\EstatusUnidadHabitacional $estatusUnidadHabitacional
     * @return UnidadHabitacional
     */
    public function setEstatusUnidadHabitacional(\Srpv\ProtocolizacionBundle\Entity\EstatusUnidadHabitacional $estatusUnidadHabitacional = null)
    {
        $this->estatusUnidadHabitacional = $estatusUnidadHabitacional;

        return $this;
    }

    /**
     * Get estatusUnidadHabitacional
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\EstatusUnidadHabitacional 
     */
    public function getEstatusUnidadHabitacional()
    {
        return $this->estatusUnidadHabitacional;
    }

    /**
     * Set genTipoInmueble
     *
     * @param \Comunes\TablasBundle\Entity\GenTipoInmueble $genTipoInmueble
     * @return UnidadHabitacional
     */
    public function setGenTipoInmueble(\Comunes\TablasBundle\Entity\GenTipoInmueble $genTipoInmueble = null)
    {
        $this->genTipoInmueble = $genTipoInmueble;

        return $this;
    }

    /**
     * Get genTipoInmueble
     *
     * @return \Comunes\TablasBundle\Entity\GenTipoInmueble 
     */
    public function getGenTipoInmueble()
    {
        return $this->genTipoInmueble;
    }

    /**
     * Set tipoDocumento
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TipoDocumento $tipoDocumento
     * @return UnidadHabitacional
     */
    public function setTipoDocumento(\Srpv\ProtocolizacionBundle\Entity\TipoDocumento $tipoDocumento = null)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TipoDocumento 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return UnidadHabitacional
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
