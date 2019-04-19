<?php
/*
* -------------------------------------
* 
* Date: 18/04/2019 17:43:39 
* favoritoModel.php
* -------------------------------------
*/
class favoritoModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Favorito'); 
    }
}
?>