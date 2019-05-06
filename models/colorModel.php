<?php
/*
* -------------------------------------
* 
* Date: 05/05/2019 21:51:43 
* colorModel.php
* -------------------------------------
*/
class colorModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Color'); 
    }
}
?>