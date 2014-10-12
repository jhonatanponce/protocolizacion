<?php

namespace Proxies\__CG__\Comunes\SecurityBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \Comunes\SecurityBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'apellido', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'calle', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'cambiarClave', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'clave', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'codigoTelefono', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'correo', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'cuentaHabilitada', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'empresaId', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'fechaCaducidad', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'fechaCreacion', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'fechaVencimientoEstado', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genOperadorFinancieroId', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'intentos', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'numCasaEdif', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'observaciones', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'puntoReferencia', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'respuesta', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'sector', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'sirevihWeb', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'telefono', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'ultimoAcceso', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'usuario', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genBanco', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'geoEstado', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'geoMunicipio', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'geoParroquia', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'organizacion', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genPregConfirmacion', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genProblema', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'sysSistema', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'persona', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'departamento', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genTipoUsuario');
        }

        return array('__isInitialized__', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'apellido', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'calle', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'cambiarClave', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'clave', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'codigoTelefono', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'correo', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'cuentaHabilitada', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'empresaId', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'fechaCaducidad', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'fechaCreacion', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'fechaVencimientoEstado', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genOperadorFinancieroId', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'intentos', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'numCasaEdif', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'observaciones', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'puntoReferencia', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'respuesta', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'sector', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'sirevihWeb', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'telefono', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'ultimoAcceso', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'usuario', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genBanco', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'geoEstado', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'geoMunicipio', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'geoParroquia', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'organizacion', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genPregConfirmacion', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genProblema', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'sysSistema', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'persona', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'departamento', '' . "\0" . 'Comunes\\SecurityBundle\\Entity\\Usuario' . "\0" . 'genTipoUsuario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
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
    public function setApellido($apellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellido', array($apellido));

        return parent::setApellido($apellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellido', array());

        return parent::getApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalle($calle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalle', array($calle));

        return parent::setCalle($calle);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalle', array());

        return parent::getCalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCambiarClave($cambiarClave)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCambiarClave', array($cambiarClave));

        return parent::setCambiarClave($cambiarClave);
    }

    /**
     * {@inheritDoc}
     */
    public function getCambiarClave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCambiarClave', array());

        return parent::getCambiarClave();
    }

    /**
     * {@inheritDoc}
     */
    public function setClave($clave)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClave', array($clave));

        return parent::setClave($clave);
    }

    /**
     * {@inheritDoc}
     */
    public function getClave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClave', array());

        return parent::getClave();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoTelefono($codigoTelefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoTelefono', array($codigoTelefono));

        return parent::setCodigoTelefono($codigoTelefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoTelefono', array());

        return parent::getCodigoTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreo($correo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreo', array($correo));

        return parent::setCorreo($correo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreo', array());

        return parent::getCorreo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuentaHabilitada($cuentaHabilitada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuentaHabilitada', array($cuentaHabilitada));

        return parent::setCuentaHabilitada($cuentaHabilitada);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuentaHabilitada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuentaHabilitada', array());

        return parent::getCuentaHabilitada();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpresaId($empresaId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpresaId', array($empresaId));

        return parent::setEmpresaId($empresaId);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpresaId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpresaId', array());

        return parent::getEmpresaId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCaducidad($fechaCaducidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCaducidad', array($fechaCaducidad));

        return parent::setFechaCaducidad($fechaCaducidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCaducidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCaducidad', array());

        return parent::getFechaCaducidad();
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
    public function setFechaVencimientoEstado($fechaVencimientoEstado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaVencimientoEstado', array($fechaVencimientoEstado));

        return parent::setFechaVencimientoEstado($fechaVencimientoEstado);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaVencimientoEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaVencimientoEstado', array());

        return parent::getFechaVencimientoEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenOperadorFinancieroId($genOperadorFinancieroId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenOperadorFinancieroId', array($genOperadorFinancieroId));

        return parent::setGenOperadorFinancieroId($genOperadorFinancieroId);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenOperadorFinancieroId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenOperadorFinancieroId', array());

        return parent::getGenOperadorFinancieroId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntentos($intentos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntentos', array($intentos));

        return parent::setIntentos($intentos);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntentos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntentos', array());

        return parent::getIntentos();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumCasaEdif($numCasaEdif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumCasaEdif', array($numCasaEdif));

        return parent::setNumCasaEdif($numCasaEdif);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumCasaEdif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumCasaEdif', array());

        return parent::getNumCasaEdif();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservaciones($observaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservaciones', array($observaciones));

        return parent::setObservaciones($observaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservaciones', array());

        return parent::getObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuntoReferencia($puntoReferencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuntoReferencia', array($puntoReferencia));

        return parent::setPuntoReferencia($puntoReferencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntoReferencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntoReferencia', array());

        return parent::getPuntoReferencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setRespuesta($respuesta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRespuesta', array($respuesta));

        return parent::setRespuesta($respuesta);
    }

    /**
     * {@inheritDoc}
     */
    public function getRespuesta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRespuesta', array());

        return parent::getRespuesta();
    }

    /**
     * {@inheritDoc}
     */
    public function setSector($sector)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSector', array($sector));

        return parent::setSector($sector);
    }

    /**
     * {@inheritDoc}
     */
    public function getSector()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSector', array());

        return parent::getSector();
    }

    /**
     * {@inheritDoc}
     */
    public function setSirevihWeb($sirevihWeb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSirevihWeb', array($sirevihWeb));

        return parent::setSirevihWeb($sirevihWeb);
    }

    /**
     * {@inheritDoc}
     */
    public function getSirevihWeb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSirevihWeb', array());

        return parent::getSirevihWeb();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setUltimoAcceso($ultimoAcceso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUltimoAcceso', array($ultimoAcceso));

        return parent::setUltimoAcceso($ultimoAcceso);
    }

    /**
     * {@inheritDoc}
     */
    public function getUltimoAcceso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUltimoAcceso', array());

        return parent::getUltimoAcceso();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
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

    /**
     * {@inheritDoc}
     */
    public function setGenBanco(\Comunes\TablasBundle\Entity\GenBanco $genBanco = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenBanco', array($genBanco));

        return parent::setGenBanco($genBanco);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenBanco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenBanco', array());

        return parent::getGenBanco();
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
    public function setOrganizacion(\Comunes\SecurityBundle\Entity\Organizacion $organizacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganizacion', array($organizacion));

        return parent::setOrganizacion($organizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizacion', array());

        return parent::getOrganizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenPregConfirmacion(\Comunes\SecurityBundle\Entity\GenPregConfirmacion $genPregConfirmacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenPregConfirmacion', array($genPregConfirmacion));

        return parent::setGenPregConfirmacion($genPregConfirmacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenPregConfirmacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenPregConfirmacion', array());

        return parent::getGenPregConfirmacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenProblema(\Comunes\SecurityBundle\Entity\GenProblema $genProblema = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenProblema', array($genProblema));

        return parent::setGenProblema($genProblema);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenProblema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenProblema', array());

        return parent::getGenProblema();
    }

    /**
     * {@inheritDoc}
     */
    public function setSysSistema(\Comunes\SecurityBundle\Entity\SysSistema $sysSistema = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSysSistema', array($sysSistema));

        return parent::setSysSistema($sysSistema);
    }

    /**
     * {@inheritDoc}
     */
    public function getSysSistema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSysSistema', array());

        return parent::getSysSistema();
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
    public function setDepartamento(\Comunes\SecurityBundle\Entity\Departamento $departamento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartamento', array($departamento));

        return parent::setDepartamento($departamento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartamento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartamento', array());

        return parent::getDepartamento();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenTipoUsuario(\Comunes\SecurityBundle\Entity\GenTipoUsuario $genTipoUsuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenTipoUsuario', array($genTipoUsuario));

        return parent::setGenTipoUsuario($genTipoUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenTipoUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenTipoUsuario', array());

        return parent::getGenTipoUsuario();
    }

}
