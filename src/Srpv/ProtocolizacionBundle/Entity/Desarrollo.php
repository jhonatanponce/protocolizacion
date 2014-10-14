<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Desarrollo
 *
 * @ORM\Table(name="DESARROLLO", indexes={@ORM\Index(name="IDX_DAC6569CAB9CF394", columns={"FUENTE_FINANCIAMIENTO_ID"}), @ORM\Index(name="IDX_DAC6569C6F3929D7", columns={"GEO_ESTADO_ID"}), @ORM\Index(name="IDX_DAC6569C7181F310", columns={"GEO_MUNICIPIO_ID"}), @ORM\Index(name="IDX_DAC6569C5D9234E7", columns={"GEO_PARROQUIA_ID"}), @ORM\Index(name="IDX_DAC6569CE8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_DAC6569C38D19D78", columns={"ENTE_EJECUTOR_ID"}), @ORM\Index(name="IDX_DAC6569C79F45E9B", columns={"FUENTE_DATOS_ENTRADA_ID"})})
 * @ORM\Entity
 */
class Desarrollo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DESARROLLO_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="COORDENADAS", type="string", length=200, nullable=true)
     */
    private $coordenadas;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=300, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTATUS_DESARROLLO_ID", type="integer", nullable=false)
     */
    private $estatusDesarrolloId;

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
     * @ORM\Column(name="FECHA_TRANSFERENCIA", type="date", nullable=true)
     */
    private $fechaTransferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_ESTE", type="string", length=200, nullable=true)
     */
    private $linderoEste;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_NORTE", type="string", length=200, nullable=true)
     */
    private $linderoNorte;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_OESTE", type="string", length=200, nullable=true)
     */
    private $linderoOeste;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_SUR", type="string", length=200, nullable=true)
     */
    private $linderoSur;

    /**
     * @var string
     *
     * @ORM\Column(name="LOTE_TERRENO_MT2", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $loteTerrenoMt2;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULARIDAD_DEL_TERRENO", type="string", length=1, nullable=true)
     */
    private $titularidadDelTerreno;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOTAL_VIVIENDAS", type="integer", nullable=true)
     */
    private $totalViviendas;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOTAL_VIVIENDAS_PROTOCOLIZADAS", type="integer", nullable=true)
     */
    private $totalViviendasProtocolizadas;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FUENTE_FINANCIAMIENTO_ID", referencedColumnName="id")
     * })
     */
    private $fuenteFinanciamiento;

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
     * @var \Comunes\SecurityBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USUARIO_ID", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\EnteEjecutor
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\EnteEjecutor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ENTE_EJECUTOR_ID", referencedColumnName="id")
     * })
     */
    private $enteEjecutor;

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
     * @return Desarrollo
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
     * Set coordenadas
     *
     * @param string $coordenadas
     * @return Desarrollo
     */
    public function setCoordenadas($coordenadas)
    {
        $this->coordenadas = $coordenadas;

        return $this;
    }

    /**
     * Get coordenadas
     *
     * @return string 
     */
    public function getCoordenadas()
    {
        return $this->coordenadas;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Desarrollo
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
     * Set estatusDesarrolloId
     *
     * @param integer $estatusDesarrolloId
     * @return Desarrollo
     */
    public function setEstatusDesarrolloId($estatusDesarrolloId)
    {
        $this->estatusDesarrolloId = $estatusDesarrolloId;

        return $this;
    }

    /**
     * Get estatusDesarrolloId
     *
     * @return integer 
     */
    public function getEstatusDesarrolloId()
    {
        return $this->estatusDesarrolloId;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return Desarrollo
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
     * @return Desarrollo
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
     * Set fechaTransferencia
     *
     * @param \DateTime $fechaTransferencia
     * @return Desarrollo
     */
    public function setFechaTransferencia($fechaTransferencia)
    {
        $this->fechaTransferencia = $fechaTransferencia;

        return $this;
    }

    /**
     * Get fechaTransferencia
     *
     * @return \DateTime 
     */
    public function getFechaTransferencia()
    {
        return $this->fechaTransferencia;
    }

    /**
     * Set linderoEste
     *
     * @param string $linderoEste
     * @return Desarrollo
     */
    public function setLinderoEste($linderoEste)
    {
        $this->linderoEste = $linderoEste;

        return $this;
    }

    /**
     * Get linderoEste
     *
     * @return string 
     */
    public function getLinderoEste()
    {
        return $this->linderoEste;
    }

    /**
     * Set linderoNorte
     *
     * @param string $linderoNorte
     * @return Desarrollo
     */
    public function setLinderoNorte($linderoNorte)
    {
        $this->linderoNorte = $linderoNorte;

        return $this;
    }

    /**
     * Get linderoNorte
     *
     * @return string 
     */
    public function getLinderoNorte()
    {
        return $this->linderoNorte;
    }

    /**
     * Set linderoOeste
     *
     * @param string $linderoOeste
     * @return Desarrollo
     */
    public function setLinderoOeste($linderoOeste)
    {
        $this->linderoOeste = $linderoOeste;

        return $this;
    }

    /**
     * Get linderoOeste
     *
     * @return string 
     */
    public function getLinderoOeste()
    {
        return $this->linderoOeste;
    }

    /**
     * Set linderoSur
     *
     * @param string $linderoSur
     * @return Desarrollo
     */
    public function setLinderoSur($linderoSur)
    {
        $this->linderoSur = $linderoSur;

        return $this;
    }

    /**
     * Get linderoSur
     *
     * @return string 
     */
    public function getLinderoSur()
    {
        return $this->linderoSur;
    }

    /**
     * Set loteTerrenoMt2
     *
     * @param string $loteTerrenoMt2
     * @return Desarrollo
     */
    public function setLoteTerrenoMt2($loteTerrenoMt2)
    {
        $this->loteTerrenoMt2 = $loteTerrenoMt2;

        return $this;
    }

    /**
     * Get loteTerrenoMt2
     *
     * @return string 
     */
    public function getLoteTerrenoMt2()
    {
        return $this->loteTerrenoMt2;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Desarrollo
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
     * Set titularidadDelTerreno
     *
     * @param string $titularidadDelTerreno
     * @return Desarrollo
     */
    public function setTitularidadDelTerreno($titularidadDelTerreno)
    {
        $this->titularidadDelTerreno = $titularidadDelTerreno;

        return $this;
    }

    /**
     * Get titularidadDelTerreno
     *
     * @return string 
     */
    public function getTitularidadDelTerreno()
    {
        return $this->titularidadDelTerreno;
    }

    /**
     * Set totalViviendas
     *
     * @param integer $totalViviendas
     * @return Desarrollo
     */
    public function setTotalViviendas($totalViviendas)
    {
        $this->totalViviendas = $totalViviendas;

        return $this;
    }

    /**
     * Get totalViviendas
     *
     * @return integer 
     */
    public function getTotalViviendas()
    {
        return $this->totalViviendas;
    }

    /**
     * Set totalViviendasProtocolizadas
     *
     * @param integer $totalViviendasProtocolizadas
     * @return Desarrollo
     */
    public function setTotalViviendasProtocolizadas($totalViviendasProtocolizadas)
    {
        $this->totalViviendasProtocolizadas = $totalViviendasProtocolizadas;

        return $this;
    }

    /**
     * Get totalViviendasProtocolizadas
     *
     * @return integer 
     */
    public function getTotalViviendasProtocolizadas()
    {
        return $this->totalViviendasProtocolizadas;
    }

    /**
     * Set urbanBarrio
     *
     * @param string $urbanBarrio
     * @return Desarrollo
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
     * @return Desarrollo
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
     * Set fuenteFinanciamiento
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento $fuenteFinanciamiento
     * @return Desarrollo
     */
    public function setFuenteFinanciamiento(\Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento $fuenteFinanciamiento = null)
    {
        $this->fuenteFinanciamiento = $fuenteFinanciamiento;

        return $this;
    }

    /**
     * Get fuenteFinanciamiento
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento 
     */
    public function getFuenteFinanciamiento()
    {
        return $this->fuenteFinanciamiento;
    }

    /**
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return Desarrollo
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
     * @return Desarrollo
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
     * @return Desarrollo
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
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return Desarrollo
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
     * Set enteEjecutor
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\EnteEjecutor $enteEjecutor
     * @return Desarrollo
     */
    public function setEnteEjecutor(\Srpv\ProtocolizacionBundle\Entity\EnteEjecutor $enteEjecutor = null)
    {
        $this->enteEjecutor = $enteEjecutor;

        return $this;
    }

    /**
     * Get enteEjecutor
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\EnteEjecutor 
     */
    public function getEnteEjecutor()
    {
        return $this->enteEjecutor;
    }

    /**
     * Set fuenteDatosEntrada
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada $fuenteDatosEntrada
     * @return Desarrollo
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
}
