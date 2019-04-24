<?php

class categoriaController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_producto = $this->loadModel('producto');
        $this->_categoria = $this->loadModel('categoria');
    }
    
    public function index() { }

    public function detalle($categoria=null) {
        $this->_view->titulo = 'Categoria Detalle';
        $this->_view->categoria = $this->_categoria->get($categoria);
        $this->_view->categorias = $this->_categoria->resultList();
        $this->_view->productos = $this->_producto->findBy(array('categoria' => $categoria));
        $this->_view->renderizar('index', 'categoria');
    }

}

?>