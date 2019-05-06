<?php

class registroController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
    }
    
    public function index() {
        $miga = array();
        $miga['url'] = "registro/";
        $miga['nombre'] = ucwords(strtolower("CREAR CUENTA"));
        $this->_view->miga = array($miga);
        $this->_view->renderizar('index', 'registro');
    }

    public function crear() {
        header('Content-type: application/json; charset=utf-8');
        $array = array();
        $usuario = $this->_usuario->findByObject(array('email' => $this->getPostParam('email')));
        if($usuario){
            $array['error'] = "El correo ". $this->getPostParam('email') . " ya existe en el sistema" ;
            echo json_encode($array);
            exit;
        }
        $usuario = $this->_usuario->findByObject(array('celular' => $this->getPostParam('celular')));
        if($usuario){
            $array['error'] = "El celular ". $this->getPostParam('celular') . " ya existe en el sistema" ;
            echo json_encode($array);
            exit;
        }
        $this->_usuario->getInstance()->setNombre($this->getPostParam('nombre'));
        $this->_usuario->getInstance()->setEmail($this->getPostParam('email'));
        $this->_usuario->getInstance()->setCelular($this->getPostParam('celular'));
        $this->_usuario->getInstance()->setClave(Hash::getHash('sha1', $this->getPostParam('clave'), HASH_KEY));
        $this->_usuario->getInstance()->setEstado(1);
        try {
            $this->_usuario->save();
            $array['ok'] = "La Cuenta se Registró Correctamente";
        } catch (Exception $e) {
            $array['error'] = "Error en el Proceso";                
        }
        echo json_encode($array);
        exit;
    }

}

?>