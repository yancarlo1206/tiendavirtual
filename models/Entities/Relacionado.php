<?php


/* Date: 18/04/2019 17:43:43 */

namespace Entities;

/**
 * Relacionado
 *
 * @Table(name="relacionado", indexes={@Index(name="FK_relacionado_producto_02", columns={"relacionado"})})
 * @Entity
 */
class Relacionado
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
     * @Column(name="relacionado", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $relacionado;


    /** 
     * Set producto
     *
     * @param integer $producto
     * @return Relacionado
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
     * Set relacionado
     *
     * @param integer $relacionado
     * @return Relacionado
     */
    public function setRelacionado($relacionado)
    {
        $this->relacionado = $relacionado;
    
        return $this;
    }

    /**
     * Get relacionado
     *
     * @return integer 
     */
    public function getRelacionado()
    {
        return $this->relacionado;
    }
}
