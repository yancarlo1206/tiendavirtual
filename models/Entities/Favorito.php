<?php


/* Date: 18/04/2019 17:43:42 */

namespace Entities;

/**
 * Favorito
 *
 * @Table(name="favorito", indexes={@Index(name="FK_favorito_cliente", columns={"cliente"})})
 * @Entity
 */
class Favorito
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
     * @Column(name="cliente", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $cliente;


    /** 
     * Set producto
     *
     * @param integer $producto
     * @return Favorito
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
     * Set cliente
     *
     * @param integer $cliente
     * @return Favorito
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
}
