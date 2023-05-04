<?php include("db.php")?>
<?php include("include/header.php")?>
    <div class="container" style="margin-top: 100px;">
        <section class="about">
            <h1 class="">Sobre Nosotros</h1>
            <ol class="p-0 ml-2">
                <li class="d-inline-block"><a href="index.php">Home</a></li>
                <li class="d-inline-block text-muted">/</li>
                <li class="d-inline-block">Sobre Nosotros</li>
            </ol>
            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <!--No olvidar agregar la clase img-responsive-->
                    <img src="resource/forexample.jpg" alt="" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-6 p-3 mb-5" style="line-height: 30px;">
                    <h2 class="mt-4">Sobre nuestra empresa</h2>
                    <p>Somos una empresa que se encarga de ofrecer a nuestros clientes el mejor hardware para oficina, edicion de video y Gaming.</p>
                    <p>Somos una empresa certificada y con proveedores directos de las mejores marcas en el mercado</p>
                    <p>Es asi que nosotros FastComputer Gaming los invitamos a comprar en nuestra tienda, llevandose consigo una de las mejores experiencias de comprar en precio y servicio.</p>
                </div>
            </div>
        </section>
        <section class="members mt-3">
            <h2 class="text-center">Miembros de nuestro equipo</h2>
            <div class="row mt-5">
                <div class="col-md-3 text-center">
                    <div style="border-radius: 50%; border:3px dashed #000;">
                        <img src="resource/team_img/1.png" alt="" style="border-radius: 50%;" class="img-fluid">
                    </div>
                    <h4 style="font-size: 18px;" class="mt-4">Nombre de la persona</h4>
                    <p>Cargo</p>
                </div>
                <div class="col-md-3 text-center">
                    <div style="border-radius: 50%; border:3px dashed #000;">
                        <img src="resource/team_img/1.png" alt="" style="border-radius: 50%;" class="img-fluid">
                    </div>
                    <h4 style="font-size: 18px;" class="mt-4">Nombre de la persona</h4>
                    <p>Cargo</p>
                </div>
                <div class="col-md-3 text-center">
                    <div style="border-radius: 50%; border:3px dashed #000;">
                        <img src="resource/team_img/1.png" alt="" style="border-radius: 50%;" class="img-fluid">
                    </div>
                    <h4 style="font-size: 18px;" class="mt-4">Nombre de la persona</h4>
                    <p>Cargo</p>
                </div>
                <div class="col-md-3 text-center">
                    <div style="border-radius: 50%; border:3px dashed #000;">
                        <img src="resource/team_img/1.png" alt="" style="border-radius: 50%;" class="img-fluid">
                    </div>
                    <h4 style="font-size: 18px;" class="mt-4">Nombre de la persona</h4>
                    <p>Cargo</p>
                </div>
            </div>
        </section>
        <hr>
        <section class="representationVideo">
            <div class="sec_video w-100 d-flex justify-content-center align-items-center flex-column" style="height: 283px;">
                <h2 class="mb-4 text-light">Video de representacion</h2>
                <a href="#" class="play-icon" data-toggle="modal" data-target="#video">
                    <i class="fas fa-play"></i>
                </a>
                <div class="modal fade" id="video">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Nuestra empresa</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <video autoplay loop muted width="100%" height="315">
                                    <source src="resource/media/pc_computer.mp4" type="video/mp4">
                                    <source>
                                </video>
                            </div>
                            <div class="modal-footer">
                                <small>En nuestra empresa representamos el valor de un producto</small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </div>
<?php include("include/footer.php")?>