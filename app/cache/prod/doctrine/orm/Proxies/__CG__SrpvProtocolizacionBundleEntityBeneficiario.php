<?php

namespace Proxies\__CG__\Srpv\ProtocolizacionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Beneficiario extends \Srpv\ProtocolizacionBundle\Entity\Beneficiario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'avCallEsqCarr', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'cotizaFaov', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'direccionAnterior', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'direccionEmpresa', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'estatusBeneficiario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fechaUltimoCenso', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'ingresoDeclarado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'ingresoMensual', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'ingresoPromedioFaov', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'nombreEmpresa', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'protocolizado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'rif', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'sectorTrabajoId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'telefonoTrabajo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'urbanBarrio', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'zona', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'geoEstado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'geoMunicipio', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'geoParroquia', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'persona', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'condicionTrabajo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fuenteIngreso', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'genCargo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'relacionTrabajo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'usuario');
        }

        return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'avCallEsqCarr', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'cotizaFaov', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'direccionAnterior', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'direccionEmpresa', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'estatusBeneficiario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fechaUltimoCenso', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'ingresoDeclarado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'ingresoMensual', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'ingresoPromedioFaov', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'nombreEmpresa', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'protocolizado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'rif', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'sectorTrabajoId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'telefonoTrabajo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'urbanBarrio', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'zona', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'geoEstado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'geoMunicipio', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'geoParroquia', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'persona', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'condicionTrabajo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'fuenteIngreso', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'genCargo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'relacionTrabajo', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Beneficiario' . "\0" . 'usuario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Beneficiario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvCallEsqCarr($avCallEsqCarr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvCallEsqCarr', array($avCallEsqCarr));

        return parent::setAvCallEsqCarr($avCallEsqCarr);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvCallEsqCarr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvCallEsqCarr', array());

        return parent::getAvCallEsqCarr();
    }

    /**
     * {@inheritDoc}
     */
    public function setCotizaFaov($cotizaFaov)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCotizaFaov', array($cotizaFaov));

        return parent::setCotizaFaov($cotizaFaov);
    }

    /**
     * {@inheritDoc}
     */
    public function getCotizaFaov()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCotizaFaov', array());

        return parent::getCotizaFaov();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccionAnterior($direccionAnterior)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccionAnterior', array($direccionAnterior));

        return parent::setDireccionAnterior($direccionAnterior);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccionAnterior()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccionAnterior', array());

        return parent::getDireccionAnterior();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccionEmpresa($direccionEmpresa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccionEmpresa', array($direccionEmpresa));

        return parent::setDireccionEmpresa($direccionEmpresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccionEmpresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccionEmpresa', array());

        return parent::getDireccionEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstatusBeneficiario($estatusBeneficiario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstatusBeneficiario', array($estatusBeneficiario));

        return parent::setEstatusBeneficiario($estatusBeneficiario);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstatusBeneficiario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstatusBeneficiario', array());

        return parent::getEstatusBeneficiario();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaActualizacion($fechaActualizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaActualizacion', array($fechaActualizacion));

        return parent::setFechaActualizacion($fechaActualizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaActualizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaActualizacion', array());

        return parent::getFechaActualizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCreacion($fechaCreacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCreacion', array($fechaCreacion));

        return parent::setFechaCreacion($fechaCreacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCreacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCreacion', array());

        return parent::getFechaCreacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaUltimoCenso($fechaUltimoCenso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaUltimoCenso', array($fechaUltimoCenso));

        return parent::setFechaUltimoCenso($fechaUltimoCenso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaUltimoCenso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaUltimoCenso', array());

        return parent::getFechaUltimoCenso();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngresoDeclarado($ingresoDeclarado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngresoDeclarado', array($ingresoDeclarado));

        return parent::setIngresoDeclarado($ingresoDeclarado);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresoDeclarado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresoDeclarado', array());

        return parent::getIngresoDeclarado();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngresoMensual($ingresoMensual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngresoMensual', array($ingresoMensual));

        return parent::setIngresoMensual($ingresoMensual);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresoMensual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresoMensual', array());

        return parent::getIngresoMensual();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngresoPromedioFaov($ingresoPromedioFaov)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngresoPromedioFaov', array($ingresoPromedioFaov));

        return parent::setIngresoPromedioFaov($ingresoPromedioFaov);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresoPromedioFaov()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresoPromedioFaov', array());

        return parent::getIngresoPromedioFaov();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreEmpresa($nombreEmpresa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreEmpresa', array($nombreEmpresa));

        return parent::setNombreEmpresa($nombreEmpresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreEmpresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreEmpresa', array());

        return parent::getNombreEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function setProtocolizado($protocolizado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProtocolizado', array($protocolizado));

        return parent::setProtocolizado($protocolizado);
    }

    /**
     * {@inheritDoc}
     */
    public function getProtocolizado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProtocolizado', array());

        return parent::getProtocolizado();
    }

    /**
     * {@inheritDoc}
     */
    public function setRif($rif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRif', array($rif));

        return parent::setRif($rif);
    }

    /**
     * {@inheritDoc}
     */
    public function getRif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRif', array());

        return parent::getRif();
    }

    /**
     * {@inheritDoc}
     */
    public function setSectorTrabajoId($sectorTrabajoId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSectorTrabajoId', array($sectorTrabajoId));

        return parent::setSectorTrabajoId($sectorTrabajoId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSectorTrabajoId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSectorTrabajoId', array());

        return parent::getSectorTrabajoId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefonoTrabajo($telefonoTrabajo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefonoTrabajo', array($telefonoTrabajo));

        return parent::setTelefonoTrabajo($telefonoTrabajo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefonoTrabajo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefonoTrabajo', array());

        return parent::getTelefonoTrabajo();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrbanBarrio($urbanBarrio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrbanBarrio', array($urbanBarrio));

        return parent::setUrbanBarrio($urbanBarrio);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrbanBarrio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrbanBarrio', array());

        return parent::getUrbanBarrio();
    }

    /**
     * {@inheritDoc}
     */
    public function setZona($zona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZona', array($zona));

        return parent::setZona($zona);
    }

    /**
     * {@inheritDoc}
     */
    public function getZona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZona', array());

        return parent::getZona();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeoEstado(\Comunes\TablasBundle\Entity\GeoEstado $geoEstado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeoEstado', array($geoEstado));

        return parent::setGeoEstado($geoEstado);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeoEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeoEstado', array());

        return parent::getGeoEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeoMunicipio(\Comunes\TablasBundle\Entity\GeoMunicipio $geoMunicipio = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeoMunicipio', array($geoMunicipio));

        return parent::setGeoMunicipio($geoMunicipio);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeoMunicipio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeoMunicipio', array());

        return parent::getGeoMunicipio();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeoParroquia(\Comunes\TablasBundle\Entity\GeoParroquia $geoParroquia = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeoParroquia', array($geoParroquia));

        return parent::setGeoParroquia($geoParroquia);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeoParroquia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeoParroquia', array());

        return parent::getGeoParroquia();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersona(\Comunes\TablasBundle\Entity\Persona $persona = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersona', array($persona));

        return parent::setPersona($persona);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersona', array());

        return parent::getPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setCondicionTrabajo(\Srpv\ProtocolizacionBundle\Entity\CondicionTrabajo $condicionTrabajo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondicionTrabajo', array($condicionTrabajo));

        return parent::setCondicionTrabajo($condicionTrabajo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCondicionTrabajo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondicionTrabajo', array());

        return parent::getCondicionTrabajo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFuenteIngreso(\Srpv\ProtocolizacionBundle\Entity\FuenteIngreso $fuenteIngreso = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFuenteIngreso', array($fuenteIngreso));

        return parent::setFuenteIngreso($fuenteIngreso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFuenteIngreso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFuenteIngreso', array());

        return parent::getFuenteIngreso();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenCargo(\Comunes\TablasBundle\Entity\GenCargo $genCargo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenCargo', array($genCargo));

        return parent::setGenCargo($genCargo);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenCargo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenCargo', array());

        return parent::getGenCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelacionTrabajo(\Srpv\ProtocolizacionBundle\Entity\RelacionTrabajo $relacionTrabajo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelacionTrabajo', array($relacionTrabajo));

        return parent::setRelacionTrabajo($relacionTrabajo);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelacionTrabajo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelacionTrabajo', array());

        return parent::getRelacionTrabajo();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\Comunes\SecurityBundle\Entity\Usuario $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
    }

}