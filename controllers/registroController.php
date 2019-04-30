<?php

class registroController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
    }
    
    public function index() {
        $this->_view->renderizar('index', 'registro');
    }

    public function crear() {
        $this->_usuario->getInstance()->setNombre($this->getPostParam('nombre'));
        $this->_usuario->getInstance()->setEmail($this->getPostParam('email'));
        $this->_usuario->getInstance()->setCelular($this->getPostParam('celular'));
        $this->_usuario->getInstance()->setClave($this->getPostParam('clave'));
        $this->_usuario->getInstance()->setEstado(1);
        try {
            $this->_usuario->save();
        } catch (Exception $e) {
                
        }
    }

}

?>