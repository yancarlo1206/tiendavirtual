<?php


/* Date: 18/04/2019 17:43:43 */

namespace Entities;

/**
 * Tagproducto
 *
 * @Table(name="tagproducto", indexes={@Index(name="FK_tagproducto_producto", columns={"producto"})})
 * @Entity
 */
class Tagproducto
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="tag", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $tag;

    /**
     * @var integer
     *
     * @Column(name="producto", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $producto;


    /** 
     * Set tag
     *
     * @param integer $tag
     * @return Tagproducto
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return integer 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /** 
     * Set producto
     *
     * @param integer $producto
     * @return Tagproducto
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
}
