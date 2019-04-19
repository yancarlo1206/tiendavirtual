<?php
/*
* -------------------------------------
* 
* Date: 18/04/2019 17:43:39 
* estadopedidohisModel.php
* -------------------------------------
*/
class estadopedidohisModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Estadopedidohis'); 
    }
}
?>