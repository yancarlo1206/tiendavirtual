<?php

class categoriaController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_producto = $this->loadModel('producto');
    }
    
    public function index() { }

    public function detalle($categoria=null) {
        $this->_view->titulo = 'Categoria Detalle';
        $this->_view->producto = $this->_producto->findBy(array('categoria' => $categoria));
        $this->_view->renderizar('index', 'categoria');
    }

}

?>