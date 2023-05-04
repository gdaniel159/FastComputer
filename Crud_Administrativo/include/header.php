<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de ropa">
    <meta name="keywords" content="ropa, polos, camisetas">
    <title>Administrativo - Intranet</title>
    <link rel="icon" type="image/png" href="resource/icons/logo.png" sizes="50x50">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body{
            background:url(resource/background.jpg);
            background-repeat:no-repeat;
            background-size:auto 100%;
        }
    </style>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed fixed-top">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active mr-2">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="lista_productos.php">Lista de productos</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="pedidos.php">Pedidos</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="productos_mas_vendidos.php">Lista de productos mas vendidos</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="atencion_cliente.php">Atencion al cliente</a>
                </li>
            </ul>
            <form method="POST" action="log_out_intra.php" class="form-inline my-2 my-lg-0">
                <?php
                
                    if (!isset($_SESSION['ida'])) {
                        echo '<a href="index.php" class="btn btn-outline-success my-2 my-sm-0 mr-2">Login</a>';
                    }else if(isset($_SESSION['ida'])){
                        echo '<input type="submit" class="btn btn-outline-success my-2 my-sm-0 mr-2" name="log_out_intra" value="Log Out">';
                    }
                
                ?>
            </form>
        </div>
    </nav>
    <hr style="border: 1px solid rgb(230, 230, 230);">