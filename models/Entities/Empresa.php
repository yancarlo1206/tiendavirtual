<?php


/* Date: 18/04/2019 17:43:42 */

namespace Entities;

/**
 * Empresa
 *
 * @Table(name="empresa")
 * @Entity
 */
class Empresa
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
     * @Column(name="nit", type="string", length=20, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="slogan", type="string", length=500, nullable=true)
     */
    private $slogan;

    /**
     * @var string
     *
     * @Column(name="direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="instagram", type="string", length=100, nullable=true)
     */
    private $instagram;

    /**
     * @var string
     *
     * @Column(name="twitter", type="string", length=100, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @Column(name="facebook", type="string", length=100, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @Column(name="informacion", type="text", nullable=true)
     */
    private $informacion;

    /**
     * @var string
     *
     * @Column(name="telefono", type="string", length=50, nullable=true)
     */
    private $telefono;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Empresa
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
     * @return Empresa
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
     * Set nit
     *
     * @param string $nit
     * @return Empresa
     */
    public function setNit($nit)
    {
        $this->nit = $nit;
    
        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Empresa
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
     * Set slogan
     *
     * @param string $slogan
     * @return Empresa
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    
        return $this;
    }

    /**
     * Get slogan
     *
     * @return string 
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /** 
     * Set direccion
     *
     * @param string $direccion
     * @return Empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /** 
     * Set email
     *
     * @param string $email
     * @return Empresa
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /** 
     * Set instagram
     *
     * @param string $instagram
     * @return Empresa
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
    
        return $this;
    }

    /**
     * Get instagram
     *
     * @return string 
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /** 
     * Set twitter
     *
     * @param string $twitter
     * @return Empresa
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    
        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /** 
     * Set facebook
     *
     * @param string $facebook
     * @return Empresa
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    
        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /** 
     * Set informacion
     *
     * @param string $informacion
     * @return Empresa
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;
    
        return $this;
    }

    /**
     * Get informacion
     *
     * @return string 
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /** 
     * Set telefono
     *
     * @param string $telefono
     * @return Empresa
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}
