<?php


/* Date: 05/05/2019 21:51:42 */

namespace Entities;

/**
 * Detalleproducto
 *
 * @Table(name="detalleproducto", indexes={@Index(name="producto", columns={"producto"}), @Index(name="color", columns={"color"})})
 * @Entity
 */
class Detalleproducto
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
     * @ManyToOne(targetEntity="Producto")
     * @JoinColumns({
     *   @JoinColumn(name="producto", referencedColumnName="id")
     * })
     */
    private $producto;

    /**
     * @var integer
     *
     * @Column(name="talla", type="integer", nullable=false)
     */
    private $talla;

    /**
     * @var integer
     *
     * @Column(name="color", type="integer", nullable=false)
     */
    private $color;

    /**
     * @var integer
     *
     * @Column(name="stock", type="integer", nullable=false)
     */
    private $stock;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Detalleproducto
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
     * Set producto
     *
     * @param integer $producto
     * @return Detalleproducto
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
     * Set talla
     *
     * @param integer $talla
     * @return Detalleproducto
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;
    
        return $this;
    }

    /**
     * Get talla
     *
     * @return integer 
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /** 
     * Set color
     *
     * @param integer $color
     * @return Detalleproducto
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return integer 
     */
    public function getColor()
    {
        return $this->color;
    }

    /** 
     * Set stock
     *
     * @param integer $stock
     * @return Detalleproducto
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    
        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }
}
