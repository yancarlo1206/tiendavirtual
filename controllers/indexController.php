<?php

class indexController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_dosificacion = $this->loadModel('dosificacion');
        $this->_cliente = $this->loadModel('cliente');
        $this->_mensaje = $this->loadModel('mensaje');
        $this->_usuario = $this->loadModel('usuario');
    }
    
    public function index() {
    	$this->_view->titulo = '';
    	if(Session::get('autenticado')){
            $this->_view->dosificaciones = $this->cargarDosificaciones();
            $this->_view->clientes = $this->cargarClientes();
            $this->_view->mensajes = $this->cargarMensajes();
            $this->_view->saldo = $this->cargarSaldo();
            $this->_view->renderizar('index', 'inicio');
        }else{
        	$this->_view->renderizar('indexLogin', 'inicio');
        }
    }

    public function cargarDosificaciones(){
        $dosificaciones = $this->_dosificacion->findBy(array('usuario' => Session::get('codigo')));
        return $dosificaciones;
    }

    public function cargarClientes(){
        $clientes = $this->_cliente->findBy(array('usuario' => Session::get('codigo')));
        return $clientes;
    }

    public function cargarMensajes(){
        $mensajes = $this->_mensaje->dql("SELECT m FROM Entities\Mensaje m JOIN m.dosis d WHERE d.usuario =:usuario", array('usuario' => Session::get('codigo')));
        return $mensajes;
    }

    public function cargarSaldo(){
        $saldo = $this->_usuario->findBy(array('id' => Session::get('codigo')));
        return $saldo;
    }
}

?>