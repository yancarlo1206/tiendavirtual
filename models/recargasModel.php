<?php
/*
* -------------------------------------
* 
* Date: 26/01/2018 20:18:40 
* recargasModel.php
* -------------------------------------
*/
class recargasModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Recargas'); 
    }
}
?>