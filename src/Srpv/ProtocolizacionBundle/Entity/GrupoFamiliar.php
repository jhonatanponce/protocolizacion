<?php

namespace Srpv\ProtocolizacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoFamiliar
 *
 * @ORM\Table(name="GRUPO_FAMILIAR", indexes={@ORM\Index(name="IDX_AB000D05FCDDCCF6", columns={"GEN_PARENTESCO_ID"}), @ORM\Index(name="IDX_AB000D0579F45E9B", columns={"FUENTE_DATOS_ENTRADA_ID"}), @ORM\Index(name="IDX_AB000D05C62AD666", columns={"PERSONA_ID"}), @ORM\Index(name="IDX_AB000D05E8EA1841", columns={"USUARIO_ID"}), @ORM\Index(name="IDX_AB000D059949B9D8", columns={"UNIDAD_FAMILIAR_ID"})})
 * @ORM\Entity
 */
class GrupoFamiliar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GRUPO_FAMILIAR_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ACTUALIZACION", type="date", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESO_MENSUAL", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $ingresoMensual;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO_SUJETO_ATENCION", type="integer", nullable=false)
     */
    private $tipoSujetoAtencion;

    /**
     * @var string
     *
     * @ORM\Column(name="COTIZA_FAOV", type="string", length=1, nullable=false)
     */
    private $cotizaFaov;

    /**
     * @var \Comunes\TablasBundle\Entity\GenParentesco
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\GenParentesco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_PARENTESCO_ID", referencedColumnName="id")
     * })
     */
    private $genParentesco;

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
     * @var \Comunes\TablasBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="Comunes\TablasBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PERSONA_ID", referencedColumnName="id")
     * })
     */
    private $persona;

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
     * @var \Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar
     *
     * @ORM\ManyToOne(targetEntity="Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UNIDAD_FAMILIAR_ID", referencedColumnName="id")
     * })
     */
    private $unidadFamiliar;


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
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return GrupoFamiliar
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
     * @return GrupoFamiliar
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
     * Set ingresoMensual
     *
     * @param string $ingresoMensual
     * @return GrupoFamiliar
     */
    public function setIngresoMensual($ingresoMensual)
    {
        $this->ingresoMensual = $ingresoMensual;

        return $this;
    }

    /**
     * Get ingresoMensual
     *
     * @return string 
     */
    public function getIngresoMensual()
    {
        return $this->ingresoMensual;
    }

    /**
     * Set tipoSujetoAtencion
     *
     * @param integer $tipoSujetoAtencion
     * @return GrupoFamiliar
     */
    public function setTipoSujetoAtencion($tipoSujetoAtencion)
    {
        $this->tipoSujetoAtencion = $tipoSujetoAtencion;

        return $this;
    }

    /**
     * Get tipoSujetoAtencion
     *
     * @return integer 
     */
    public function getTipoSujetoAtencion()
    {
        return $this->tipoSujetoAtencion;
    }

    /**
     * Set cotizaFaov
     *
     * @param string $cotizaFaov
     * @return GrupoFamiliar
     */
    public function setCotizaFaov($cotizaFaov)
    {
        $this->cotizaFaov = $cotizaFaov;

        return $this;
    }

    /**
     * Get cotizaFaov
     *
     * @return string 
     */
    public function getCotizaFaov()
    {
        return $this->cotizaFaov;
    }

    /**
     * Set genParentesco
     *
     * @param \Comunes\TablasBundle\Entity\GenParentesco $genParentesco
     * @return GrupoFamiliar
     */
    public function setGenParentesco(\Comunes\TablasBundle\Entity\GenParentesco $genParentesco = null)
    {
        $this->genParentesco = $genParentesco;

        return $this;
    }

    /**
     * Get genParentesco
     *
     * @return \Comunes\TablasBundle\Entity\GenParentesco 
     */
    public function getGenParentesco()
    {
        return $this->genParentesco;
    }

    /**
     * Set fuenteDatosEntrada
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\FuenteDatosEntrada $fuenteDatosEntrada
     * @return GrupoFamiliar
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
     * Set persona
     *
     * @param \Comunes\TablasBundle\Entity\Persona $persona
     * @return GrupoFamiliar
     */
    public function setPersona(\Comunes\TablasBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Comunes\TablasBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set usuario
     *
     * @param \Comunes\SecurityBundle\Entity\Usuario $usuario
     * @return GrupoFamiliar
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
     * Set unidadFamiliar
     *
     * @param \Srpv\ProtocolizacionBundle\Entity\UnidadFamiliar $unidadFamiliar
     * @return GrupoFamiliar
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
}
