<?php


/* Date: 18/04/2019 17:43:43 */

namespace Entities;

/**
 * Tag
 *
 * @Table(name="tag", indexes={@Index(name="FK_tag_empresa", columns={"empresa"}), @Index(name="FK_tag_tipotag", columns={"tipo"})})
 * @Entity
 */
class Tag
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @Column(name="empresa", type="integer", nullable=true)
     */
    private $empresa;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Tag
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

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
     * Set empresa
     *
     * @param integer $empresa
     * @return Tag
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return integer 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /** 
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tag
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /** 
     * Set tipo
     *
     * @param integer $tipo
     * @return Tag
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
