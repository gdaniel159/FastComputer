<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Servicios de venta de hardware FastComputer">
    <meta name="keywords" content="Cpu, Case, Ryzen, Procesadores,Gamer">
    <title>FastComputer Gaming S.A</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="resource/icon/market_segmentation.png" sizes="24x24">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed fixed-top">
        <a class="navbar-brand" href="index.php">FastComputer Gaming</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active mr-2">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown mr-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Tienda</a>
                    <div class="dropdown-menu">
                        <h6 class="dropdown-header">Opciones de la tienda</h6>
                        <a class="dropdown-item" href="tienda.php">Tienda</a>
                        <a class="dropdown-item" href="carrito.php">Carrito</a>
                        <div class="dropdown-divider"></div>
                        <!--Preguntas y respuesta-->
                        <a href="faq.html" class="dropdown-item">FAQ</a>
                    </div>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="aboutUs.php">Sobre nosotros</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
            </ul>
            <form method="POST" action="log_out.php" class="form-inline my-2 my-lg-0">
                <?php

                    if (!isset($_SESSION['idc'])) {
                        echo '<a href="login.php" class="btn btn-outline-success my-2 my-sm-0 mr-2">Login</a>';
                        echo '<a href="register.php" class="btn btn-outline-info my-2 my-sm-0">Register</a>';
                    }else if(isset($_SESSION['idc'])){
                        echo '<input type="submit" class="btn btn-outline-success my-2 my-sm-0 mr-2" name="log_out" value="Log Out">';
                    }
                
                ?>
            </form>
        </div>
    </nav>
    <hr style="border: 1px solid rgb(230, 230, 230);">