<?php

namespace Comunes\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="USUARIO", indexes={@ORM\Index(name="IDX_1D204E47E2F136F2", columns={"GEN_BANCO_ID"}), @ORM\Index(name="IDX_1D204E476F3929D7", columns={"GEO_ESTADO_ID"}), @ORM\Index(name="IDX_1D204E477181F310", columns={"GEO_MUNICIPIO_ID"}), @ORM\Index(name="IDX_1D204E475D9234E7", columns={"GEO_PARROQUIA_ID"}), @ORM\Index(name="IDX_1D204E47CB1103DD", columns={"ORGANIZACION_ID"}), @ORM\Index(name="IDX_1D204E4777AE1CD", columns={"GEN_PREG_CONFIRMACION_ID"}), @ORM\Index(name="IDX_1D204E478D640B57", columns={"GEN_PROBLEMA_ID"}), @ORM\Index(name="IDX_1D204E4763F89AA7", columns={"SYS_SISTEMA_ID"}), @ORM\Index(name="IDX_1D204E47C62AD666", columns={"PERSONA_ID"}), @ORM\Index(name="IDX_1D204E47131C2CE", columns={"DEPARTAMENTO_ID"}), @ORM\Index(name="IDX_1D204E4799C94272", columns={"GEN_TIPO_USUARIO_ID"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="USUARIO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDO", type="string", length=100, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="CALLE", type="string", length=100, nullable=true)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMBIAR_CLAVE", type="string", length=1, nullable=true)
     */
    private $cambiarClave;

    /**
     * @var string
     *
     * @ORM\Column(name="CLAVE", type="string", length=100, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_TELEFONO", type="string", length=4, nullable=true)
     */
    private $codigoTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO", type="string", length=40, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="CUENTA_HABILITADA", type="string", length=1, nullable=true)
     */
    private $cuentaHabilitada;

    /**
     * @var integer
     *
     * @ORM\Column(name="EMPRESA_ID", type="integer", nullable=true)
     */
    private $empresaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CADUCIDAD", type="date", nullable=true)
     */
    private $fechaCaducidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_VENCIMIENTO_ESTADO", type="date", nullable=true)
     */
    private $fechaVencimientoEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="GEN_OPERADOR_FINANCIERO_ID", type="integer", nullable=true)
     */
    private $genOperadorFinancieroId;

