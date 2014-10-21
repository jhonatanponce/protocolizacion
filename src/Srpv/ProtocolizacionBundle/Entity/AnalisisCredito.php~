<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnalisisCredito
 *
 * @ORM\Table(name="ANALISIS_CREDITO", indexes={@ORM\Index(name="IDX_AE7B5B43E8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_AE7B5B4327D19144", columns={"TIPO_DOCUMENTO_ID"}), @ORM\Index(name="IDX_AE7B5B439949B9D8", columns={"UNIDAD_FAMILIAR_ID"}), @ORM\Index(name="IDX_AE7B5B4334E98380", columns={"VIVIENDA_ID"}), @ORM\Index(name="IDX_AE7B5B43E2F136F2", columns={"GEN_BANCO_ID"}), @ORM\Index(name="IDX_AE7B5B43F31AD6DD", columns={"TASA_FONGAR_ID"}), @ORM\Index(name="IDX_AE7B5B4377E7882F", columns={"TASA_INTERES_ID"})})
 * @ORM\Entity
 */
class AnalisisCredito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ANALISIS_CREDITO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ALICUOTA_FONDO_GARANTIA", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $alicuotaFondoGarantia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ACTUALIZACION", type="date", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_PROTOCOLIZACION", type="date", nullable=false)
     */
    private $fechaProtocolizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="FUENTE_DATOS_ENTRADA_ID", type="integer", nullable=false)
     */
    private $fuenteDatosEntradaId;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESO_TOTAL_FAMILIAR", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $ingresoTotalFamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO_CREDITO", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $montoCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO_CUOTA_FINANCIERA", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $montoCuotaFinanciera;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO_CUOTA_F_TOTAL", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $montoCuotaFTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO_INICIAL", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $montoInicial;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO_PRIMA_INICIAL_FG", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $montoPrimaInicialFg;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_CUENTA_BANCARIO", type="string", length=20, nullable=true)
     */
    private $nroCuentaBancario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_CUOTAS", type="integer", nullable=false)
     */
    private $nroCuotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="NRO_SERIAL_BANCARIO", type="integer", nullable=false)
     */
    private $nroSerialBancario;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLAZO_CREDITO_ANO", type="integer", nullable=false)
     */
    private $plazoCreditoAno;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLAZO_DIFERIDO", type="integer", nullable=true)
     */
    private $plazoDiferido;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLAZO_GRACIA", type="integer", nullable=true)
     */
    private $plazoGracia;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS_MIGRACION_ID", type="integer", nullable=false)
     */
    private $statusMigracionId;

    /**
     * @var string
     *
     * @ORM\Column(name="SUB_DIRECTO_HABITACIONAL", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $subDirectoHabitacional;

    /**
     * @var string
     *
     * @ORM\Column(name="SUB_VIVIENDA_PERDIDA", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $subViviendaPerdida;

    /**
     * @var integer
     *
     * @ORM\Column(name="TASA_MORA_ID", type="integer", nullable=true)
     */
    private $tasaMoraId;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_CUENTA", type="string", length=10, nullable=false)
     */
    private $tipoCuenta;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\TipoDocumento
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TipoDocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_DOCUMENTO_ID", referencedColumnName="id")
     * })
     */
    private $tipoDocumento;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UNIDAD_FAMILIAR_ID", referencedColumnName="id")
     * })
     */
    private $unidadFamiliar;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\Vivienda
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\Vivienda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VIVIENDA_ID", referencedColumnName="id")
     * })
     */
    private $vivienda;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\TasaFongar
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TasaFongar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TASA_FONGAR_ID", referencedColumnName="id")
     * })
     */
    private $tasaFongar;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\TasaInteres
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\TasaInteres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TASA_INTERES_ID", referencedColumnName="id")
     * })
     */
    private $tasaInteres;



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
     * Set alicuotaFondoGarantia
     *
     * @param string $alicuotaFondoGarantia
     * @return AnalisisCredito
     */
    public function setAlicuotaFondoGarantia($alicuotaFondoGarantia)
    {
        $this->alicuotaFondoGarantia = $alicuotaFondoGarantia;

        return $this;
    }

    /**
     * Get alicuotaFondoGarantia
     *
     * @return string 
     */
    public function getAlicuotaFondoGarantia()
    {
        return $this->alicuotaFondoGarantia;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return AnalisisCredito
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
     * @return AnalisisCredito
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
     * Set fechaProtocolizacion
     *
     * @param \DateTime $fechaProtocolizacion
     * @return AnalisisCredito
     */
    public function setFechaProtocolizacion($fechaProtocolizacion)
    {
        $this->fechaProtocolizacion = $fechaProtocolizacion;

        return $this;
    }

    /**
     * Get fechaProtocolizacion
     *
     * @return \DateTime 
     */
    public function getFechaProtocolizacion()
    {
        return $this->fechaProtocolizacion;
    }

    /**
     * Set fuenteDatosEntradaId
     *
     * @param integer $fuenteDatosEntradaId
     * @return AnalisisCredito
     */
    public function setFuenteDatosEntradaId($fuenteDatosEntradaId)
    {
        $this->fuenteDatosEntradaId = $fuenteDatosEntradaId;

        return $this;
    }

    /**
     * Get fuenteDatosEntradaId
     *
     * @return integer 
     */
    public function getFuenteDatosEntradaId()
    {
        return $this->fuenteDatosEntradaId;
    }

    /**
     * Set ingresoTotalFamiliar
     *
     * @param string $ingresoTotalFamiliar
     * @return AnalisisCredito
     */
    public function setIngresoTotalFamiliar($ingresoTotalFamiliar)
    {
        $this->ingresoTotalFamiliar = $ingresoTotalFamiliar;

        return $this;
    }

    /**
     * Get ingresoTotalFamiliar
     *
     * @return string 
     */
    public function getIngresoTotalFamiliar()
    {
        return $this->ingresoTotalFamiliar;
    }

    /**
     * Set montoCredito
     *
     * @param string $montoCredito
     * @return AnalisisCredito
     */
    public function setMontoCredito($montoCredito)
    {
        $this->montoCredito = $montoCredito;

        return $this;
    }

    /**
     * Get montoCredito
     *
     * @return string 
     */
    public function getMontoCredito()
    {
        return $this->montoCredito;
    }

    /**
     * Set montoCuotaFinanciera
     *
     * @param string $montoCuotaFinanciera
     * @return AnalisisCredito
     */
    public function setMontoCuotaFinanciera($montoCuotaFinanciera)
    {
        $this->montoCuotaFinanciera = $montoCuotaFinanciera;

        return $this;
    }

    /**
     * Get montoCuotaFinanciera
     *
     * @return string 
     */
    public function getMontoCuotaFinanciera()
    {
        return $this->montoCuotaFinanciera;
    }

    /**
     * Set montoCuotaFTotal
     *
     * @param string $montoCuotaFTotal
     * @return AnalisisCredito
     */
    public function setMontoCuotaFTotal($montoCuotaFTotal)
    {
        $this->montoCuotaFTotal = $montoCuotaFTotal;

        return $this;
    }

    /**
     * Get montoCuotaFTotal
     *
     * @return string 
     */
    public function getMontoCuotaFTotal()
    {
        return $this->montoCuotaFTotal;
    }

    /**
     * Set montoInicial
     *
     * @param string $montoInicial
     * @return AnalisisCredito
     */
    public function setMontoInicial($montoInicial)
    {
        $this->montoInicial = $montoInicial;

        return $this;
    }

    /**
     * Get montoInicial
     *
     * @return string 
     */
    public function getMontoInicial()
    {
        return $this->montoInicial;
    }

    /**
     * Set montoPrimaInicialFg
     *
     * @param string $montoPrimaInicialFg
     * @return AnalisisCredito
     */
    public function setMontoPrimaInicialFg($montoPrimaInicialFg)
    {
        $this->montoPrimaInicialFg = $montoPrimaInicialFg;

        return $this;
    }

    /**
     * Get montoPrimaInicialFg
     *
     * @return string 
     */
    public function getMontoPrimaInicialFg()
    {
        return $this->montoPrimaInicialFg;
    }

    /**
     * Set nroCuentaBancario
     *
     * @param string $nroCuentaBancario
     * @return AnalisisCredito
     */
    public function setNroCuentaBancario($nroCuentaBancario)
    {
        $this->nroCuentaBancario = $nroCuentaBancario;

        return $this;
    }

    /**
     * Get nroCuentaBancario
     *
     * @return string 
     */
    public function getNroCuentaBancario()
    {
        return $this->nroCuentaBancario;
    }

    /**
     * Set nroCuotas
     *
     * @param integer $nroCuotas
     * @return AnalisisCredito
     */
    public function setNroCuotas($nroCuotas)
    {
        $this->nroCuotas = $nroCuotas;

        return $this;
    }

    /**
     * Get nroCuotas
     *
     * @return integer 
     */
    public function getNroCuotas()
    {
        return $this->nroCuotas;
    }

    /**
     * Set nroSerialBancario
     *
     * @param integer $nroSerialBancario
     * @return AnalisisCredito
     */
    public function setNroSerialBancario($nroSerialBancario)
    {
        $this->nroSerialBancario = $nroSerialBancario;

        return $this;
    }

    /**
     * Get nroSerialBancario
     *
     * @return integer 
     */
    public function getNroSerialBancario()
    {
        return $this->nroSerialBancario;
    }

    /**
     * Set plazoCreditoAno
     *
     * @param integer $plazoCreditoAno
     * @return AnalisisCredito
     */
    public function setPlazoCreditoAno($plazoCreditoAno)
    {
        $this->plazoCreditoAno = $plazoCreditoAno;

        return $this;
    }

    /**
     * Get plazoCreditoAno
     *
     * @return integer 
     */
    public function getPlazoCreditoAno()
    {
        return $this->plazoCreditoAno;
    }

    /**
     * Set plazoDiferido
     *
     * @param integer $plazoDiferido
     * @return AnalisisCredito
     */
    public function setPlazoDiferido($plazoDiferido)
    {
        $this->plazoDiferido = $plazoDiferido;

        return $this;
    }

    /**
     * Get plazoDiferido
     *
     * @return integer 
     */
    public function getPlazoDiferido()
    {
        return $this->plazoDiferido;
    }

    /**
     * Set plazoGracia
     *
     * @param integer $plazoGracia
     * @return AnalisisCredito
     */
    public function setPlazoGracia($plazoGracia)
    {
        $this->plazoGracia = $plazoGracia;

        return $this;
    }

    /**
     * Get plazoGracia
     *
     * @return integer 
     */
    public function getPlazoGracia()
    {
        return $this->plazoGracia;
    }

    /**
     * Set statusMigracionId
     *
     * @param integer $statusMigracionId
     * @return AnalisisCredito
     */
    public function setStatusMigracionId($statusMigracionId)
    {
        $this->statusMigracionId = $statusMigracionId;

        return $this;
    }

    /**
     * Get statusMigracionId
     *
     * @return integer 
     */
    public function getStatusMigracionId()
    {
        return $this->statusMigracionId;
    }

    /**
     * Set subDirectoHabitacional
     *
     * @param string $subDirectoHabitacional
     * @return AnalisisCredito
     */
    public function setSubDirectoHabitacional($subDirectoHabitacional)
    {
        $this->subDirectoHabitacional = $subDirectoHabitacional;

        return $this;
    }

    /**
     * Get subDirectoHabitacional
     *
     * @return string 
     */
    public function getSubDirectoHabitacional()
    {
        return $this->subDirectoHabitacional;
    }

    /**
     * Set subViviendaPerdida
     *
     * @param string $subViviendaPerdida
     * @return AnalisisCredito
     */
    public function setSubViviendaPerdida($subViviendaPerdida)
    {
        $this->subViviendaPerdida = $subViviendaPerdida;

        return $this;
    }

    /**
     * Get subViviendaPerdida
     *
     * @return string 
     */
    public function getSubViviendaPerdida()
    {
        return $this->subViviendaPerdida;
    }

    /**
     * Set tasaMoraId
     *
     * @param integer $tasaMoraId
     * @return AnalisisCredito
     */
    public function setTasaMoraId($tasaMoraId)
    {
        $this->tasaMoraId = $tasaMoraId;

        return $this;
    }

    /**
     * Get tasaMoraId
     *
     * @return integer 
     */
    public function getTasaMoraId()
    {
        return $this->tasaMoraId;
    }

    /**
     * Set tipoCuenta
     *
     * @param string $tipoCuenta
     * @return AnalisisCredito
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    /**
     * Get tipoCuenta
     *
     * @return string 
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return AnalisisCredito
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
     * Set tipoDocumento
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TipoDocumento $tipoDocumento
     * @return AnalisisCredito
     */
    public function setTipoDocumento(\Srpv\ProtocolizacionBundle\Entity\TipoDocumento $tipoDocumento = null)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TipoDocumento 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set unidadFamiliar
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar $unidadFamiliar
     * @return AnalisisCredito
     */
    public function setUnidadFamiliar(\Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar $unidadFamiliar = null)
    {
        $this->unidadFamiliar = $unidadFamiliar;

        return $this;
    }

    /**
     * Get unidadFamiliar
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar 
     */
    public function getUnidadFamiliar()
    {
        return $this->unidadFamiliar;
    }

    /**
     * Set vivienda
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\Vivienda $vivienda
     * @return AnalisisCredito
     */
    public function setVivienda(\Srpv\ProtocolizacionBundle\Entity\Vivienda $vivienda = null)
    {
        $this->vivienda = $vivienda;

        return $this;
    }

    /**
     * Get vivienda
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\Vivienda 
     */
    public function getVivienda()
    {
        return $this->vivienda;
    }

    /**
     * Set genBanco
     *
     * @param \Comunes\TablasBundle\Entity\GenBanco $genBanco
     * @return AnalisisCredito
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
     * Set tasaFongar
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TasaFongar $tasaFongar
     * @return AnalisisCredito
     */
    public function setTasaFongar(\Srpv\ProtocolizacionBundle\Entity\TasaFongar $tasaFongar = null)
    {
        $this->tasaFongar = $tasaFongar;

        return $this;
    }

    /**
     * Get tasaFongar
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TasaFongar 
     */
    public function getTasaFongar()
    {
        return $this->tasaFongar;
    }

    /**
     * Set tasaInteres
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\TasaInteres $tasaInteres
     * @return AnalisisCredito
     */
    public function setTasaInteres(\Srpv\ProtocolizacionBundle\Entity\TasaInteres $tasaInteres = null)
    {
        $this->tasaInteres = $tasaInteres;

        return $this;
    }

    /**
     * Get tasaInteres
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\TasaInteres 
     */
    public function getTasaInteres()
    {
        return $this->tasaInteres;
    }
}
