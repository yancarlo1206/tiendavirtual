<?php

class loginController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
    }
    
    public function index() {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        if($_POST){
            $this->_loginValidate();
        }
        $this->redireccionar();
    }

    public function iniciar() {
        $this->_view->titulo = 'Iniciar Sesión';
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->renderizar('index', ucwords($this->_view->titulo));
    }

    public function cambiar() {
        $this->_view->titulo = 'Cambiar Clave';
        if(!Session::get('autenticado')){
            $this->redireccionar();
        }
        if(isset($_POST['passAct'])){
            $veterinario = true;
            $usuario = $this->_veterinario->findByObject(array('codigo'  => Session::get('usuario')));
            if(!$usuario){
                $veterinario = false;
                $usuario = $this->_usuario->findByObject(array('nombre'  => Session::get('usuario')));
            }
            if(Hash::getHash('sha1', $this->getSql('passAct'), HASH_KEY) != $usuario->getClave()){
                Session::set('error','No Coincide la Clave Actual');
                $this->redireccionar();
                exit;
            }
            if($this->getSql('passNue') != $this->getSql('passRep')){
                Session::set('error','No Coincide las Claves Nuevas');
                $this->redireccionar();
                exit;
            }
            if($veterinario){
                $this->_veterinario->getInstance()->setClave(Hash::getHash('sha1', $this->getSql('passNue'), HASH_KEY));
                $this->_veterinario->update();
            }else{
                $this->_usuario->getInstance()->setClave(Hash::getHash('sha1', $this->getSql('passNue'), HASH_KEY));
                $this->_usuario->update();
            }
            Session::set('mensaje','La <b>Clave</b> se Actualizo');
            $this->redireccionar();
        }
        $this->_view->renderizar('cambio', ucwords($this->_view->titulo));
    }
    
    public function cerrar() {
        Session::destroy();
        $this->redireccionar();
    }

    private function _loginValidate(){
        if($_POST){
            if(!$this->getTexto('usuario')){
                Session::set('error','Debe Introducir un Usuario');
                $this->redireccionar();
                exit;
            }
            if(!$this->getSql('pass')){
                Session::set('error','Debe Introducir una Clave');
                $this->redireccionar();
                exit;
            }
            $usuario = $this->_usuario->findByObject(array('clave' => Hash::getHash('sha1', $this->getSql('pass'), HASH_KEY),'usuario'  => $this->getTexto('usuario')));
            if(!$usuario){
                Session::set('error','Codigo y/o Contraseña Incorrectos');
                $this->redireccionar();
                exit;
            }
            Session::set('autenticado', true);
            if($usuario->getTipoUsuario()->getId() == 100){
                Session::set('level', 'administrador');
            }
            if($usuario->getTipoUsuario()->getId() == 1){
                Session::set('level', 'usuario');
            }
            if($usuario->getTipoUsuario()->getId() == 2){
                Session::set('level', 'consultorio');
            }
            Session::set('usuario', $usuario->getUsuario());
            Session::set('codigo', $usuario->getId());
            Session::set('tiempo', time());
            Session::set('mensaje','Bienvenido <b>'.$usuario->getNombre().'</b>');
        }
    }
    
}

?>