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
     * @Id
     * @ManyToOne(targetEntity="Producto")
     * @JoinColumns({
     *   @JoinColumn(name="producto", referencedColumnName="id")
     * })
     */
    private $producto;

    /**
     * @var integer
     *
     * @Id
     * @ManyToOne(targetEntity="Producto")
     * @JoinColumns({
     *   @JoinColumn(name="relacionado", referencedColumnName="id")
     * })
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
