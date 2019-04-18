<?php

class indexController extends Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	$this->_view->titulo = '';
    	if(Session::get('autenticado')){
            $this->_view->renderizar('index', 'inicio');
        }else{
        	//$this->_view->renderizar('indexLogin', 'inicio');
            $this->_view->renderizar('index', 'inicio');
        }
    }

}

?>