<?php


/* Date: 18/04/2019 17:43:43 */

namespace Entities;

/**
 * Producto
 *
 * @Table(name="producto", indexes={@Index(name="FK_producto_empresa", columns={"empresa"}), @Index(name="FK_producto_marca", columns={"marca"})})
 * @Entity
 */
class Producto
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
     * @var string
     *
     * @Column(name="referencia", type="string", length=20, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ManyToOne(targetEntity="Categoria")
     * @JoinColumns({
     *   @JoinColumn(name="categoria", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var integer
     *
     * @Column(name="empresa", type="integer", nullable=true)
     */
    private $empresa;

    /**
     * @var string
     *
     * @Column(name="infoadicional", type="text", nullable=true)
     */
    private $infoadicional;

    /**
     * @var integer
     *
     * @Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var string
     *
     * @Column(name="precio", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $precio;

    /**
     * @var boolean
     *
     * @Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @Column(name="marca", type="integer", nullable=true)
     */
    private $marca;

    /**
     * @var integer
     *
     * @Column(name="descuento", type="integer", nullable=true)
     */
    private $descuento = '0';

    /**
     * @var integer
     *
     * @Column(name="tendencia", type="integer", nullable=true)
     */
    private $tendencia;

    /**
     * @var integer
     *
     * @Column(name="masvendido", type="integer", nullable=true)
     */
    private $masVendido;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Producto
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
     * Set referencia
     *
     * @param string $referencia
     * @return Producto
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    
        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /** 
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
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
     * Set categoria
     *
     * @param integer $categoria
     * @return Producto
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return integer 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /** 
     * Set empresa
     *
     * @param integer $empresa
     * @return Producto
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
     * Set infoadicional
     *
     * @param string $infoadicional
     * @return Producto
     */
    public function setInfoadicional($infoadicional)
    {
        $this->infoadicional = $infoadicional;
    
        return $this;
    }

    /**
     * Get infoadicional
     *
     * @return string 
     */
    public function getInfoadicional()
    {
        return $this->infoadicional;
    }

    /** 
     * Set stock
     *
     * @param integer $stock
     * @return Producto
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

    /** 
     * Set precio
     *
     * @param string $precio
     * @return Producto
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

    /** 
     * Set estado
     *
     * @param boolean $estado
     * @return Producto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /** 
     * Set marca
     *
     * @param integer $marca
     * @return Producto
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return integer 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /** 
     * Set descuento
     *
     * @param integer $descuento
     * @return Producto
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    
        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /** 
     * Set tendencia
     *
     * @param integer $tendencia
     * @return Producto
     */
    public function setTendencia($tendencia)
    {
        $this->tendencia = $tendencia;
    
        return $this;
    }

    /**
     * Get tendencia
     *
     * @return integer 
     */
    public function getTendencia()
    {
        return $this->tendencia;
    }

    /** 
     * Set masVendido
     *
     * @param integer $masVendido
     * @return Producto
     */
    public function setMasVendido($masVendido)
    {
        $this->masVendido = $masVendido;
    
        return $this;
    }

    /**
     * Get masVendido
     *
     * @return integer 
     */
    public function getMasVendido()
    {
        return $this->masVendido;
    }

}
