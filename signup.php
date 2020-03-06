<html lang="es">
    <link rel="stylesheet" href="../css/estilos.css"/>
    <header>
        <meta charset="utf-8">
         <img src="../img/Preguntados.png" id="preguntados" width="100%"/>
    </header>
    <head>
       <title>
            Pregunta2
        </title>
        <link rel="icon" type="image/png" href="../img/favicon.ico">
    </head>
    <body>
        <ul class="menu">
             <li><a href="../index.php">Inicio</a></li>
             <li><a href="../index.php">Iniciar sesión</a></li>
             <li><a href="contacto.php">Contacto</a></li>
         </ul>
        <label>Favor de llenar todos los campos.</label>
        <br/>
        <input class="addUser" type="image" src="../img/addUser.png"/>
        <label id="errorUser"></label>
        <form action="registrar.php" method="post" class="Registro">
           <?php
            
            if($existe){
                echo 'El usuario ya existe.';
            }
            
           ?>
            <table border="0" cellspacing="20px">
                <tr>
                    <td>
                        <label for="nombre">Nombre:</label>
                    </td>    
                    <td>
                        <input type="text" name="nombre" class="inputTxt" id="nombre" autofocus required/>
                    </td>    
                </tr>
                <tr>
                    <td>
                        <label for="correo">E-mail:</label>
                    </td>    
                    <td>
                        <input type="email" name="correo" class="inputTxt" id="correo" required/>
                    </td>    
                </tr>
                <tr>
                    <td>
                       <label for="usuario">Usuario:</label>
                    </td>    
                    <td>
                        <input type="text" name="usuario" class="inputTxt" id="usuario" required/>
                    </td>    
                </tr>
                <tr>
                    <td>
                        <label for="contraseña">Contraseña:</label>
                    </td>    
                    <td>
                        <input type="password" name="contraseña" class="inputTxt" id="contraseña" required/>
                    </td>    
                </tr>
                <tr>
                    <td>
                            <label for="repitContra">Repetir contrseaña:</label>
                    </td>    
                    <td>
                        <input type="password" class="inputTxt" id="repitContra" required/>
                    </td>    
                </tr>
                <tr class="btnRegistrar">
                    <td colspan="2">
                        <button type="submit" name="Registrar">Registrar</button>
                    </td>
                </tr>
            </table>    
        </form>
            
        <blockquote>
            Pagina diseñada con fines educativos. Derechos reservados.                                                   
        </blockquote>
        
    </body>
</html>