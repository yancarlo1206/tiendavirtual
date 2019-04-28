<?php

class indexController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_producto = $this->loadModel('producto');
        $this->_categoria = $this->loadModel('categoria');
    }
    
    public function index() {
    	$this->_view->titulo = '';
    	if(Session::get('autenticado')){
            $this->_view->renderizar('index', 'inicio');
        }else{
            $this->_view->productosTendencias = $this->_producto->dql("SELECT p FROM Entities\Producto p WHERE p.id < 9");
            $this->_view->productosVendidos = $this->_producto->dql("SELECT p FROM Entities\Producto p WHERE p.id > 8 AND  p.id < 17");
            $this->_view->categorias = $this->_categoria->resultList();
            $this->_view->renderizar('index', 'inicio');
        }
    }

}

?>