<?php

include_once 'db.php';

class User extends DB{
    
    private $id_Usuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $usuario;
    private $clave;
    private $url_Img;
    private $estado;
    private $tema_Actual;
    
    public function usuarioExiste($correo, $pass){
    
        $md5pass = md5($pass);
        
        
        $query = $this->consulta('SELECT * FROM usuario WHERE correo = "'.$correo.'" AND pass = "'.$md5pass.'"');
        echo $query->rowCount();
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function setUserInfo($correo){
        $query = $this->consulta('SELECT * FROM usuario WHERE correo = "'.$correo.'"');
        
        foreach($query as $usuarioActual){
            $this->id_Usuario = $usuarioActual['id_Usuario'];
            $this->nombre = $usuarioActual['nombre'];
            $this->apellido = $usuarioActual['apellido'];
            $this->usuario = $usuarioActual['nickname'];
            $this->correo = $usuarioActual['correo'];
            $this->clave = $usuarioActual['pass'];
            $this->url_Img = $usuarioActual['url_Img'];
            $this->estado = $usuarioActual['estado'];
            $this->tema_Actual = $usuarioActual['tema_Actual'];
        }
    }
    
    public function getIdUsuario(){
        return $this->id_Usuario;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getCorreo(){
        return $this->correo;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function getClave(){
        return $this->clave;
    }
    public function getUrlImg(){
        return $this->url_Img;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getTemaActual(){
        return $this->tema_Actual;
    }
    
}

?>