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
$tema_Actual = 1;
session_start();
$_SESSION['existe'] = false;
    if ($clave == $rClave) {

        $query = $dataBase->consulta('SELECT * FROM usuario WHERE nickname = "'.$usuario.'" or correo = "'.$correo.'"');
        echo $query->rowCount();
        if($query->rowCount() > 0 ){
            $_SESSION['existe'] = true;
            header('location:../signup.php');
            
        }else{
            //Cambiar a que inicie sesion automaticamente
            $query = $dataBase->insertar('INSERT INTO usuario(id_Usuario, nombre, apellido, nickname, correo, pass, url_Img, estado, tema_Actual)VALUES(null,"'.$nombre.'","'.$apellido.'","'.$usuario.'","'.$correo.'","'. $clave.'","'.$url_Img.'","'.$estado.'",'.$tema_Actual.' )');
            $_SESSION['existe'] = false;
            header('location:../index.php');
        }
    }
    else {
        echo "Las contraseñas deben ser iguales";
    }
?>
