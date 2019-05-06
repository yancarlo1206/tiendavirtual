<?php

class productoController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_producto = $this->loadModel('producto');
        $this->_relacionado = $this->loadModel('relacionado');
    }
    
    public function index() { }

    public function detalle($producto=null) {
        $this->_view->titulo = 'Producto Detalle';
        $this->_view->producto = $this->_producto->get($producto);
        $miga = array();
        $miga['url'] = "producto/".$producto;
        $miga['nombre'] = ucwords(strtolower($this->_producto->getInstance()->getNombre()));
        $this->_view->miga = array($miga);
        $this->_view->productoRelacionados = $this->_relacionado->findBy(array("producto" => $producto));
       
        $this->_view->renderizar('index', 'producto');
    }

    public function cargar(){
        $this->_producto->get($this->getInt("producto"));
        $array = array();
        $array['id'] = $this->_producto->getInstance()->getId();
        $array['referencia'] = $this->_producto->getInstance()->getReferencia();
        $array['stock'] = $this->_producto->getInstance()->getStock();
        $array['nombre'] = $this->_producto->getInstance()->getNombre();
        $array['precio'] = $this->_producto->getInstance()->getPrecio();
        echo json_encode($array);
    }

    public function buscarsearch() {
        //echo("hola");
        $array = array();
        $param =  $_POST['param'];
        //echo("parametro: ".$param);
        //$param="SAC";
        $res = $this->_producto->findByLike($param);
        $i=0;
        foreach ($res as $row) {
            $arrayInt = array();
            $arrayInt['id'] = $row->getId();
            $arrayInt['referencia'] = $row->getReferencia();
            $arrayInt['stock'] = $row->getStock();
            $arrayInt['nombre'] = $row->getNombre();
            $arrayInt['precio'] = $row->getPrecio();
            $array[] = $arrayInt;
            $i++;
            if($i==6){
                echo json_encode($array);
                return;
            }
            
        }
        /*
        foreach ($res as $row) {
            echo ' <label>  <input name="subservios[]"  id="subservios[]" type="checkbox" value="'.$row->getId().'" /> '.$row->getDescripcion().' </label>&nbsp;&nbsp;&nbsp;'; 
                    
        }
        */
        //var_dump($res);
        echo json_encode($array);
    }

}

?>