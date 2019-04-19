<?php

class indexController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_producto = $this->loadModel('producto');
    }
    
    public function index() {
    	$this->_view->titulo = '';
    	if(Session::get('autenticado')){
            $this->_view->renderizar('index', 'inicio');
        }else{
            $this->_view->productosTendencias = $this->_producto->resultList();
            $this->_view->renderizar('index', 'inicio');
        }
    }

}

?>