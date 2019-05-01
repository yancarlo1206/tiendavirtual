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
        $this->_view->renderizar('index', 'login');
    }

    public function iniciar(){
        if(!$this->getTexto('email') || !$this->getSql('clave')){
            $array['error'] = "Error en el Proceso" ;
            echo json_encode($array);
            exit;  
        }
        $usuario = $this->_usuario->findByObject(array('clave' => Hash::getHash('sha1', $this->getSql('clave'), HASH_KEY), 'email'  => $this->getTexto('email')));
        if(!$usuario){
            $array['error'] = "Correo y/o Contraseña Incorrectos" ;
            echo json_encode($array);
            exit;
        }
        Session::set('autenticado', true);
        Session::set('level', 'usuario');
        Session::set('usuario', $usuario->getNombre());
        Session::set('codigo', $usuario->getId());
        Session::set('tiempo', time());
        //Session::set('mensaje','Bienvenido <b>'.$usuario->getNombre().'</b>');
        $array['ok'] = "Inicio de Sesión Correcto" ;
        echo json_encode($array);
        exit;
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

    
    
}

?>