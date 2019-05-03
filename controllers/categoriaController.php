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
        $this->_view->categoria = $this->_categoria->findByObject(array('url' => $categoria));
        $miga = array();
        $miga['url'] = "categoria/detalle/".$this->_categoria->getInstance()->getUrl();
        $miga['nombre'] = ucwords(strtolower($this->_categoria->getInstance()->getDescripcion()));
        $this->_view->miga = array($miga);
        $this->_view->categorias = $this->_categoria->resultList();
        $this->_view->productos = $this->_producto->dql("SELECT p FROM Entities\Producto p JOIN p.categoria c WHERE c.url =:url", array('url' => $categoria));
        //$this->_view->productos = $this->_producto->findBy(array('categoria' => $categoria));
        $this->_view->renderizar('index', 'categoria');
    }

}

?>