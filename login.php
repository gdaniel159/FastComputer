<?php include('db.php')?>
<!DOCTYPE html>
<html lang="es-pe">
<head>
    <!--Meta tag's-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de ropa">
    <meta name="keywords" content="ropa, polos, camisetas">
    <title>FastComputer Gaming S.A</title>
    <link rel="stylesheet" href="css/main.css">
    <!--Logo-->
    <link rel="icon" type="image/png" href="resource/icon/market_segmentation.png" sizes="24x24">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!-- NAVIGATION BAR -->
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
            <form class="form-inline my-2 my-lg-0">
                <a href="login.php" class="btn btn-outline-success my-2 my-sm-0 mr-2">Login</a>
                <a href="register.php" class="btn btn-outline-info my-2 my-sm-0">Register</a>
            </form>
        </div>
    </nav>
    <hr style="border: 1px solid rgb(230, 230, 230);">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height:98vh">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h5 class="text-dark">Login de usuarios</h5>
                    </div>
                    <div class="card-body">
                        <form action="validar_login.php" method="POST" name="frmLogin">
                            <div class="form-group">
                                <input type="text" name="user" class="form-control" required placeholder="Ingrese su usuario o correo electronico">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" required placeholder="Ingrese su contraseña">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="button_send" class="btn btn-success form-control" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <small><a href="forgot_password.php">Olvidaste tu contraseña?</a></small>
                        <small><a href="Crud_Administrativo/index.php">Apartado administrativo</a></small>
                        <small class="text-muted">Ingrese datos correctos</small>
                    </div>
                    <div class="col-md-12">
                        <?php if (isset($_SESSION['message'])) {?>
                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                                <?= $_SESSION['message']?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <br>
    <footer class="text-center text-lg-start bg-light text-muted">
        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-dark"
        >
            <div class="me-5 d-none d-lg-block">
                <span class="text-light">Utiliza las redes sociales para visualizar nuestro contenido</span>
            </div>

            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Fast Computer
                    </h6>
                    <p>
                        Empresa encargada de proveer productos de hardware de alta calidad y estandar, contando con las mejores colaboraciones de marcas reconocidad a nivel mundial
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="tienda.php" class="text-reset">Tienda</a>
                    </p>
                    <p>
                        <a href="aboutUs.html" class="text-reset">About Us</a>
                    </p>
                    <p>
                        <a href="contact.php" class="text-reset">Contacto</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Enlaces Utilitarios
                    </h6>
                    <p>
                        <a href="login.php" class="text-reset">Login</a>
                    </p>
                    <p>
                        <a href="Crud_Administrativo/index.php" class="text-reset">Administracion</a>
                    </p>
                    <p>
                        <a href="register.php" class="text-reset">Registrarse</a>
                    </p>
                    <p>
                        <a href="faq.html" class="text-reset">Ayuda</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> Todavia no tengo direccion :,v</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        example@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 51 976 763 323</p>
                    <p><i class="fas fa-print me-3"></i> + 01 7043765</p>
                </div>
            </div>
            </div>
        </section>
        <div class="text-center p-4 bg-dark" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="index.php">FastComputer.com</a>
        </div>
    </footer>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
