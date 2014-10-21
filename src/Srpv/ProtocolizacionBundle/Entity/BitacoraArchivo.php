<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BitacoraArchivo
 *
 * @ORM\Table(name="BITACORA_ARCHIVO", indexes={@ORM\Index(name="IDX_CA1345E2C1AFFA52", columns={"ID_CONTROL"})})
 * @ORM\Entity
 */
class BitacoraArchivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="BITACORA_ARCHIVO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_ESTATUS", type="string", length=2, nullable=true)
     */
    private $codigoEstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_SQLCODE", type="string", length=50, nullable=true)
     */
    private $codigoSqlcode;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_SQLERRM", type="string", length=500, nullable=true)
     */
    private $codigoSqlerrm;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_SUDEBAN", type="string", length=10, nullable=true)
     */
    private $codigoSudeban;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_PROCESO", type="date", nullable=true)
     */
    private $fechaProceso;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_ARCHIVO", type="string", length=50, nullable=true)
     */
    private $nombreArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMERO_CONTRATO", type="string", length=20, nullable=true)
     */
    private $numeroContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="PROCEDIMIENTO", type="string", length=250, nullable=true)
     */
    private $procedimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_ARCHIVO", type="string", length=50, nullable=true)
     */
    private $tipoArchivo;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\ControlArchivos
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\ControlArchivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONTROL", referencedColumnName="id")
     * })
     */
    private $idControl;



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
     * Set codigoEstatus
     *
     * @param string $codigoEstatus
     * @return BitacoraArchivo
     */
    public function setCodigoEstatus($codigoEstatus)
    {
        $this->codigoEstatus = $codigoEstatus;

        return $this;
    }

    /**
     * Get codigoEstatus
     *
     * @return string 
     */
    public function getCodigoEstatus()
    {
        return $this->codigoEstatus;
    }

    /**
     * Set codigoSqlcode
     *
     * @param string $codigoSqlcode
     * @return BitacoraArchivo
     */
    public function setCodigoSqlcode($codigoSqlcode)
    {
        $this->codigoSqlcode = $codigoSqlcode;

        return $this;
    }

    /**
     * Get codigoSqlcode
     *
     * @return string 
     */
    public function getCodigoSqlcode()
    {
        return $this->codigoSqlcode;
    }

    /**
     * Set codigoSqlerrm
     *
     * @param string $codigoSqlerrm
     * @return BitacoraArchivo
     */
    public function setCodigoSqlerrm($codigoSqlerrm)
    {
        $this->codigoSqlerrm = $codigoSqlerrm;

        return $this;
    }

    /**
     * Get codigoSqlerrm
     *
     * @return string 
     */
    public function getCodigoSqlerrm()
    {
        return $this->codigoSqlerrm;
    }

    /**
     * Set codigoSudeban
     *
     * @param string $codigoSudeban
     * @return BitacoraArchivo
     */
    public function setCodigoSudeban($codigoSudeban)
    {
        $this->codigoSudeban = $codigoSudeban;

        return $this;
    }

    /**
     * Get codigoSudeban
     *
     * @return string 
     */
    public function getCodigoSudeban()
    {
        return $this->codigoSudeban;
    }

    /**
     * Set fechaProceso
     *
     * @param \DateTime $fechaProceso
     * @return BitacoraArchivo
     */
    public function setFechaProceso($fechaProceso)
    {
        $this->fechaProceso = $fechaProceso;

        return $this;
    }

    /**
     * Get fechaProceso
     *
     * @return \DateTime 
     */
    public function getFechaProceso()
    {
        return $this->fechaProceso;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return BitacoraArchivo
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set numeroContrato
     *
     * @param string $numeroContrato
     * @return BitacoraArchivo
     */
    public function setNumeroContrato($numeroContrato)
    {
        $this->numeroContrato = $numeroContrato;

        return $this;
    }

    /**
     * Get numeroContrato
     *
     * @return string 
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return BitacoraArchivo
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
     * Set procedimiento
     *
     * @param string $procedimiento
     * @return BitacoraArchivo
     */
    public function setProcedimiento($procedimiento)
    {
        $this->procedimiento = $procedimiento;

        return $this;
    }

    /**
     * Get procedimiento
     *
     * @return string 
     */
    public function getProcedimiento()
    {
        return $this->procedimiento;
    }

    /**
     * Set tipoArchivo
     *
     * @param string $tipoArchivo
     * @return BitacoraArchivo
     */
    public function setTipoArchivo($tipoArchivo)
    {
        $this->tipoArchivo = $tipoArchivo;

        return $this;
    }

    /**
     * Get tipoArchivo
     *
     * @return string 
     */
    public function getTipoArchivo()
    {
        return $this->tipoArchivo;
    }

    /**
     * Set idControl
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\ControlArchivos $idControl
     * @return BitacoraArchivo
     */
    public function setIdControl(\Srpv\ProtocolizacionBundle\Entity\ControlArchivos $idControl = null)
    {
        $this->idControl = $idControl;

        return $this;
    }

    /**
     * Get idControl
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\ControlArchivos 
     */
    public function getIdControl()
    {
        return $this->idControl;
    }
}
