<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TasaInteres
 *
 * @ORM\Table(name="TASA_INTERES", indexes={@ORM\Index(name="IDX_D16E7134AB9CF394", columns={"FUENTE_FINANCIAMIENTO_ID"}), @ORM\Index(name="IDX_D16E713467A51867", columns={"GACETAS_PTOS_CTA_ID"}), @ORM\Index(name="IDX_D16E7134E8EA1841", columns={"USUARIO_ID"})})
 * @ORM\Entity
 */
class TasaInteres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="TASA_INTERES_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTATUS", type="string", length=1, nullable=true)
     */
    private $estatus;

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
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPORCION_SALARIO", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $proporcionSalario;

    /**
     * @var string
     *
     * @ORM\Column(name="TASA_INTERES", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $tasaInteres;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FUENTE_FINANCIAMIENTO_ID", referencedColumnName="id")
     * })
     */
    private $fuenteFinanciamiento;

    /**
     * @var \Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GACETAS_PTOS_CTA_ID", referencedColumnName="id")
     * })
     */
    private $gacetasPtosCta;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set estatus
     *
     * @param string $estatus
     * @return TasaInteres
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return TasaInteres
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
     * @return TasaInteres
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
     * Set nombre
     *
     * @param string $nombre
     * @return TasaInteres
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set proporcionSalario
     *
     * @param string $proporcionSalario
     * @return TasaInteres
     */
    public function setProporcionSalario($proporcionSalario)
    {
        $this->proporcionSalario = $proporcionSalario;

        return $this;
    }

    /**
     * Get proporcionSalario
     *
     * @return string 
     */
    public function getProporcionSalario()
    {
        return $this->proporcionSalario;
    }

    /**
     * Set tasaInteres
     *
     * @param string $tasaInteres
     * @return TasaInteres
     */
    public function setTasaInteres($tasaInteres)
    {
        $this->tasaInteres = $tasaInteres;

        return $this;
    }

    /**
     * Get tasaInteres
     *
     * @return string 
     */
    public function getTasaInteres()
    {
        return $this->tasaInteres;
    }

    /**
     * Set fuenteFinanciamiento
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento $fuenteFinanciamiento
     * @return TasaInteres
     */
    public function setFuenteFinanciamiento(\Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento $fuenteFinanciamiento = null)
    {
        $this->fuenteFinanciamiento = $fuenteFinanciamiento;

        return $this;
    }

    /**
     * Get fuenteFinanciamiento
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\FuenteFinanciamiento 
     */
    public function getFuenteFinanciamiento()
    {
        return $this->fuenteFinanciamiento;
    }

    /**
     * Set gacetasPtosCta
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta $gacetasPtosCta
     * @return TasaInteres
     */
    public function setGacetasPtosCta(\Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta $gacetasPtosCta = null)
    {
        $this->gacetasPtosCta = $gacetasPtosCta;

        return $this;
    }

    /**
     * Get gacetasPtosCta
     *
     * @return \Srpv\ProtocolizacionBundle\Entity\GacetasPuntosCta 
     */
    public function getGacetasPtosCta()
    {
        return $this->gacetasPtosCta;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return TasaInteres
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
}
