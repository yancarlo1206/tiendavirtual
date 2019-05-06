<?php


/* Date: 05/05/2019 21:51:42 */

namespace Entities;

/**
 * Color
 *
 * @Table(name="color")
 * @Entity
 */
class Color
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
     * @Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @Column(name="rgb", type="string", length=10, nullable=false)
     */
    private $rgb;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Color
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Color
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
     * Set rgb
     *
     * @param string $rgb
     * @return Color
     */
    public function setRgb($rgb)
    {
        $this->rgb = $rgb;
    
        return $this;
    }

    /**
     * Get rgb
     *
     * @return string 
     */
    public function getRgb()
    {
        return $this->rgb;
    }
}
