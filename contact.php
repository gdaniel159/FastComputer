<?php include('db.php')?>
<?php include('include/header.php')?>
    <!--MAIN CONTENT - form -->
    <div class="container p-4" style="margin-top: 100px;">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="col-md-7 p-3 box-contact" style="box-shadow: 2px 2px 1px rgba(0, 0, 0, 0.3); border: 1px solid rgba(0, 0, 0, 0.2);">
                <h2 class="text-center">Contactenos para recibir mayor informacion</h2>
                <form action="envio_contacto.php" name="frmcontact" method="POST">
                    <div class="form-group">
                        <input type="text" id="name" name="txtName" class="form-control" required placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" id="number" name="txtNumber" class="form-control" placeholder="Numero de celular" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Ingrese su correo" required>
                    </div>
                    <div class="form-group">
                        <textarea name="txtCom" id="comment" rows="8" placeholder="Ingrese su consulta" class="form-control" required ></textarea>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Enviar formulario" class="btn btn-primary" name="btnSend">
                    </div>
                    <div class="form-group text-right">
                        <small class="text-muted">Porfavor sea paciente al esperar su respuesta</small>
                    </div>
                </form>
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
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ingrese su correo">
                        <span class="">
                            <button class="btn btn-dark" type="button">Suscribete ahora</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('include/footer.php')?>