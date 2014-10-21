<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlArchivos
 *
 * @ORM\Table(name="CONTROL_ARCHIVOS")
 * @ORM\Entity
 */
class ControlArchivos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="CONTROL_ARCHIVOS_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTIDAD_LINEAS", type="integer", nullable=true)
     */
    private $cantidadLineas;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_ESTATUS", type="string", length=2, nullable=true)
     */
    private $codigoEstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_SUDEBAN", type="string", length=10, nullable=true)
     */
    private $codigoSudeban;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO_CONTACTO", type="string", length=70, nullable=true)
     */
    private $correoContacto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_EJECUCION", type="date", nullable=true)
     */
    private $fechaEjecucion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_ARCHIVO", type="string", length=50, nullable=true)
     */
    private $nombreArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="string", length=4000, nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PERIODO", type="date", nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_ARCHIVO", type="string", length=10, nullable=true)
     */
    private $tipoArchivo;



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
     * Set cantidadLineas
     *
     * @param integer $cantidadLineas
     * @return ControlArchivos
     */
    public function setCantidadLineas($cantidadLineas)
    {
        $this->cantidadLineas = $cantidadLineas;

        return $this;
    }

    /**
     * Get cantidadLineas
     *
     * @return integer 
     */
    public function getCantidadLineas()
    {
        return $this->cantidadLineas;
    }

    /**
     * Set codigoEstatus
     *
     * @param string $codigoEstatus
     * @return ControlArchivos
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
     * Set codigoSudeban
     *
     * @param string $codigoSudeban
     * @return ControlArchivos
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
     * Set correoContacto
     *
     * @param string $correoContacto
     * @return ControlArchivos
     */
    public function setCorreoContacto($correoContacto)
    {
        $this->correoContacto = $correoContacto;

        return $this;
    }

    /**
     * Get correoContacto
     *
     * @return string 
     */
    public function getCorreoContacto()
    {
        return $this->correoContacto;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return ControlArchivos
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
     * Set fechaEjecucion
     *
     * @param \DateTime $fechaEjecucion
     * @return ControlArchivos
     */
    public function setFechaEjecucion($fechaEjecucion)
    {
        $this->fechaEjecucion = $fechaEjecucion;

        return $this;
    }

    /**
     * Get fechaEjecucion
     *
     * @return \DateTime 
     */
    public function getFechaEjecucion()
    {
        return $this->fechaEjecucion;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return ControlArchivos
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
     * Set observacion
     *
     * @param string $observacion
     * @return ControlArchivos
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set periodo
     *
     * @param \DateTime $periodo
     * @return ControlArchivos
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return \DateTime 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set tipoArchivo
     *
     * @param string $tipoArchivo
     * @return ControlArchivos
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
}
