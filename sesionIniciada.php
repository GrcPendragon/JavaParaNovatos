<?php include 'php/sesionUsuario.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <h1>Cerrar Sesion</h1>
    <?php 
        $sesion = new SesionUsuario();
        echo $sesion->getUsuarioActual();
            
    ?>
    <a href="#CerrarSesion">Salir</a>


    <div id="CerrarSesion">
        <?php 
            
            echo $sesion->getUsuarioActual();
            
        ?>
    </div>
</body>
</html>