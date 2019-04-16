<?php
/*
* -------------------------------------
* 
* Date: 26/01/2018 20:18:40 
* tipousuarioModel.php
* -------------------------------------
*/
class tipousuarioModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Tipousuario'); 
    }
}
?>