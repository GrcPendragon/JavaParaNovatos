<?php 

    include 'db.php';
    include 'sesionUsuario.php';
    include 'usuario.php';

    $correo = $_REQUEST["correo"];
    $clave = md5($_REQUEST["pass"]);
    $datosUsuario = new User();

    if ($datosUsuario->usuarioExiste($correo,$clave)) {
        $datosUsuario->setUserInfo($correo);   $sesionUser = new SesionUsuario();
        $sesionUser->setUsuarioActual($datosUsuario->getUsuario());
        header("location: ../sesionIniciada.php");
    }else{
        echo "El usuario no existe";
    }
?>