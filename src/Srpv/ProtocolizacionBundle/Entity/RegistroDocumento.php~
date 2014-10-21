<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroDocumento
 *
 * @ORM\Table(name="REGISTRO_DOCUMENTO", indexes={@ORM\Index(name="IDX_86B02DE824EFDE46", columns={"ANALISIS_CREDITO_ID"}), @ORM\Index(name="IDX_86B02DE879F45E9B", columns={"FUENTE_DATOS_ENTRADA_ID"}), @ORM\Index(name="IDX_86B02DE8E8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_86B02DE8EB2FD0C6", columns={"REGISTRO_PUBLICO_ID"})})
 * @ORM\Entity
 */
class RegistroDocumento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="REGISTRO_DOCUMENTO_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANO", type="integer", nullable=true)
     */
    private $ano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_MODIFICACION", type="date", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_REGISTRO", type="date", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_MATRICULA", type="string", length=100, nullable=true)
     */
    private $nroMatricula;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_PROTOCOLO", type="string", length=50, nullable=true)
     */
    private $nroProtocolo;

    /**
     * @var string
     *
     * @ORM\Column(name="NRO_REGISTRO", type="string", length=50, nullable=false)
     */
    private $nroRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="TOMO", type="string", length=50, nullable=true)
     */
    private $tomo;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\AnalisisCredito
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\AnalisisCredito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ANALISIS_CREDITO_ID", referencedColumnName="id")
     * })
     */
    private $analisisCredito;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FUENTE_DATOS_ENTRADA_ID", referencedColumnName="id")
     * })
     */
    private $fuenteDatosEntrada;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\RegistroPublico
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\RegistroPublico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="REGISTRO_PUBLICO_ID", referencedColumnName="id")
     * })
     */
    private $registroPublico;



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
     * Set ano
     *
     * @param integer $ano
     * @return RegistroDocumento
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return RegistroDocumento
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
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return RegistroDocumento
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return RegistroDocumento
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set nroMatricula
     *
     * @param string $nroMatricula
     * @return RegistroDocumento
     */
    public function setNroMatricula($nroMatricula)
    {
        $this->nroMatricula = $nroMatricula;

        return $this;
    }

    /**
     * Get nroMatricula
     *
     * @return string 
     */
    public function getNroMatricula()
    {
        return $this->nroMatricula;
    }

    /**
     * Set nroProtocolo
     *
     * @param string $nroProtocolo
     * @return RegistroDocumento
     */
    public function setNroProtocolo($nroProtocolo)
    {
        $this->nroProtocolo = $nroProtocolo;

        return $this;
    }

    /**
     * Get nroProtocolo
     *
     * @return string 
     */
    public function getNroProtocolo()
    {
        return $this->nroProtocolo;
    }

    /**
     * Set nroRegistro
     *
     * @param string $nroRegistro
     * @return RegistroDocumento
     */
    public function setNroRegistro($nroRegistro)
    {
        $this->nroRegistro = $nroRegistro;

        return $this;
    }

    /**
     * Get nroRegistro
     *
     * @return string 
     */
    public function getNroRegistro()
    {
        return $this->nroRegistro;
    }

    /**
     * Set tomo
     *
     * @param string $tomo
     * @return RegistroDocumento
     */
    public function setTomo($tomo)
    {
        $this->tomo = $tomo;

        return $this;
    }

    /**
     * Get tomo
     *
     * @return string 
     */
    public function getTomo()
    {
        return $this->tomo;
    }

    /**
     * Set analisisCredito
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\AnalisisCredito $analisisCredito
     * @return RegistroDocumento
     */
    public function setAnalisisCredito(\Srpv\ProtocolizacionBundle\Entity\AnalisisCredito $analisisCredito = null)
    {
        $this->analisisCredito = $analisisCredito;

        return $this;
    }

    /**
     * Get analisisCredito
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\AnalisisCredito 
     */
    public function getAnalisisCredito()
    {
        return $this->analisisCredito;
    }

    /**
     * Set fuenteDatosEntrada
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada $fuenteDatosEntrada
     * @return RegistroDocumento
     */
    public function setFuenteDatosEntrada(\Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada $fuenteDatosEntrada = null)
    {
        $this->fuenteDatosEntrada = $fuenteDatosEntrada;

        return $this;
    }

    /**
     * Get fuenteDatosEntrada
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada 
     */
    public function getFuenteDatosEntrada()
    {
        return $this->fuenteDatosEntrada;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return RegistroDocumento
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
     * Set registroPublico
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\RegistroPublico $registroPublico
     * @return RegistroDocumento
     */
    public function setRegistroPublico(\Srpv\ProtocolizacionBundle\Entity\RegistroPublico $registroPublico = null)
    {
        $this->registroPublico = $registroPublico;

        return $this;
    }

    /**
     * Get registroPublico
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\RegistroPublico 
     */
    public function getRegistroPublico()
    {
        return $this->registroPublico;
    }
}