    /**
     * @var integer
     *
     * @ORM\Column(name="INTENTOS", type="integer", nullable=true)
     */
    private $intentos;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="NUM_CASA_EDIF", type="string", length=100, nullable=true)
     */
    private $numCasaEdif;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="PUNTO_REFERENCIA", type="string", length=100, nullable=true)
     */
    private $puntoReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPUESTA", type="string", length=100, nullable=true)
     */
    private $respuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTOR", type="string", length=100, nullable=true)
     */
    private $sector;

    /**
     * @var string
     *
     * @ORM\Column(name="SIREVIH_WEB", type="string", length=1, nullable=true)
     */
    private $sirevihWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="string", length=7, nullable=true)
     */
    private $telefono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ULTIMO_ACCESO", type="date", nullable=true)
     */
    private $ultimoAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO", type="string", length=100, nullable=true)
     */
    private $usuario;

    /**
     * @var \Comunes\TablasBundle\Entity\GenBanco
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenBanco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_BANCO_ID", referencedColumnName="id")
     * })
     */
    private $genBanco;

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
     * @var \Comunes\SecurityBundle\Entity\Organizacion
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Organizacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ORGANIZACION_ID", referencedColumnName="id")
     * })
     */
    private $organizacion;

    /**
     * @var \Comunes\SecurityBundle\Entity\GenPregConfirmacion
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\GenPregConfirmacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_PREG_CONFIRMACION_ID", referencedColumnName="id")
     * })
     */
    private $genPregConfirmacion;

    /**
     * @var \Comunes\SecurityBundle\Entity\GenProblema
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\GenProblema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_PROBLEMA_ID", referencedColumnName="id")
     * })
     */
    private $genProblema;

    /**
     * @var \Comunes\SecurityBundle\Entity\SysSistema
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\SysSistema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SYS_SISTEMA_ID", referencedColumnName="id")
     * })
     */
    private $sysSistema;

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
     * @var \Comunes\SecurityBundle\Entity\Departamento
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DEPARTAMENTO_ID", referencedColumnName="id")
     * })
     */
    private $departamento;

    /**
     * @var \Comunes\SecurityBundle\Entity\GenTipoUsuario
     *
     * @ORM\ManyToOne(targetEntity="Comunes\SecurityBundle\Entity\GenTipoUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_TIPO_USUARIO_ID", referencedColumnName="id")
     * })
     */
    private $genTipoUsuario;



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
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Usuario
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set cambiarClave
     *
     * @param string $cambiarClave
     * @return Usuario
     */
    public function setCambiarClave($cambiarClave)
    {
        $this->cambiarClave = $cambiarClave;

        return $this;
    }

    /**
     * Get cambiarClave
     *
     * @return string 
     */
    public function getCambiarClave()
    {
        return $this->cambiarClave;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set codigoTelefono
     *
     * @param string $codigoTelefono
     * @return Usuario
     */
    public function setCodigoTelefono($codigoTelefono)
    {
        $this->codigoTelefono = $codigoTelefono;

        return $this;
    }

    /**
     * Get codigoTelefono
     *
     * @return string 
     */
    public function getCodigoTelefono()
    {
        return $this->codigoTelefono;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set cuentaHabilitada
     *
     * @param string $cuentaHabilitada
     * @return Usuario
     */
    public function setCuentaHabilitada($cuentaHabilitada)
    {
        $this->cuentaHabilitada = $cuentaHabilitada;

        return $this;
    }

    /**
     * Get cuentaHabilitada
     *
     * @return string 
     */
    public function getCuentaHabilitada()
    {
        return $this->cuentaHabilitada;
    }

    /**
     * Set empresaId
     *
     * @param integer $empresaId
     * @return Usuario
     */
    public function setEmpresaId($empresaId)
    {
        $this->empresaId = $empresaId;

        return $this;
    }

    /**
     * Get empresaId
     *
     * @return integer 
     */
    public function getEmpresaId()
    {
        return $this->empresaId;
    }

    /**
     * Set fechaCaducidad
     *
     * @param \DateTime $fechaCaducidad
     * @return Usuario
     */
    public function setFechaCaducidad($fechaCaducidad)
    {
        $this->fechaCaducidad = $fechaCaducidad;

        return $this;
    }

    /**
     * Get fechaCaducidad
     *
     * @return \DateTime 
     */
    public function getFechaCaducidad()
    {
        return $this->fechaCaducidad;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Usuario
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
     * Set fechaVencimientoEstado
     *
     * @param \DateTime $fechaVencimientoEstado
     * @return Usuario
     */
    public function setFechaVencimientoEstado($fechaVencimientoEstado)
    {
        $this->fechaVencimientoEstado = $fechaVencimientoEstado;

        return $this;
    }

    /**
     * Get fechaVencimientoEstado
     *
     * @return \DateTime 
     */
    public function getFechaVencimientoEstado()
    {
        return $this->fechaVencimientoEstado;
    }

    /**
     * Set genOperadorFinancieroId
     *
     * @param integer $genOperadorFinancieroId
     * @return Usuario
     */
    public function setGenOperadorFinancieroId($genOperadorFinancieroId)
    {
        $this->genOperadorFinancieroId = $genOperadorFinancieroId;

        return $this;
    }

    /**
     * Get genOperadorFinancieroId
     *
     * @return integer 
     */
    public function getGenOperadorFinancieroId()
    {
        return $this->genOperadorFinancieroId;
    }

    /**
     * Set intentos
     *
     * @param integer $intentos
     * @return Usuario
     */
    public function setIntentos($intentos)
    {
        $this->intentos = $intentos;

        return $this;
    }

    /**
     * Get intentos
     *
     * @return integer 
     */
    public function getIntentos()
    {
        return $this->intentos;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set numCasaEdif
     *
     * @param string $numCasaEdif
     * @return Usuario
     */
    public function setNumCasaEdif($numCasaEdif)
    {
        $this->numCasaEdif = $numCasaEdif;

        return $this;
    }

    /**
     * Get numCasaEdif
     *
     * @return string 
     */
    public function getNumCasaEdif()
    {
        return $this->numCasaEdif;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Usuario
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
     * Set puntoReferencia
     *
     * @param string $puntoReferencia
     * @return Usuario
     */
    public function setPuntoReferencia($puntoReferencia)
    {
        $this->puntoReferencia = $puntoReferencia;

        return $this;
    }

    /**
     * Get puntoReferencia
     *
     * @return string 
     */
    public function getPuntoReferencia()
    {
        return $this->puntoReferencia;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     * @return Usuario
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set sector
     *
     * @param string $sector
     * @return Usuario
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set sirevihWeb
     *
     * @param string $sirevihWeb
     * @return Usuario
     */
    public function setSirevihWeb($sirevihWeb)
    {
        $this->sirevihWeb = $sirevihWeb;

        return $this;
    }

    /**
     * Get sirevihWeb
     *
     * @return string 
     */
    public function getSirevihWeb()
    {
        return $this->sirevihWeb;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set ultimoAcceso
     *
     * @param \DateTime $ultimoAcceso
     * @return Usuario
     */
    public function setUltimoAcceso($ultimoAcceso)
    {
        $this->ultimoAcceso = $ultimoAcceso;

        return $this;
    }

    /**
     * Get ultimoAcceso
     *
     * @return \DateTime 
     */
    public function getUltimoAcceso()
    {
        return $this->ultimoAcceso;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set genBanco
     *
     * @param \Comunes\TablasBundle\Entity\GenBanco $genBanco
     * @return Usuario
     */
    public function setGenBanco(\Comunes\TablasBundle\Entity\GenBanco $genBanco = null)
    {
        $this->genBanco = $genBanco;

        return $this;
    }

    /**
     * Get genBanco
     *
     * @return \Comunes\TablasBundle\Entity\GenBanco 
     */
    public function getGenBanco()
    {
        return $this->genBanco;
    }

    /**
     * Set geoEstado
     *
     * @param \Comunes\TablasBundle\Entity\GeoEstado $geoEstado
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * Set organizacion
     *
     * @param \Comunes\SecurityBundle\Entity\Organizacion $organizacion
     * @return Usuario
     */
    public function setOrganizacion(\Comunes\SecurityBundle\Entity\Organizacion $organizacion = null)
    {
        $this->organizacion = $organizacion;

        return $this;
    }

    /**
     * Get organizacion
     *
     * @return \Comunes\SecurityBundle\Entity\Organizacion 
     */
    public function getOrganizacion()
    {
        return $this->organizacion;
    }

    /**
     * Set genPregConfirmacion
     *
     * @param \Comunes\SecurityBundle\Entity\GenPregConfirmacion $genPregConfirmacion
     * @return Usuario
     */
    public function setGenPregConfirmacion(\Comunes\SecurityBundle\Entity\GenPregConfirmacion $genPregConfirmacion = null)
    {
        $this->genPregConfirmacion = $genPregConfirmacion;

        return $this;
    }

    /**
     * Get genPregConfirmacion
     *
     * @return \Comunes\SecurityBundle\Entity\GenPregConfirmacion 
     */
    public function getGenPregConfirmacion()
    {
        return $this->genPregConfirmacion;
    }

    /**
     * Set genProblema
     *
     * @param \Comunes\SecurityBundle\Entity\GenProblema $genProblema
     * @return Usuario
     */
    public function setGenProblema(\Comunes\SecurityBundle\Entity\GenProblema $genProblema = null)
    {
        $this->genProblema = $genProblema;

        return $this;
    }

    /**
     * Get genProblema
     *
     * @return \Comunes\SecurityBundle\Entity\GenProblema 
     */
    public function getGenProblema()
    {
        return $this->genProblema;
    }

    /**
     * Set sysSistema
     *
     * @param \Comunes\SecurityBundle\Entity\SysSistema $sysSistema
     * @return Usuario
     */
    public function setSysSistema(\Comunes\SecurityBundle\Entity\SysSistema $sysSistema = null)
    {
        $this->sysSistema = $sysSistema;

        return $this;
    }

    /**
     * Get sysSistema
     *
     * @return \Comunes\SecurityBundle\Entity\SysSistema 
     */
    public function getSysSistema()
    {
        return $this->sysSistema;
    }

    /**
     * Set persona
     *
     * @param \Comunes\TablasBundle\Entity\Persona $persona
     * @return Usuario
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
     * Set departamento
     *
     * @param \Comunes\SecurityBundle\Entity\Departamento $departamento
     * @return Usuario
     */
    public function setDepartamento(\Comunes\SecurityBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \Comunes\SecurityBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set genTipoUsuario
     *
     * @param \Comunes\SecurityBundle\Entity\GenTipoUsuario $genTipoUsuario
     * @return Usuario
     */
    public function setGenTipoUsuario(\Comunes\SecurityBundle\Entity\GenTipoUsuario $genTipoUsuario = null)
    {
        $this->genTipoUsuario = $genTipoUsuario;

        return $this;
    }

    /**
     * Get genTipoUsuario
     *
     * @return \Comunes\SecurityBundle\Entity\GenTipoUsuario 
     */
    public function getGenTipoUsuario()
    {
        return $this->genTipoUsuario;
    }
}
