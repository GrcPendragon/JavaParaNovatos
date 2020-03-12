<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    
    public function __construct(){
        $this ->host = '127.0.0.1';
        $this ->db   = 'javapara_noobs';
        $this ->user = 'root';
        $this ->password = "";
        $this ->charset = 'utf8mb4';
    }
    
    function connect(){
        
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                
            ];
            $pdo = new PDO($connection, $this->user, $this->password,$options);
            
            return $pdo;
            
        }catch(PDOException $e){
            print('Error connection: '.$e->getMessage());
        }
        
    }

    function consulta($sql){

        $query = $this->connect()->prepare($sql);
        $query->execute();

        return $query;
    }

    function insertar($sql){
        $query = $this->connect()->prepare($sql);
        $query->execute();
    }

    function actualizar(){

    }

    function eliminar(){

    }
}