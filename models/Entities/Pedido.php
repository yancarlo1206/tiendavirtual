<?php


/* Date: 18/04/2019 17:43:42 */

namespace Entities;

/**
 * Pedido
 *
 * @Table(name="pedido", indexes={@Index(name="FK_pedido_cliente", columns={"cliente"}), @Index(name="FK_pedido_estadopedido", columns={"estado"})})
 * @Entity
 */
class Pedido
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
     * @Column(name="numerointerno", type="integer", nullable=true)
     */
    private $numerointerno;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @Column(name="cliente", type="integer", nullable=true)
     */
    private $cliente;

    /**
     * @var integer
     *
     * @Column(name="estado", type="integer", nullable=true)
     */
    private $estado;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Pedido
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
     * Set numerointerno
     *
     * @param integer $numerointerno
     * @return Pedido
     */
    public function setNumerointerno($numerointerno)
    {
        $this->numerointerno = $numerointerno;
    
        return $this;
    }

    /**
     * Get numerointerno
     *
     * @return integer 
     */
    public function getNumerointerno()
    {
        return $this->numerointerno;
    }

    /** 
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Pedido
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
     * Set cliente
     *
     * @param integer $cliente
     * @return Pedido
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return integer 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Pedido
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
}
