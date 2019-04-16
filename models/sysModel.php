<?php
/*
* -------------------------------------
* 
* Date: 06/02/2018 11:10:10 
* sysModel.php
* -------------------------------------
*/
class sysModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Sys'); 
    }
}
?>