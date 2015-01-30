<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beneficiario
 *
 * @ORM\Table(name="BENEFICIARIO", indexes={@ORM\Index(name="IDX_7DE2FF071438476C", columns={"ESTATUS_BENEFICIARIO_ID"}), @ORM\Index(name="IDX_7DE2FF076F3929D7", columns={"GEO_ESTADO_ID"}), @ORM\Index(name="IDX_7DE2FF077181F310", columns={"GEO_MUNICIPIO_ID"}), @ORM\Index(name="IDX_7DE2FF075D9234E7", columns={"GEO_PARROQUIA_ID"}), @ORM\Index(name="IDX_7DE2FF07C62AD666", columns={"PERSONA_ID"}), @ORM\Index(name="IDX_7DE2FF07815AE485", columns={"CONDICION_TRABAJO_ID"}), @ORM\Index(name="IDX_7DE2FF074F205C23", columns={"FUENTE_INGRESO_ID"}), @ORM\Index(name="IDX_7DE2FF07AFCF524C", columns={"GEN_CARGO_ID"}), @ORM\Index(name="IDX_7DE2FF07826B5331", columns={"RELACION_TRABAJO_ID"}), @ORM\Index(name="IDX_7DE2FF07E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class Beneficiario
{
   /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="BENEFICIARIO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="AV_CALL_ESQ_CARR", type="string", length=200, nullable=true)
     */
    private $avCallEsqCarr;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_TRAB", type="string", length=4, nullable=true)
     */
    private $codigoTrab;

    /**
     * @var string
     *
     * @ORM\Column(name="COTIZA_FAOV", type="string", length=1, nullable=false)
     */
    private $cotizaFaov;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION_ANTERIOR", type="string", length=200, nullable=false)
     */
    private $direccionAnterior;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION_EMPRESA", type="string", length=200, nullable=true)
     */
    private $direccionEmpresa;

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
     * @ORM\Column(name="FECHA_ULTIMO_CENSO", type="date", nullable=false)
     */
    private $fechaUltimoCenso;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESO_DECLARADO", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $ingresoDeclarado;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESO_MENSUAL", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $ingresoMensual;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESO_PROMEDIO_FAOV", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $ingresoPromedioFaov;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_EMPRESA", type="string", length=200, nullable=true)
     */
    private $nombreEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="PROTOCOLIZADO", type="string", length=1, nullable=false)
     */
    private $protocolizado;

    /**
     * @var string
     *
     * @ORM\Column(name="RIF", type="string", length=10, nullable=false)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_TRABAJO", type="string", length=7, nullable=true)
     */
    private $telefonoTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="URBAN_BARRIO", type="string", length=200, nullable=true)
     */
    private $urbanBarrio;

    /**
     * @var string
     *
     * @ORM\Column(name="ZONA", type="string", length=200, nullable=true)
     */
    private $zona;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\SectorTrabajo
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\SectorTrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SECTOR_TRABAJO_ID", referencedColumnName="id")
     * })
     */
    private $sectorTrabajo;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\EstatusBeneficiario
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\EstatusBeneficiario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ESTATUS_BENEFICIARIO_ID", referencedColumnName="id")
     * })
     */
    private $estatusBeneficiario;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoEstado
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_ESTADO_ID", referencedColumnName="id")
     * })
     */
    private $geoEstado;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_MUNICIPIO_ID", referencedColumnName="id")
     * })
     */
    private $geoMunicipio;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoParroquia
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoParroquia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_PARROQUIA_ID", referencedColumnName="id")
     * })
     */
    private $geoParroquia;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\CondicionTrabajo
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\CondicionTrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CONDICION_TRABAJO_ID", referencedColumnName="id")
     * })
     */
    private $condicionTrabajo;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\FuenteIngreso
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\FuenteIngreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FUENTE_INGRESO_ID", referencedColumnName="id")
     * })
     */
    private $fuenteIngreso;

    /**
     * @var \Comunes\TablasBundle\Entity\GenCargo
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenCargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_CARGO_ID", referencedColumnName="id")
     * })
     */
    private $genCargo;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\RelacionTrabajo
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\RelacionTrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RELACION_TRABAJO_ID", referencedColumnName="id")
     * })
     */
    private $relacionTrabajo;

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
     * Set avCallEsqCarr
     *
     * @param string $avCallEsqCarr
     * @return Beneficiario
     */
    public function setAvCallEsqCarr($avCallEsqCarr)
    {
        $this->avCallEsqCarr = $avCallEsqCarr;

        return $this;
    }

    /**
     * Get avCallEsqCarr
     *
     * @return string 
     */
    public function getAvCallEsqCarr()
    {
        return $this->avCallEsqCarr;
    }
    
    /**
     * Set codigoTrab
     *
     * @param string $codigoTrab
     * @return Beneficiario
     */
    public function setCodigoTrab($codigoTrab)
    {
        $this->codigoTrab = $codigoTrab;

        return $this;
    }

    /**
     * Get codigoTrab
     *
     * @return string 
     */
    public function getCodigoTrab()
    {
        return $this->codigoTrab;
    }


    /**
     * Set cotizaFaov
     *
     * @param string $cotizaFaov
     * @return Beneficiario
     */
    public function setCotizaFaov($cotizaFaov)
    {
        $this->cotizaFaov = $cotizaFaov;

        return $this;
    }

    /**
     * Get cotizaFaov
     *
     * @return string 
     */
    public function getCotizaFaov()
    {
        return $this->cotizaFaov;
    }

    /**
     * Set direccionAnterior
     *
     * @param string $direccionAnterior
     * @return Beneficiario
     */
    public function setDireccionAnterior($direccionAnterior)
    {
        $this->direccionAnterior = $direccionAnterior;

        return $this;
    }

    /**
     * Get direccionAnterior
     *
     * @return string 
     */
    public function getDireccionAnterior()
    {
        return $this->direccionAnterior;
    }

    /**
     * Set direccionEmpresa
     *
     * @param string $direccionEmpresa
     * @return Beneficiario
     */
    public function setDireccionEmpresa($direccionEmpresa)
    {
        $this->direccionEmpresa = $direccionEmpresa;

        return $this;
    }

    /**
     * Get direccionEmpresa
     *
     * @return string 
     */
    public function getDireccionEmpresa()
    {
        return $this->direccionEmpresa;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return Beneficiario
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
     * @return Beneficiario
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
     * Set fechaUltimoCenso
     *
     * @param \DateTime $fechaUltimoCenso
     * @return Beneficiario
     */
    public function setFechaUltimoCenso($fechaUltimoCenso)
    {
        $this->fechaUltimoCenso = $fechaUltimoCenso;

        return $this;
    }

    /**
     * Get fechaUltimoCenso
     *
     * @return \DateTime 
     */
    public function getFechaUltimoCenso()
    {
        return $this->fechaUltimoCenso;
    }

    /**
     * Set ingresoDeclarado
     *
     * @param string $ingresoDeclarado
     * @return Beneficiario
     */
    public function setIngresoDeclarado($ingresoDeclarado)
    {
        $this->ingresoDeclarado = $ingresoDeclarado;

        return $this;
    }

    /**
     * Get ingresoDeclarado
     *
     * @return string 
     */
    public function getIngresoDeclarado()
    {
        return $this->ingresoDeclarado;
    }

    /**
     * Set ingresoMensual
     *
     * @param string $ingresoMensual
     * @return Beneficiario
     */
    public function setIngresoMensual($ingresoMensual)
    {
        $this->ingresoMensual = $ingresoMensual;

        return $this;
    }

    /**
     * Get ingresoMensual
     *
     * @return string 
     */
    public function getIngresoMensual()
    {
        return $this->ingresoMensual;
    }

    /**
     * Set ingresoPromedioFaov
     *
     * @param string $ingresoPromedioFaov
     * @return Beneficiario
     */
    public function setIngresoPromedioFaov($ingresoPromedioFaov)
    {
        $this->ingresoPromedioFaov = $ingresoPromedioFaov;

        return $this;
    }

    /**
     * Get ingresoPromedioFaov
     *
     * @return string 
     */
    public function getIngresoPromedioFaov()
    {
        return $this->ingresoPromedioFaov;
    }

    /**
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     * @return Beneficiario
     */
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string 
     */
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    /**
     * Set protocolizado
     *
     * @param string $protocolizado
     * @return Beneficiario
     */
    public function setProtocolizado($protocolizado)
    {
        $this->protocolizado = $protocolizado;

        return $this;
    }

    /**
     * Get protocolizado
     *
     * @return string 
     */
    public function getProtocolizado()
    {
        return $this->protocolizado;
    }

    /**
     * Set rif
     *
     * @param string $rif
     * @return Beneficiario
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set telefonoTrabajo
     *
     * @param string $telefonoTrabajo
     * @return Beneficiario
     */
    public function setTelefonoTrabajo($telefonoTrabajo)
    {
        $this->telefonoTrabajo = $telefonoTrabajo;

        return $this;
    }

    /**
     * Get telefonoTrabajo
     *
     * @return string 
     */
    public function getTelefonoTrabajo()
    {
        return $this->telefonoTrabajo;
    }

    /**
     * Set urbanBarrio
     *
     * @param string $urbanBarrio
     * @return Beneficiario
     */
    public function setUrbanBarrio($urbanBarrio)
    {
        $this->urbanBarrio = $urbanBarrio;

        return $this;
    }

    /**
     * Get urbanBarrio
     *
     * @return string 
     */
    public function getUrbanBarrio()
    {
        return $this->urbanBarrio;
    }

    /**
     * Set zona
     *
     * @param string $zona
     * @return Beneficiario
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string 
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return Beneficiario
     */
    public function setGeoEstado(\Comunes\TablasBundle\Entity\GeoEstado $geoEstado = null)
    {
        $this->geoEstado = $geoEstado;

        return $this;
    }

    /**
     * Get geoEstado
     *
     * @return \Comunes\TablasBundle\Entity\GeoEstado 
     */
    public function getGeoEstado()
    {
        return $this->geoEstado;
    }

    /**
     * Set geoMunicipio
     *
     * @param \Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipio
     * @return Beneficiario
     */
    public function setGeoMunicipio(\Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipio = null)
    {
        $this->geoMunicipio = $geoMunicipio;

        return $this;
    }

    /**
     * Get geoMunicipio
     *
     * @return \Comunes\TablasBundle\Entity\GeoMunicipio 
     */
    public function getGeoMunicipio()
    {
        return $this->geoMunicipio;
    }

    /**
     * Set geoParroquia
     *
     * @param \Comunes\TablasBundle\Entity\GeoParroquia $geoParroquia
     * @return Beneficiario
     */
    public function setGeoParroquia(\Comunes\TablasBundle\Entity\GeoParroquia $geoParroquia = null)
    {
        $this->geoParroquia = $geoParroquia;

        return $this;
    }

    /**
     * Get geoParroquia
     *
     * @return \Comunes\TablasBundle\Entity\GeoParroquia 
     */
    public function getGeoParroquia()
    {
        return $this->geoParroquia;
    }

    /**
     * Set persona
     *
     * @param \Comunes\TablasBundle\Entity\Persona $persona
     * @return Beneficiario
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
     * Set condicionTrabajo
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\CondicionTrabajo $condicionTrabajo
     * @return Beneficiario
     */
    public function setCondicionTrabajo(\Srpv\ProtocolizacionBundle\Entity\CondicionTrabajo $condicionTrabajo = null)
    {
        $this->condicionTrabajo = $condicionTrabajo;

        return $this;
    }

    /**
     * Get condicionTrabajo
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\CondicionTrabajo 
     */
    public function getCondicionTrabajo()
    {
        return $this->condicionTrabajo;
    }

    /**
     * Set fuenteIngreso
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteIngreso $fuenteIngreso
     * @return Beneficiario
     */
    public function setFuenteIngreso(\Srpv\ProtocolizacionBundle\Entity\FuenteIngreso $fuenteIngreso = null)
    {
        $this->fuenteIngreso = $fuenteIngreso;

        return $this;
    }

    /**
     * Get fuenteIngreso
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\FuenteIngreso 
     */
    public function getFuenteIngreso()
    {
        return $this->fuenteIngreso;
    }

    /**
     * Set genCargo
     *
     * @param \Comunes\TablasBundle\Entity\GenCargo $genCargo
     * @return Beneficiario
     */
    public function setGenCargo(\Comunes\TablasBundle\Entity\GenCargo $genCargo = null)
    {
        $this->genCargo = $genCargo;

        return $this;
    }

    /**
     * Get genCargo
     *
     * @return \Comunes\TablasBundle\Entity\GenCargo 
     */
    public function getGenCargo()
    {
        return $this->genCargo;
    }

    /**
     * Set relacionTrabajo
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\RelacionTrabajo $relacionTrabajo
     * @return Beneficiario
     */
    public function setRelacionTrabajo(\Srpv\ProtocolizacionBundle\Entity\RelacionTrabajo $relacionTrabajo = null)
    {
        $this->relacionTrabajo = $relacionTrabajo;

        return $this;
    }

    /**
     * Get relacionTrabajo
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\RelacionTrabajo 
     */
    
    public function getRelacionTrabajo()
    {
        return $this->relacionTrabajo;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return Beneficiario
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
     * Set estatusBeneficiario
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\EstatusBeneficiario $estatusBeneficiario
     * @return Beneficiario
     */
    public function setEstatusBeneficiario(\Srpv\ProtocolizacionBundle\Entity\EstatusBeneficiario $estatusBeneficiario = null)
    {
        $this->estatusBeneficiario = $estatusBeneficiario;

        return $this;
    }

    /**
     * Get estatusBeneficiario
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\EstatusBeneficiario 
     */
    public function getEstatusBeneficiario()
    {
        return $this->estatusBeneficiario;
    }

    /**
     * Set sectorTrabajo
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\SectorTrabajo $sectorTrabajo
     * @return Beneficiario
     */
    public function setSectorTrabajo(\Srpv\ProtocolizacionBundle\Entity\SectorTrabajo $sectorTrabajo = null)
    {
        $this->sectorTrabajo = $sectorTrabajo;

        return $this;
    }

    /**
     * Get sectorTrabajo
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\SectorTrabajo 
     */
    public function getSectorTrabajo()
    {
        return $this->sectorTrabajo;
    }
}
