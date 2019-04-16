<?php


/* Date: 26/01/2018 20:18:40 */

namespace Entities;

/**
 * Usuario
 *
 * @Table(name="usuario", uniqueConstraints={@UniqueConstraint(name="usuario_uk", columns={"usuario"})}, indexes={@Index(name="fk_usuario_tipousuario1_idx", columns={"tipousuario"})})
 * @Entity
 */
class Usuario
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
     * @Column(name="usuario", type="string", length=50, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="clave", type="string", length=50, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @Column(name="rol_usuario", type="string", length=1, nullable=true)
     */
    private $rolUsuario;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="celular", type="string", length=20, nullable=true)
     */
    private $celular;

    /**
     * @var float
     *
     * @Column(name="saldo", type="float", precision=10, scale=0, nullable=true)
     */
    private $saldo;

    /**
     * @var string
     *
     * @Column(name="slogan", type="string", length=45, nullable=true)
     */
    private $slogan;

    /**
     * @var string
     *
     * @Column(name="direccion", type="string", length=45, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @Column(name="ciudad", type="string", length=45, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @Column(name="pais", type="string", length=45, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @Column(name="recordatorio", type="string", length=100, nullable=true)
     */
    private $recordatorio;

    /**
     * @var \Tipousuario
     *
     * @ManyToOne(targetEntity="Tipousuario")
     * @JoinColumns({
     *   @JoinColumn(name="tipousuario", referencedColumnName="id")
     * })
     */
    private $tipousuario;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Usuario
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
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set clave
     *
     * @param string $clave
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    
        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /** 
     * Set estado
     *
     * @param string $estado
     * @return Usuario
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /** 
     * Set rolUsuario
     *
     * @param string $rolUsuario
     * @return Usuario
     */
    public function setRolUsuario($rolUsuario)
    {
        $this->rolUsuario = $rolUsuario;
    
        return $this;
    }

    /**
     * Get rolUsuario
     *
     * @return string 
     */
    public function getRolUsuario()
    {
        return $this->rolUsuario;
    }

    /** 
     * Set email
     *
     * @param string $email
     * @return Usuario
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
     * Set celular
     *
     * @param string $celular
     * @return Usuario
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /** 
     * Set saldo
     *
     * @param float $saldo
     * @return Usuario
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    
        return $this;
    }

    /**
     * Get saldo
     *
     * @return float 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /** 
     * Set slogan
     *
     * @param string $slogan
     * @return Usuario
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
     * @return Usuario
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
     * Set ciudad
     *
     * @param string $ciudad
     * @return Usuario
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /** 
     * Set pais
     *
     * @param string $pais
     * @return Usuario
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /** 
     * Set recordatorio
     *
     * @param string $recordatorio
     * @return Usuario
     */
    public function setRecordatorio($recordatorio)
    {
        $this->recordatorio = $recordatorio;
    
        return $this;
    }

    /**
     * Get recordatorio
     *
     * @return string 
     */
    public function getRecordatorio()
    {
        return $this->recordatorio;
    }

    /** 
     * Set tipousuario
     *
     * @param \Tipousuario $tipousuario
     * @return Usuario
     */
    public function setTipousuario($tipousuario = null)
    {
        $this->tipousuario = $tipousuario;
    
        return $this;
    }

    /**
     * Get tipousuario
     *
     * @return \Tipousuario 
     */
    public function getTipousuario()
    {
        return $this->tipousuario;
    }
}
