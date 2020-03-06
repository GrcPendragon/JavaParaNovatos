<?php
include 'db.php';
$dataBase = new DB();
//Recibir los datos y almacenarlos en variables
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$correo = $_REQUEST["correo"];
$usuario = $_REQUEST["usuario"];
$clave = md5($_REQUEST["pass"]);
$rClave = md5($_REQUEST["passR"]);
$url_Img = "../userImg/defaultIMG.png";
$estado = "activo";
$tema_Actual = 0;
$existe = false;
    if ($clave == $rClave) {

        $query = $dataBase->connect()->prepare('SELECT * FROM usuario WHERE nickname = :user');
        $query->execute(['user'=>$usuario]);
            
        if($query->rowCount()){
            $existe = true;
            header('location:signup.php');
            
        }else{
            $query = $dataBase->connect()->prepare('INSERT INTO usuario(id_Usuario, nombre, apellido, nickname, correo, pass, url_Img, estado, tema_Actual)VALUES(null,:nombre,:apellido,:usuario,:correo, :pass, :url_Img, :estado, null)');
            $query->execute(['nombre' => $nombre, 'apellido' => $apellido, 'usuario' => $usuario, 'correo' => $correo, 'pass' => $clave, 'url_Img' => $url_Img, 'estado' => $estado]);
            $existe = false;
            header('location:../index.php');
        }
    }
    else {
        echo "Las contraseñas deben ser iguales";
    }
?>
