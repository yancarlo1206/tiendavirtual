<?php
/*
* -------------------------------------
* 
* Date: 26/01/2018 20:18:40 
* presentacionModel.php
* -------------------------------------
*/
class presentacionModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Presentacion'); 
    }
}
?>