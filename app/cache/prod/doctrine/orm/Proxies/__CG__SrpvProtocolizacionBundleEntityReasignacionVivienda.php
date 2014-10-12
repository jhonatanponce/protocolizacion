<?php

namespace Proxies\__CG__\Srpv\ProtocolizacionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ReasignacionVivienda extends \Srpv\ProtocolizacionBundle\Entity\ReasignacionVivienda implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'fechaReasignacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'observaciones', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'beneficiarioActual', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'beneficiarioAnterior', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'personaAutoriza', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'usuario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'tipoReasignacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'vivienda');
        }

        return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'fechaReasignacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'observaciones', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'beneficiarioActual', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'beneficiarioAnterior', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'personaAutoriza', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'usuario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'tipoReasignacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\ReasignacionVivienda' . "\0" . 'vivienda');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ReasignacionVivienda $proxy) {
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
    public function setFechaReasignacion($fechaReasignacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaReasignacion', array($fechaReasignacion));

        return parent::setFechaReasignacion($fechaReasignacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaReasignacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaReasignacion', array());

        return parent::getFechaReasignacion();
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
    public function setBeneficiarioActual(\Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiarioActual = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeneficiarioActual', array($beneficiarioActual));

        return parent::setBeneficiarioActual($beneficiarioActual);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeneficiarioActual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeneficiarioActual', array());

        return parent::getBeneficiarioActual();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeneficiarioAnterior(\Srpv\ProtocolizacionBundle\Entity\Beneficiario $beneficiarioAnterior = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeneficiarioAnterior', array($beneficiarioAnterior));

        return parent::setBeneficiarioAnterior($beneficiarioAnterior);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeneficiarioAnterior()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeneficiarioAnterior', array());

        return parent::getBeneficiarioAnterior();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersonaAutoriza(\Comunes\TablasBundle\Entity\Persona $personaAutoriza = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonaAutoriza', array($personaAutoriza));

        return parent::setPersonaAutoriza($personaAutoriza);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonaAutoriza()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonaAutoriza', array());

        return parent::getPersonaAutoriza();
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
    public function setTipoReasignacion(\Srpv\ProtocolizacionBundle\Entity\TipoReasignacion $tipoReasignacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoReasignacion', array($tipoReasignacion));

        return parent::setTipoReasignacion($tipoReasignacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoReasignacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoReasignacion', array());

        return parent::getTipoReasignacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVivienda(\Srpv\ProtocolizacionBundle\Entity\Vivienda $vivienda = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVivienda', array($vivienda));

        return parent::setVivienda($vivienda);
    }

    /**
     * {@inheritDoc}
     */
    public function getVivienda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVivienda', array());

        return parent::getVivienda();
    }

}
