<?php

namespace Proxies\__CG__\Srpv\ProtocolizacionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GacetasPuntosCta extends \Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'descripcion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'estatus', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'fechaPublicacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'nroDecreto', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'nroGaceta', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'nroPtoCta', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'observaciones');
        }

        return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'descripcion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'estatus', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'fechaPublicacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'nroDecreto', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'nroGaceta', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'nroPtoCta', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\GacetasPuntosCta' . "\0" . 'observaciones');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GacetasPuntosCta $proxy) {
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
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstatus($estatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstatus', array($estatus));

        return parent::setEstatus($estatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstatus', array());

        return parent::getEstatus();
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
    public function setFechaPublicacion($fechaPublicacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaPublicacion', array($fechaPublicacion));

        return parent::setFechaPublicacion($fechaPublicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaPublicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaPublicacion', array());

        return parent::getFechaPublicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroDecreto($nroDecreto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroDecreto', array($nroDecreto));

        return parent::setNroDecreto($nroDecreto);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroDecreto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroDecreto', array());

        return parent::getNroDecreto();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroGaceta($nroGaceta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroGaceta', array($nroGaceta));

        return parent::setNroGaceta($nroGaceta);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroGaceta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroGaceta', array());

        return parent::getNroGaceta();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroPtoCta($nroPtoCta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroPtoCta', array($nroPtoCta));

        return parent::setNroPtoCta($nroPtoCta);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroPtoCta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroPtoCta', array());

        return parent::getNroPtoCta();
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

}
