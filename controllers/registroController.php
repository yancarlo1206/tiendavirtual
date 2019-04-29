<?php

class registroController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
    }
    
    public function index() {
        if($this->getInt('guardar')){
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
        $this->_view->renderizar('index', 'registro');
    }


}

?>