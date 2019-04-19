<?php

class productoController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_producto = $this->loadModel('producto');
    }
    
    public function index() { }

    public function detalle($producto=null) {
        $this->_view->titulo = 'Producto Detalle';
        $this->_view->producto = $this->_producto->get($producto);
        $this->_view->renderizar('index', 'producto');
    }

}

?>