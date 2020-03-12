<?php
include 'db.php';
private $dataBase = new DB();
//Recibir los datos y almacenarlos en variables
private $nombre = $_REQUEST["nombre"];
private $apellido = $_REQUEST["apellido"];
private $correo = $_REQUEST["correo"];
private $usuario = $_REQUEST["usuario"];
private $clave = md5($_REQUEST["pass"]);
private $rClave = md5($_REQUEST["passR"]);
private $url_Img = "../userImg/defaultIMG.png";
private $estado = "activo";
private $tema_Actual = 1;
$existe = false;

    if ($clave == $rClave) {

        $query = $dataBase->consulta('SELECT * FROM usuario WHERE nickname = "'.$usuario.'" or correo = "'.$correo.'"');
        echo $query->rowCount();
        if($query->rowCount() > 0 ){
            $existe = true;
            header('location:../signup.php');
            
        }else{
            $query = $dataBase->insertar('INSERT INTO usuario(id_Usuario, nombre, apellido, nickname, correo, pass, url_Img, estado, tema_Actual)VALUES(null,"'.$nombre.'","'.$apellido.'","'.$usuario.'","'.$correo.'","'. $clave.'","'.$url_Img.'","'.$estado.'",'.$tema_Actual.' )');
            $existe = false;
            header('location:../index.php');
        }
    }
    else {
        echo "Las contraseñas deben ser iguales";
    }
?>
