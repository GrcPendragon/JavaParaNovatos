<?php

include_once 'db.php';

class User extends DB{
    
    private $id;
    private $nombre;
    private $correo;
    private $user;
    private $pass;
    
    public function userExists($user, $pass){
    
        $md5pass = md5($pass);
        
        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE user = :user AND pass = :pass');
        $query->execute(['user'=>$user, 'pass'=>$md5pass]);
        
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE user = :user');
        $query->execute(['user' => $user]);
        
        foreach($query as $currentUser){
            $this->id = $currentUser['idUsuario'];
            $this->nombre = $currentUser['nombre'];
            $this->correo = $currentUser['correo'];
            $this->user = $currentUser['user'];
            $this->pass = $currentUser['pass'];
        }
    }
    
    public function getIdUsuario(){
        return $this->id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getCorreo(){
        return $this->correo;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function getPass(){
        return $this->pass;
    }
    
}

?>