<?php
session_start();
require 'funciones.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OneShot</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">


    <script src="https://kit.fontawesome.com/1e7079d68f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>

<body class="principal">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">OneShot</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">OneShot</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">


                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print calcularBebida() ?>
                            </span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="panel/index.php" class="btn">ADMIN
                            <span class="glyphicon glyphicon-lock">
                            </span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="contacto.php"><i class="fas fa-id-card-alt"></i> CONTACTO</a>

                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="./Productos.php"><i class="glyphicon glyphicon-tags"></i> PRODUCTOS</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="./index.php"><i class="fas fa-wine-glass-alt"></i> INICIO</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container" id="main">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="assets/imagenes/portada.jpeg" alt="Responsive image" width="1135">
                    <h2 class="text-center">"No tengo problemas con la bebida, excepto cuando no tengo una"</h2>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">

                    <img src="assets/imagenes/LoNuevo.jpeg" alt="Responsive image" width="550">
                    <img src="assets/imagenes/LoNuevo3.jpeg" alt="Responsive image" width="550">
                    <h2 class="text-center">"Lo mejor de lo mejor"</h2>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="assets/imagenes/tienda.jpg" alt="Responsive image" width="1135">
                    <h3 class="text-center">Encuentranos </h3>
                    <h4 class="text-center">En nuestro espacio encontrarás un exclusivo patio de dónde disfrutar de un auténtico puro.</h4>
                </div>
            </div>




        </div>


    </div> <!-- /container -->
    <footer>

        <div class="main-content ">
            <div class="left box ">
                <h2>Nosotros</h2>
                <div class="content ">
                    <p>Somos una tienda de bebidas alcohólicas con los precios más competitivos del mercado y un equipo
                        multidisplinar, profesional y cualificado.</p>
                    <div class="social ">
                        <a href=" "><span class="fab fa-facebook-f "></span></a>
                        <a href=" "><span class="fab fa-twitter "></span></a>
                        <a href=" "><span class="fab fa-instagram "></span></a>
                        <a href=" "><span class="fab fa-youtube "></span></a>
                    </div>
                </div>
            </div>

            <div class="center box ">
                <h2>Dirección</h2>
                <div class="content ">
                    <div class="place ">
                        <span class="fas fa-map-marker-alt "></span>
                        <span class="text ">ventanilla, callao</span>
                    </div>
                    <div class="phone ">
                        <span class="fas fa-phone-alt "></span>
                        <span class="text ">+51-958920823</span>
                    </div>
                    <div class="email ">
                        <span class="fas fa-envelope "></span>
                        <span class="text ">oneshot@oneshot.com</span>
                    </div>
                </div>
            </div>

            <div class="ring box ">
                <div>
                    <a href=" ">
                        <img src="assets/imagenes/footerlogo5.png " alt=" ">
                    </a>

                </div>
                <div class="cop ">
                    <p>Copyright © 2020 OneShot. Todos los derrechos reservados.</p>


                </div>
            </div>
        </div>

    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>


</html>