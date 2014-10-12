<?php

namespace Comunes\TablasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="PERSONA", indexes={@ORM\Index(name="persona_indx1", columns={"NACIONALIDAD", "CEDULA"}), @ORM\Index(name="IDX_6EA04881710E63A5", columns={"GEN_EDO_CIVIL_ID"}), @ORM\Index(name="IDX_6EA04881C767F447", columns={"GEN_SEXO_ID"}), @ORM\Index(name="IDX_6EA04881C68F31C", columns={"GEO_PAIS_NAC_ID"}), @ORM\Index(name="IDX_6EA04881157C8273", columns={"GEO_ESTADO_NAC_ID"}), @ORM\Index(name="IDX_6EA04881A8EBFDF9", columns={"GEO_MUNICIPIO_NAC_ID"}), @ORM\Index(name="IDX_6EA04881E55CD74E", columns={"GEN_GRADO_INSTRUCCION_ID"}), @ORM\Index(name="IDX_6EA048816CAB95E1", columns={"GEN_OCUPACION_ID"})})
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="PERSONA_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="CEDULA", type="integer", nullable=true)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_HAB", type="string", length=4, nullable=true)
     */
    private $codigoHab;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_MOVIL", type="string", length=4, nullable=true)
     */
    private $codigoMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO3", type="string", length=4, nullable=true)
     */
    private $codigo3;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO_ALTERNO", type="string", length=60, nullable=true)
     */
    private $correoAlterno;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO_PRINCIPAL", type="string", length=60, nullable=true)
     */
    private $correoPrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="DISCAPACIDAD", type="string", length=1, nullable=true)
     */
    private $discapacidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="FAMILIAR", type="integer", nullable=true)
     */
    private $familiar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NACIMIENTO", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="NACIONALIDAD", type="string", length=1, nullable=true)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_COMPLETO", type="string", length=200, nullable=true)
     */
    private $nombreCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_ONIDEX", type="string", length=1, nullable=true)
     */
    private $noOnidex;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=250, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="PASAPORTE", type="string", length=35, nullable=true)
     */
    private $pasaporte;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIMER_APELLIDO", type="string", length=100, nullable=true)
     */
    private $primerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIMER_NOMBRE", type="string", length=100, nullable=true)
     */
    private $primerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="SEGUNDO_APELLIDO", type="string", length=100, nullable=true)
     */
    private $segundoApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="SEGUNDO_NOMBRE", type="string", length=100, nullable=true)
     */
    private $segundoNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="SYS_SISTEMA_ID", type="integer", nullable=true)
     */
    private $sysSistemaId;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_HAB", type="string", length=7, nullable=true)
     */
    private $telefonoHab;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_MOVIL", type="string", length=7, nullable=true)
     */
    private $telefonoMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO3", type="string", length=7, nullable=true)
     */
    private $telefono3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ULTIMO_CENSO", type="date", nullable=true)
     */
    private $ultimoCenso;

    /**
     * @var \Comunes\TablasBundle\Entity\GenEdoCivil
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenEdoCivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_EDO_CIVIL_ID", referencedColumnName="id")
     * })
     */
    private $genEdoCivil;

    /**
     * @var \Comunes\TablasBundle\Entity\GenSexo
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenSexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_SEXO_ID", referencedColumnName="id")
     * })
     */
    private $genSexo;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoPais
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_PAIS_NAC_ID", referencedColumnName="id")
     * })
     */
    private $geoPaisNac;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoEstado
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_ESTADO_NAC_ID", referencedColumnName="id")
     * })
     */
    private $geoEstadoNac;

    /**
     * @var \Comunes\TablasBundle\Entity\GeoMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GeoMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEO_MUNICIPIO_NAC_ID", referencedColumnName="id")
     * })
     */
    private $geoMunicipioNac;

    /**
     * @var \Comunes\TablasBundle\Entity\GenGradoInstruccion
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenGradoInstruccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_GRADO_INSTRUCCION_ID", referencedColumnName="id")
     * })
     */
    private $genGradoInstruccion;

    /**
     * @var \Comunes\TablasBundle\Entity\GenOcupacion
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenOcupacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_OCUPACION_ID", referencedColumnName="id")
     * })
     */
    private $genOcupacion;



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
     * @return Persona
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
     * Set codigoHab
     *
     * @param string $codigoHab
     * @return Persona
     */
    public function setCodigoHab($codigoHab)
    {
        $this->codigoHab = $codigoHab;

        return $this;
    }

    /**
     * Get codigoHab
     *
     * @return string 
     */
    public function getCodigoHab()
    {
        return $this->codigoHab;
    }

    /**
     * Set codigoMovil
     *
     * @param string $codigoMovil
     * @return Persona
     */
    public function setCodigoMovil($codigoMovil)
    {
        $this->codigoMovil = $codigoMovil;

        return $this;
    }

    /**
     * Get codigoMovil
     *
     * @return string 
     */
    public function getCodigoMovil()
    {
        return $this->codigoMovil;
    }

    /**
     * Set codigo3
     *
     * @param string $codigo3
     * @return Persona
     */
    public function setCodigo3($codigo3)
    {
        $this->codigo3 = $codigo3;

        return $this;
    }

    /**
     * Get codigo3
     *
     * @return string 
     */
    public function getCodigo3()
    {
        return $this->codigo3;
    }

    /**
     * Set correoAlterno
     *
     * @param string $correoAlterno
     * @return Persona
     */
    public function setCorreoAlterno($correoAlterno)
    {
        $this->correoAlterno = $correoAlterno;

        return $this;
    }

    /**
     * Get correoAlterno
     *
     * @return string 
     */
    public function getCorreoAlterno()
    {
        return $this->correoAlterno;
    }

    /**
     * Set correoPrincipal
     *
     * @param string $correoPrincipal
     * @return Persona
     */
    public function setCorreoPrincipal($correoPrincipal)
    {
        $this->correoPrincipal = $correoPrincipal;

        return $this;
    }

    /**
     * Get correoPrincipal
     *
     * @return string 
     */
    public function getCorreoPrincipal()
    {
        return $this->correoPrincipal;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Persona
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set discapacidad
     *
     * @param string $discapacidad
     * @return Persona
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;

        return $this;
    }

    /**
     * Get discapacidad
     *
     * @return string 
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * Set familiar
     *
     * @param integer $familiar
     * @return Persona
     */
    public function setFamiliar($familiar)
    {
        $this->familiar = $familiar;

        return $this;
    }

    /**
     * Get familiar
     *
     * @return integer 
     */
    public function getFamiliar()
    {
        return $this->familiar;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Persona
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     * @return Persona
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
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     * @return Persona
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
     * Set noOnidex
     *
     * @param string $noOnidex
     * @return Persona
     */
    public function setNoOnidex($noOnidex)
    {
        $this->noOnidex = $noOnidex;

        return $this;
    }

    /**
     * Get noOnidex
     *
     * @return string 
     */
    public function getNoOnidex()
    {
        return $this->noOnidex;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Persona
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
     * Set pasaporte
     *
     * @param string $pasaporte
     * @return Persona
     */
    public function setPasaporte($pasaporte)
    {
        $this->pasaporte = $pasaporte;

        return $this;
    }

    /**
     * Get pasaporte
     *
     * @return string 
     */
    public function getPasaporte()
    {
        return $this->pasaporte;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     * @return Persona
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set primerNombre
     *
     * @param string $primerNombre
     * @return Persona
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get primerNombre
     *
     * @return string 
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     * @return Persona
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string 
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set segundoNombre
     *
     * @param string $segundoNombre
     * @return Persona
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    /**
     * Get segundoNombre
     *
     * @return string 
     */
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set sysSistemaId
     *
     * @param integer $sysSistemaId
     * @return Persona
     */
    public function setSysSistemaId($sysSistemaId)
    {
        $this->sysSistemaId = $sysSistemaId;

        return $this;
    }

    /**
     * Get sysSistemaId
     *
     * @return integer 
     */
    public function getSysSistemaId()
    {
        return $this->sysSistemaId;
    }

    /**
     * Set telefonoHab
     *
     * @param string $telefonoHab
     * @return Persona
     */
    public function setTelefonoHab($telefonoHab)
    {
        $this->telefonoHab = $telefonoHab;

        return $this;
    }

    /**
     * Get telefonoHab
     *
     * @return string 
     */
    public function getTelefonoHab()
    {
        return $this->telefonoHab;
    }

    /**
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     * @return Persona
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;

        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string 
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * Set telefono3
     *
     * @param string $telefono3
     * @return Persona
     */
    public function setTelefono3($telefono3)
    {
        $this->telefono3 = $telefono3;

        return $this;
    }

    /**
     * Get telefono3
     *
     * @return string 
     */
    public function getTelefono3()
    {
        return $this->telefono3;
    }

    /**
     * Set ultimoCenso
     *
     * @param \DateTime $ultimoCenso
     * @return Persona
     */
    public function setUltimoCenso($ultimoCenso)
    {
        $this->ultimoCenso = $ultimoCenso;

        return $this;
    }

    /**
     * Get ultimoCenso
     *
     * @return \DateTime 
     */
    public function getUltimoCenso()
    {
        return $this->ultimoCenso;
    }

    /**
     * Set genEdoCivil
     *
     * @param \Comunes\TablasBundle\Entity\GenEdoCivil $genEdoCivil
     * @return Persona
     */
    public function setGenEdoCivil(\Comunes\TablasBundle\Entity\GenEdoCivil $genEdoCivil = null)
    {
        $this->genEdoCivil = $genEdoCivil;

        return $this;
    }

    /**
     * Get genEdoCivil
     *
     * @return \Comunes\TablasBundle\Entity\GenEdoCivil 
     */
    public function getGenEdoCivil()
    {
        return $this->genEdoCivil;
    }

    /**
     * Set genSexo
     *
     * @param \Comunes\TablasBundle\Entity\GenSexo $genSexo
     * @return Persona
     */
    public function setGenSexo(\Comunes\TablasBundle\Entity\GenSexo $genSexo = null)
    {
        $this->genSexo = $genSexo;

        return $this;
    }

    /**
     * Get genSexo
     *
     * @return \Comunes\TablasBundle\Entity\GenSexo 
     */
    public function getGenSexo()
    {
        return $this->genSexo;
    }

    /**
     * Set geoPaisNac
     *
     * @param \Comunes\TablasBundle\Entity\GeoPais $geoPaisNac
     * @return Persona
     */
    public function setGeoPaisNac(\Comunes\TablasBundle\Entity\GeoPais $geoPaisNac = null)
    {
        $this->geoPaisNac = $geoPaisNac;

        return $this;
    }

    /**
     * Get geoPaisNac
     *
     * @return \Comunes\TablasBundle\Entity\GeoPais 
     */
    public function getGeoPaisNac()
    {
        return $this->geoPaisNac;
    }

    /**
     * Set geoEstadoNac
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstadoNac
     * @return Persona
     */
    public function setGeoEstadoNac(\Comunes\TablasBundle\Entity\GeoEstado $geoEstadoNac = null)
    {
        $this->geoEstadoNac = $geoEstadoNac;

        return $this;
    }

    /**
     * Get geoEstadoNac
     *
     * @return \Comunes\TablasBundle\Entity\GeoEstado 
     */
    public function getGeoEstadoNac()
    {
        return $this->geoEstadoNac;
    }

    /**
     * Set geoMunicipioNac
     *
     * @param \Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipioNac
     * @return Persona
     */
    public function setGeoMunicipioNac(\Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipioNac = null)
    {
        $this->geoMunicipioNac = $geoMunicipioNac;

        return $this;
    }

    /**
     * Get geoMunicipioNac
     *
     * @return \Comunes\TablasBundle\Entity\GeoMunicipio 
     */
    public function getGeoMunicipioNac()
    {
        return $this->geoMunicipioNac;
    }

    /**
     * Set genGradoInstruccion
     *
     * @param \Comunes\TablasBundle\Entity\GenGradoInstruccion $genGradoInstruccion
     * @return Persona
     */
    public function setGenGradoInstruccion(\Comunes\TablasBundle\Entity\GenGradoInstruccion $genGradoInstruccion = null)
    {
        $this->genGradoInstruccion = $genGradoInstruccion;

        return $this;
    }

    /**
     * Get genGradoInstruccion
     *
     * @return \Comunes\TablasBundle\Entity\GenGradoInstruccion 
     */
    public function getGenGradoInstruccion()
    {
        return $this->genGradoInstruccion;
    }

    /**
     * Set genOcupacion
     *
     * @param \Comunes\TablasBundle\Entity\GenOcupacion $genOcupacion
     * @return Persona
     */
    public function setGenOcupacion(\Comunes\TablasBundle\Entity\GenOcupacion $genOcupacion = null)
    {
        $this->genOcupacion = $genOcupacion;

        return $this;
    }

    /**
     * Get genOcupacion
     *
     * @return \Comunes\TablasBundle\Entity\GenOcupacion 
     */
    public function getGenOcupacion()
    {
        return $this->genOcupacion;
    }
}
