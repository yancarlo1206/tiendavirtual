<?php
/*
* -------------------------------------
* 
* Date: 18/04/2019 17:43:39 
* marcaModel.php
* -------------------------------------
*/
class marcaModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Marca'); 
    }
}
?>