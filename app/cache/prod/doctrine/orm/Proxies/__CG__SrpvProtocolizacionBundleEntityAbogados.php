<?php

namespace Proxies\__CG__\Srpv\ProtocolizacionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Abogados extends \Srpv\ProtocolizacionBundle\Entity\Abogados implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'estatus', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'inpreabogado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'observaciones', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'oficina', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'usuario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'persona', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'tipoAbogado');
        }

        return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'estatus', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'inpreabogado', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'observaciones', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'oficina', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'usuario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'persona', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\Abogados' . "\0" . 'tipoAbogado');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Abogados $proxy) {
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
    public function setInpreabogado($inpreabogado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInpreabogado', array($inpreabogado));

        return parent::setInpreabogado($inpreabogado);
    }

    /**
     * {@inheritDoc}
     */
    public function getInpreabogado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInpreabogado', array());

        return parent::getInpreabogado();
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
    public function setOficina(\Srpv\ProtocolizacionBundle\Entity\Oficina $oficina = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOficina', array($oficina));

        return parent::setOficina($oficina);
    }

    /**
     * {@inheritDoc}
     */
    public function getOficina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOficina', array());

        return parent::getOficina();
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
    public function setTipoAbogado(\Srpv\ProtocolizacionBundle\Entity\TipoAbogado $tipoAbogado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoAbogado', array($tipoAbogado));

        return parent::setTipoAbogado($tipoAbogado);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoAbogado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoAbogado', array());

        return parent::getTipoAbogado();
    }

}