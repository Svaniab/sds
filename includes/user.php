<?php
include 'conexion.php';

class User extends Conexion{
    private $nombre;
    private $apellidos;
    private $usuario;


    public function validar($usuario, $password){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
        $query->execute(array('usuario' => $usuario));
        $id_usuario = NULL;
        foreach ($query as $fila) {
            if (password_verify($password, $fila['clave'])) {
                $id_usuario = $fila['id'];
            }
        }

        if($id_usuario){
            return $id_usuario;
        }else{
            return false;
        }
    }

    public function getUsuario($id){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $usuario = array();
        foreach ($query as $fila) {
            $usuario = array('nombre'=>$fila['primer_nombre'].' '.$fila['segundo_nombre'], 'apellidos'=>$fila['primer_apellido'].' '.$fila['segundo_apellido'], 'usuario'=>$fila['usuario']);
        }
        return $usuario;
    }

    public function setUser($id){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE id = :id');
        $query->execute(['id' => $id]);
        
        foreach ($query as $usuario) {
            $this->nombre = $usuario['primer_nombre'].' '.$usuario['segundo_nombre'];
            $this->apellidos = $usuario['primer_apellido'].' '.$usuario['segundo_apellido'];
            $this->usuario = $usuario['usuario'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>