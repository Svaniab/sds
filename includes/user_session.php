<?php
define ('SITE_URL', 'dsd.test');

class UserSession{

    public function __construct(){
        session_start();
    }

    public function crearSession($id){
        $_SESSION['id_usuario'] = $id;
    }

    public function getCurrentUser(){
        return $_SESSION['id_usuario'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>