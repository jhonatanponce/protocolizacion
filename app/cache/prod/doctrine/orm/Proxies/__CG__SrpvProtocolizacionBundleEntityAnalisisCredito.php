<?php

namespace Proxies\__CG__\Srpv\ProtocolizacionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AnalisisCredito extends \Srpv\ProtocolizacionBundle\Entity\AnalisisCredito implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'alicuotaFondoGarantia', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fechaProtocolizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fuenteDatosEntradaId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'ingresoTotalFamiliar', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoCredito', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoCuotaFinanciera', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoCuotaFTotal', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoInicial', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoPrimaInicialFg', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'nroCuentaBancario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'nroCuotas', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'nroSerialBancario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'plazoCreditoAno', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'plazoDiferido', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'plazoGracia', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'statusMigracionId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'subDirectoHabitacional', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'subViviendaPerdida', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tasaMoraId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tipoCuenta', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'usuario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tipoDocumento', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'unidadFamiliar', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'vivienda', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'genBanco', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tasaFongar', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tasaInteres');
        }

        return array('__isInitialized__', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'id', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'alicuotaFondoGarantia', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fechaActualizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fechaCreacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fechaProtocolizacion', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'fuenteDatosEntradaId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'ingresoTotalFamiliar', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoCredito', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoCuotaFinanciera', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoCuotaFTotal', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoInicial', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'montoPrimaInicialFg', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'nroCuentaBancario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'nroCuotas', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'nroSerialBancario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'plazoCreditoAno', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'plazoDiferido', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'plazoGracia', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'statusMigracionId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'subDirectoHabitacional', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'subViviendaPerdida', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tasaMoraId', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tipoCuenta', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'usuario', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tipoDocumento', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'unidadFamiliar', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'vivienda', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'genBanco', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tasaFongar', '' . "\0" . 'Srpv\\ProtocolizacionBundle\\Entity\\AnalisisCredito' . "\0" . 'tasaInteres');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AnalisisCredito $proxy) {
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
    public function setAlicuotaFondoGarantia($alicuotaFondoGarantia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlicuotaFondoGarantia', array($alicuotaFondoGarantia));

        return parent::setAlicuotaFondoGarantia($alicuotaFondoGarantia);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlicuotaFondoGarantia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlicuotaFondoGarantia', array());

        return parent::getAlicuotaFondoGarantia();
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
    public function setFechaProtocolizacion($fechaProtocolizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaProtocolizacion', array($fechaProtocolizacion));

        return parent::setFechaProtocolizacion($fechaProtocolizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaProtocolizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaProtocolizacion', array());

        return parent::getFechaProtocolizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFuenteDatosEntradaId($fuenteDatosEntradaId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFuenteDatosEntradaId', array($fuenteDatosEntradaId));

        return parent::setFuenteDatosEntradaId($fuenteDatosEntradaId);
    }

    /**
     * {@inheritDoc}
     */
    public function getFuenteDatosEntradaId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFuenteDatosEntradaId', array());

        return parent::getFuenteDatosEntradaId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngresoTotalFamiliar($ingresoTotalFamiliar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngresoTotalFamiliar', array($ingresoTotalFamiliar));

        return parent::setIngresoTotalFamiliar($ingresoTotalFamiliar);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresoTotalFamiliar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresoTotalFamiliar', array());

        return parent::getIngresoTotalFamiliar();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontoCredito($montoCredito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontoCredito', array($montoCredito));

        return parent::setMontoCredito($montoCredito);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontoCredito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontoCredito', array());

        return parent::getMontoCredito();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontoCuotaFinanciera($montoCuotaFinanciera)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontoCuotaFinanciera', array($montoCuotaFinanciera));

        return parent::setMontoCuotaFinanciera($montoCuotaFinanciera);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontoCuotaFinanciera()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontoCuotaFinanciera', array());

        return parent::getMontoCuotaFinanciera();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontoCuotaFTotal($montoCuotaFTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontoCuotaFTotal', array($montoCuotaFTotal));

        return parent::setMontoCuotaFTotal($montoCuotaFTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontoCuotaFTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontoCuotaFTotal', array());

        return parent::getMontoCuotaFTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontoInicial($montoInicial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontoInicial', array($montoInicial));

        return parent::setMontoInicial($montoInicial);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontoInicial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontoInicial', array());

        return parent::getMontoInicial();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontoPrimaInicialFg($montoPrimaInicialFg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontoPrimaInicialFg', array($montoPrimaInicialFg));

        return parent::setMontoPrimaInicialFg($montoPrimaInicialFg);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontoPrimaInicialFg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontoPrimaInicialFg', array());

        return parent::getMontoPrimaInicialFg();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroCuentaBancario($nroCuentaBancario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroCuentaBancario', array($nroCuentaBancario));

        return parent::setNroCuentaBancario($nroCuentaBancario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroCuentaBancario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroCuentaBancario', array());

        return parent::getNroCuentaBancario();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroCuotas($nroCuotas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroCuotas', array($nroCuotas));

        return parent::setNroCuotas($nroCuotas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroCuotas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroCuotas', array());

        return parent::getNroCuotas();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroSerialBancario($nroSerialBancario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroSerialBancario', array($nroSerialBancario));

        return parent::setNroSerialBancario($nroSerialBancario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroSerialBancario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroSerialBancario', array());

        return parent::getNroSerialBancario();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlazoCreditoAno($plazoCreditoAno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlazoCreditoAno', array($plazoCreditoAno));

        return parent::setPlazoCreditoAno($plazoCreditoAno);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlazoCreditoAno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlazoCreditoAno', array());

        return parent::getPlazoCreditoAno();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlazoDiferido($plazoDiferido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlazoDiferido', array($plazoDiferido));

        return parent::setPlazoDiferido($plazoDiferido);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlazoDiferido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlazoDiferido', array());

        return parent::getPlazoDiferido();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlazoGracia($plazoGracia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlazoGracia', array($plazoGracia));

        return parent::setPlazoGracia($plazoGracia);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlazoGracia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlazoGracia', array());

        return parent::getPlazoGracia();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusMigracionId($statusMigracionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusMigracionId', array($statusMigracionId));

        return parent::setStatusMigracionId($statusMigracionId);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusMigracionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusMigracionId', array());

        return parent::getStatusMigracionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubDirectoHabitacional($subDirectoHabitacional)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubDirectoHabitacional', array($subDirectoHabitacional));

        return parent::setSubDirectoHabitacional($subDirectoHabitacional);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubDirectoHabitacional()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubDirectoHabitacional', array());

        return parent::getSubDirectoHabitacional();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubViviendaPerdida($subViviendaPerdida)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubViviendaPerdida', array($subViviendaPerdida));

        return parent::setSubViviendaPerdida($subViviendaPerdida);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubViviendaPerdida()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubViviendaPerdida', array());

        return parent::getSubViviendaPerdida();
    }

    /**
     * {@inheritDoc}
     */
    public function setTasaMoraId($tasaMoraId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTasaMoraId', array($tasaMoraId));

        return parent::setTasaMoraId($tasaMoraId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasaMoraId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasaMoraId', array());

        return parent::getTasaMoraId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoCuenta($tipoCuenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoCuenta', array($tipoCuenta));

        return parent::setTipoCuenta($tipoCuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoCuenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoCuenta', array());

        return parent::getTipoCuenta();
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
    public function setTipoDocumento(\Srpv\ProtocolizacionBundle\Entity\TipoDocumento $tipoDocumento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoDocumento', array($tipoDocumento));

        return parent::setTipoDocumento($tipoDocumento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoDocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoDocumento', array());

        return parent::getTipoDocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidadFamiliar(\Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar $unidadFamiliar = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidadFamiliar', array($unidadFamiliar));

        return parent::setUnidadFamiliar($unidadFamiliar);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidadFamiliar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidadFamiliar', array());

        return parent::getUnidadFamiliar();
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
    public function setTasaFongar(\Srpv\ProtocolizacionBundle\Entity\TasaFongar $tasaFongar = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTasaFongar', array($tasaFongar));

        return parent::setTasaFongar($tasaFongar);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasaFongar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasaFongar', array());

        return parent::getTasaFongar();
    }

    /**
     * {@inheritDoc}
     */
    public function setTasaInteres(\Srpv\ProtocolizacionBundle\Entity\TasaInteres $tasaInteres = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTasaInteres', array($tasaInteres));

        return parent::setTasaInteres($tasaInteres);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasaInteres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasaInteres', array());

        return parent::getTasaInteres();
    }

}