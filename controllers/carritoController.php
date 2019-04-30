<?php

class carritoController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_pedido = $this->loadModel('pedido');
        //$this->_relacionado = $this->loadModel('relacionado');
    }
    
    public function index() {
        $this->_view->renderizar('index', 'carrito');
    }

    public function proceder(){

        $this->_pedido = $this->loadModel('pedido');
        $this->_pedido->getInstance()->setFecha(new \DateTime());
        $this->_pedido->getInstance()->setEstado(1);
        $this->_pedido->save();


        $carrito = json_decode($_POST['carrito']);
        $car = array();

        foreach ($carrito as $detalle) {
            $this->_detallepedido = $this->loadModel('detallepedido');
            $this->_detallepedido->getInstance()->setProducto($detalle->producto);
            $this->_detallepedido->getInstance()->setPedido($this->_pedido->getInstance()->getId());
            $this->_detallepedido->getInstance()->setCantidad($detalle->cantidad);
            $this->_detallepedido->getInstance()->setPrecio($detalle->precio);
            $this->_detallepedido->save();
            array_push ( $car , $detalle->producto );
        }

        $array = array();
        $array['estado'] = 'Ok';
        $array['prods'] = $car;
        
        echo json_encode($array);
    }

}

?>