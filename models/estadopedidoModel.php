<?php
/*
* -------------------------------------
* 
* Date: 18/04/2019 17:43:39 
* estadopedidoModel.php
* -------------------------------------
*/
class estadopedidoModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Estadopedido'); 
    }
}
?>