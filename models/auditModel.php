<?php
/*
* -------------------------------------
* 
* Date: 04/10/2018 17:47:59 
* auditModel.php
* -------------------------------------
*/
class auditModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Audit'); 
    }
}
?>