<?php
/*
* -------------------------------------
* 
* Date: 18/04/2018 11:20:19 
* mensajecanceladoModel.php
* -------------------------------------
*/
class mensajecanceladoModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Mensajecancelado'); 
    }
}
?>