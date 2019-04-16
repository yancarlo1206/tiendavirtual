<?php
/*
* -------------------------------------
* 
* Date: 26/01/2018 20:18:40 
* usuarioModel.php
* -------------------------------------
*/
class usuarioModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Usuario'); 
    }
}
?>