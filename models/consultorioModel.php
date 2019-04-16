<?php
/*
* -------------------------------------
* 
* Date: 06/02/2018 11:10:10 
* consultorioModel.php
* -------------------------------------
*/
class consultorioModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Consultorio'); 
    }
}
?>