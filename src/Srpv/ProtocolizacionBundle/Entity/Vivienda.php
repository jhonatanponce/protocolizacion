<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vivienda
 *
 * @ORM\Table(name="VIVIENDA", indexes={@ORM\Index(name="IDX_EBCC3792E02DDBB6", columns={"TIPO_VIVIENDA_ID"}), @ORM\Index(name="IDX_EBCC379279F45E9B", columns={"FUENTE_DATOS_ENTRADA_ID"}), @ORM\Index(name="IDX_EBCC3792E8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_EBCC379236962553", columns={"UNIDAD_HABITACIONAL_ID"})})
 * @ORM\Entity
 */
class Vivienda
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="VIVIENDA_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="COMEDOR", type="string", length=1, nullable=false)
     */
    private $comedor;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSTRUCCION_MT2", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $construccionMt2;

    /**
     * @var string
     *
     * @ORM\Column(name="COORDENADAS", type="string", length=200, nullable=true)
     */
    private $coordenadas;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_ESTAC", type="string", length=15, nullable=true)
     */
    private $descripcionEstac;

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
     * @ORM\Column(name="LAVANDERO", type="string", length=1, nullable=false)
     */
    private $lavandero;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_ESTE", type="string", length=200, nullable=false)
     */
    private $linderoEste;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_NORTE", type="string", length=200, nullable=false)
     */
    private $linderoNorte;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_OESTE", type="string", length=200, nullable=false)
     */
    private $linderoOeste;

    /**
     * @var string
     *
     * @ORM\Column(name="LINDERO_SUR", type="string", length=200, nullable=false)
     */
    private $linderoSur;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_BANOS", type="integer", nullable=false)
     */
    private $nroBanos;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_ESTACIONAMIENTOS", type="integer", nullable=false)
     */
    private $nroEstacionamientos;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_HABITACIONES", type="integer", nullable=false)
     */
    private $nroHabitaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_PISO", type="string", length=10, nullable=false)
     */
    private $nroPiso;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_VIVIENDA", type="string", length=10, nullable=false)
     */
    private $nroVivienda;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECIO_VIVIENDA", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $precioVivienda;

    /**
     * @var string
     *
     * @ORM\Column(name="SALA", type="string", length=1, nullable=false)
     */
    private $sala;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\TipoVivienda
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TipoVivienda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_VIVIENDA_ID", referencedColumnName="id")
     * })
     */
    private $tipoVivienda;

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
     * @var \Comunes\SecurityBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USUARIO_ID", referencedColumnName="id")
     * })
     */
    private $usuario;

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
     * Set comedor
     *
     * @param string $comedor
     * @return Vivienda
     */
    public function setComedor($comedor)
    {
        $this->comedor = $comedor;

        return $this;
    }

    /**
     * Get comedor
     *
     * @return string 
     */
    public function getComedor()
    {
        return $this->comedor;
    }

    /**
     * Set construccionMt2
     *
     * @param string $construccionMt2
     * @return Vivienda
     */
    public function setConstruccionMt2($construccionMt2)
    {
        $this->construccionMt2 = $construccionMt2;

        return $this;
    }

    /**
     * Get construccionMt2
     *
     * @return string 
     */
    public function getConstruccionMt2()
    {
        return $this->construccionMt2;
    }

    /**
     * Set coordenadas
     *
     * @param string $coordenadas
     * @return Vivienda
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
     * Set descripcionEstac
     *
     * @param string $descripcionEstac
     * @return Vivienda
     */
    public function setDescripcionEstac($descripcionEstac)
    {
        $this->descripcionEstac = $descripcionEstac;

        return $this;
    }

    /**
     * Get descripcionEstac
     *
     * @return string 
     */
    public function getDescripcionEstac()
    {
        return $this->descripcionEstac;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return Vivienda
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
     * @return Vivienda
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
     * Set lavandero
     *
     * @param string $lavandero
     * @return Vivienda
     */
    public function setLavandero($lavandero)
    {
        $this->lavandero = $lavandero;

        return $this;
    }

    /**
     * Get lavandero
     *
     * @return string 
     */
    public function getLavandero()
    {
        return $this->lavandero;
    }

    /**
     * Set linderoEste
     *
     * @param string $linderoEste
     * @return Vivienda
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
     * @return Vivienda
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
     * @return Vivienda
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
     * @return Vivienda
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
     * Set nroBanos
     *
     * @param integer $nroBanos
     * @return Vivienda
     */
    public function setNroBanos($nroBanos)
    {
        $this->nroBanos = $nroBanos;

        return $this;
    }

    /**
     * Get nroBanos
     *
     * @return integer 
     */
    public function getNroBanos()
    {
        return $this->nroBanos;
    }

    /**
     * Set nroEstacionamientos
     *
     * @param integer $nroEstacionamientos
     * @return Vivienda
     */
    public function setNroEstacionamientos($nroEstacionamientos)
    {
        $this->nroEstacionamientos = $nroEstacionamientos;

        return $this;
    }

    /**
     * Get nroEstacionamientos
     *
     * @return integer 
     */
    public function getNroEstacionamientos()
    {
        return $this->nroEstacionamientos;
    }

    /**
     * Set nroHabitaciones
     *
     * @param integer $nroHabitaciones
     * @return Vivienda
     */
    public function setNroHabitaciones($nroHabitaciones)
    {
        $this->nroHabitaciones = $nroHabitaciones;

        return $this;
    }

    /**
     * Get nroHabitaciones
     *
     * @return integer 
     */
    public function getNroHabitaciones()
    {
        return $this->nroHabitaciones;
    }

    /**
     * Set nroPiso
     *
     * @param string $nroPiso
     * @return Vivienda
     */
    public function setNroPiso($nroPiso)
    {
        $this->nroPiso = $nroPiso;

        return $this;
    }

    /**
     * Get nroPiso
     *
     * @return string 
     */
    public function getNroPiso()
    {
        return $this->nroPiso;
    }

    /**
     * Set nroVivienda
     *
     * @param string $nroVivienda
     * @return Vivienda
     */
    public function setNroVivienda($nroVivienda)
    {
        $this->nroVivienda = $nroVivienda;

        return $this;
    }

    /**
     * Get nroVivienda
     *
     * @return string 
     */
    public function getNroVivienda()
    {
        return $this->nroVivienda;
    }

    /**
     * Set precioVivienda
     *
     * @param string $precioVivienda
     * @return Vivienda
     */
    public function setPrecioVivienda($precioVivienda)
    {
        $this->precioVivienda = $precioVivienda;

        return $this;
    }

    /**
     * Get precioVivienda
     *
     * @return string 
     */
    public function getPrecioVivienda()
    {
        return $this->precioVivienda;
    }

    /**
     * Set sala
     *
     * @param string $sala
     * @return Vivienda
     */
    public function setSala($sala)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get sala
     *
     * @return string 
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set tipoVivienda
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TipoVivienda $tipoVivienda
     * @return Vivienda
     */
    public function setTipoVivienda(\Srpv\ProtocolizacionBundle\Entity\TipoVivienda $tipoVivienda = null)
    {
        $this->tipoVivienda = $tipoVivienda;

        return $this;
    }

    /**
     * Get tipoVivienda
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TipoVivienda 
     */
    public function getTipoVivienda()
    {
        return $this->tipoVivienda;
    }

    /**
     * Set fuenteDatosEntrada
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada $fuenteDatosEntrada
     * @return Vivienda
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
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return Vivienda
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
     * Set unidadHabitacional
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\UnidadHabitacional $unidadHabitacional
     * @return Vivienda
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
