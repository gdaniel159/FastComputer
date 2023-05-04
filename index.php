<?php include('db.php')?>
<?php include('include/header.php')?>
    <!--CAROUSEL-->
    <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner" style="background-color: #666;">
            <div class="carousel-item active">
                <img src="resource/slider.png" alt="." width="100%" height="500" class="d-block img-fluid" style="margin-top: auto;">
            </div>
            <div class="carousel-item">
                <img src="resource/slider.png" alt="." width="100%" height="500" class="d-block img-fluid" style="margin-top: auto;">
            </div>
            <div class="carousel-item">
                <img src="resource/slider.png" alt="." width="100%" height="500" class="d-block img-fluid" style="margin-top: auto;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!--MAIN CONTENT-->
    <br>
    <!--Mensaje del session login -->
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

    <div class="container">
        <div class="row p-3">
            <div class="col-12 mt-3 mb-3">
                <h1 class="text-center">Categoria de productos</h1>
            </div>
            <div class="col-md-6 p-4">
                <!-- <div class="categoria fakeimg mt-3 mb-3" style="height: 300px;">Procesadores</div> -->
                <img src="resource/procesadores.jpg" alt="Procesadores" title="Procesadores" class="d-block img-fluid categoria mt-3 mb-3" style="width:506px; height: 300px;">
                <!-- <div class="categoria fakeimg mt-3 mb-3" style="height: 300px;">Fuentes de poder</div> -->
                <img src="resource/fuente.jpg" alt="Fuentes de poder" title="Fuentes de poder" class="d-block img-fluid categoria mt-3 mb-3" style="width:506px; height: 300px;">
            </div>
            <div class="col-md-6 p-4" style="height: auto;">
                <!-- <div class="categoria fakeimg mt-3 mb-3" style="height: 615px;">Case's</div> -->
                <img src="resource/case.jpg" alt="Case's" title="Case's" class="d-block img-fluid categoria mt-3 mb-3" style="width:506px; height: 615px;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center m-3">Productos más vendidos</h2>
            </div>
            <div class="col-md-12">
                <div class="row d-flex flex-wrap justify-content-center">
                    <?php
                
                        $sql = "SELECT * FROM mas_vendidos";

                        $rs = mysqli_query($cn,$sql);

                        while($fila = mysqli_fetch_row($rs)){
                
                    ?>
                    <div class="col-md-3 m-2 p-4" style="height: auto;">
                        <div class="text-center">
                            <?= '<img src="Crud_Administrativo/'.$fila[4].'" alt="" style="width:100%; height: 200px; class="img-fluid d-block mt-3 mb-3">'; ?>
                            <?= $fila[1]; ?>
                            <br>
                            <?= $fila[3]; ?>
                            <br>
                            <?= 'S/. '.$fila[2]; ?>
                        </div>
                    </div>
                    <?php }?>
			        <?php //mysqli_close($cn); ?>
                </div>
            </div>
        </div>
    </div>
    <!--Newsletter - Boletin de noticias-->
    <hr style="border: 1px solid rgb(230, 230, 230);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-4">
                <h2 class="text-center m-3">Suscribete a nuestro boletin de noticias</h2>
                <p class="text-center text-muted">Al suscribirte a nuestro boletin de noticias obtendras las novedades mas actualizadas de nuestra tienda</p>
                <div class="col-lg-6 col-md-offset-3 m-auto">
                    <form action="" method="POST" name="newsletter">
                        <div class="input-group">
                            <input type="text" name="email" class="form-control" placeholder="Ingrese su correo">
                            <span class="">
                                <input type="submit" class="btn btn-dark" name="button_news" value="Suscribete ahora">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        
            if (isset($_POST['button_news'])) {
                
                if (!isset($_SESSION['idc'])) {

                    $id_cliente = $_SESSION['idc'];
                    $email = $_POST['email'];

                    $sql = "INSERT INTO newsletter(id_usuario,email) VALUES('$id_cliente','$email')";

                    mysqli_query($cn,$sql);

                    mysqli_close($cn);
                    
                }
                
            }
        
        ?>
    </div>
    <!--Instagram post-->
    <hr style="border: 1px solid rgb(230, 230, 230);">
    <div class="container">
        <h2 class="text-center m-4">Visualiza nuestro Instagram</h2>
        <div id="instagram" class="carousel slide carousel-fade" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#instagram" data-slide-to="0" class="active"></li>
                <li data-target="#instagram" data-slide-to="1"></li>
                <li data-target="#instagram" data-slide-to="2"></li>
                <!--<li data-target="#instagram" data-slide-to="3"></li>
                <li data-target="#instagram" data-slide-to="4"></li>
                <li data-target="#instagram" data-slide-to="5"></li> -->
            </ul>
            <div class="carousel-inner" style="background-color: #666;">
                <div class="carousel-item active">
                    <img src="resource/IG/1.jpg" alt="" width="100%" height="179" class="img-fluid">
                </div>
                <div class="carousel-item ">
                    <img src="resource/IG/2.jpg" alt="" width="100%" height="179" class="img-fluid">
                </div>
                <div class="carousel-item ">
                    <img src="resource/IG/3.jpg" alt="" width="100%" height="179" class="img-fluid">
                </div>
                <!-- <div class="carousel-item ">
                    <img src="#" alt="" width="100%" height="179" class="">
                </div>
                <div class="carousel-item ">
                    <img src="#" alt="" width="100%" height="179" class="">
                </div>
                <div class="carousel-item ">
                    <img src="#" alt="" width="100%" height="179" class="">
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#instagram" data-slide="prev">
                <span class="carousel-control-prev-icon text-light"></span>
            </a>
            <a class="carousel-control-next" href="#instagram" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
<?php include('include/footer.php')?>