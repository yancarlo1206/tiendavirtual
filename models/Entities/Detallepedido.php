<?php


/* Date: 18/04/2019 17:43:42 */

namespace Entities;

/**
 * Detallepedido
 *
 * @Table(name="detallepedido", indexes={@Index(name="FK_detallepedido_pedido", columns={"pedido"})})
 * @Entity
 */
class Detallepedido
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="producto", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $producto;

    /**
     * @var integer
     *
     * @Column(name="pedido", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $pedido;

    /**
     * @var integer
     *
     * @Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @Column(name="precio", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $precio;


    /** 
     * Set producto
     *
     * @param integer $producto
     * @return Detallepedido
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return integer 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /** 
     * Set pedido
     *
     * @param integer $pedido
     * @return Detallepedido
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Detallepedido
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /** 
     * Set precio
     *
     * @param string $precio
     * @return Detallepedido
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
