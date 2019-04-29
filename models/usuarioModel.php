<?php
/*
* -------------------------------------
* 
* Date: 28/04/2019 20:36:13 
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