<?php


/* Date: 18/04/2019 17:43:42 */

namespace Entities;

/**
 * Estadopedidohis
 *
 * @Table(name="estadopedidohis", indexes={@Index(name="FK_estadopedidohis_estadopedido", columns={"estado"}), @Index(name="FK_estadopedidohis_pedido", columns={"pedido"})})
 * @Entity
 */
class Estadopedidohis
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
     * @Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @Column(name="pedido", type="integer", nullable=true)
     */
    private $pedido;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Estadopedidohis
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
     * Set estado
     *
     * @param integer $estado
     * @return Estadopedidohis
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /** 
     * Set pedido
     *
     * @param integer $pedido
     * @return Estadopedidohis
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;
    
        return $this;
    }

    /**
     * Get pedido
     *
     * @return integer 
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /** 
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Estadopedidohis
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /** 
     * Set observacion
     *
     * @param string $observacion
     * @return Estadopedidohis
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
}
