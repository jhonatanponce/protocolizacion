<?php

namespace Proxies\__CG__\Comunes\OrganismosPublicosBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Onidex extends \Comunes\OrganismosPublicosBundle\Entity\Onidex implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'id', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'nac', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'cedula', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'primerApellido', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'segundoApellido', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'primerNombre', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'segundoNombre', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'estatus');
        }

        return array('__isInitialized__', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'id', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'nac', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'cedula', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'primerApellido', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'segundoApellido', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'primerNombre', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'segundoNombre', '' . "\0" . 'Comunes\\OrganismosPublicosBundle\\Entity\\Onidex' . "\0" . 'estatus');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Onidex $proxy) {
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
    public function setNac($nac)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNac', array($nac));

        return parent::setNac($nac);
    }

    /**
     * {@inheritDoc}
     */
    public function getNac()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNac', array());

        return parent::getNac();
    }

    /**
     * {@inheritDoc}
     */
    public function setCedula($cedula)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCedula', array($cedula));

        return parent::setCedula($cedula);
    }

    /**
     * {@inheritDoc}
     */
    public function getCedula()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCedula', array());

        return parent::getCedula();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimerApellido($primerApellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimerApellido', array($primerApellido));

        return parent::setPrimerApellido($primerApellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimerApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimerApellido', array());

        return parent::getPrimerApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegundoApellido($segundoApellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegundoApellido', array($segundoApellido));

        return parent::setSegundoApellido($segundoApellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegundoApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegundoApellido', array());

        return parent::getSegundoApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimerNombre($primerNombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimerNombre', array($primerNombre));

        return parent::setPrimerNombre($primerNombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimerNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimerNombre', array());

        return parent::getPrimerNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegundoNombre($segundoNombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegundoNombre', array($segundoNombre));

        return parent::setSegundoNombre($segundoNombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegundoNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegundoNombre', array());

        return parent::getSegundoNombre();
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

}
