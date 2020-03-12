<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Java para novatos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Iconos -->
   
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  


</head>

<body>
    <!--Barra de navegación-->
    <nav class="navbar navbar-light bg-info text-white">
        <a class="navbar-brand text-white" href="index.php">
            <h3 class="">
                <div class="d-flex flex-row bd-highlight">
                    <div class="p-2 bd-highlight bg-light rounded">
                        <img src="assets/img/logo.png" width="60" height="40"
                            class="responsive d-inline-block align-top" alt="">
                    </div>
                    <div class="p-2 bd-highlight bg-info d-none d-md-block">
                        Java para novatos
                    </div>
                    <div class="p-2 bd-highlight bg-info d-block d-sm-none">
                        <h5>Java para novatos</h5>
                    </div>
                </div>
            </h3>
        </a>

        <div class="btn-group d-none d-md-block" role="group" aria-label="Basic example">
            <a class="btn btn-lg btn-outline-light" href="index.php">Inicio</a>
            <a class="btn btn-lg btn-outline-light active" href="">Iniciar sesión</a>
            <a class="btn btn-lg btn-outline-light" href="signup.php">Registrar</a>
            
        </div>
        <div class="dropdown dropleft d-block d-sm-block d-md-none">
            <a href="#" class="btn btn-lg btn-outline-light dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">menu</i>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php">Inicio</a>
                <a class="dropdown-item active" href="login.php">Iniciar sesión</a>
                <a class="dropdown-item" href="signup.php">Registrar</a>
            </div>
        </div>
    </nav>

    <!--Cuerpo de la pagina-->
    <div class="container align-self-center p-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 mt-5 p-3">
                <div class="container p-2 border border-info rounded-lg ">
                    <div class="d-flex justify-content-center flex-row bd-highlight">
                        <div class="rounded border border-info">
                            <img src="assets/img/logo.png" width="100" height="80"
                                class="responsive d-inline-block align-top" alt="">
                        </div>
                    </div>
                    
                    <form action="php/iniciarSesion.php" method="post" class="px-5 pt-3 text-center">
                        <h2>Iniciar sesión</h2>
                        <input type="email" name="correo" class="m-2 form-control border border-info" placeholder="Correo">
                        <input type="password" name="pass" class="m-2 form-control border border-info" placeholder="Contraseña">
                        <button type="submit" class="m-3 btn btn-lg btn-outline-info">Iniciar sesion</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 p-3 mt-5 d-none d-md-block">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner p-2 border rounded-lg border-info">
                        <div class="carousel-item active">
                            <img src="assets/img/slide1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/slide2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/slide3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/slide4.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>