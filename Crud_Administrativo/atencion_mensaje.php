<?php include("../db.php")?>
<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:79.9vh">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h2 class="text-center text-light">Enviar respuesta</h2>
                </div>
                <div class="card-body">
                    <form action="enviar_mensaje.php" method="POST" name="frmContacInformation">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Correo" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="asunto" class="form-control" placeholder="Asunto" required>
                        </div>
                        <div class="form-group">
                            <textarea name="msg" placeholder="Mensaje" required class="form-control" style="height:150px"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn_send" class="btn btn-success form-control" value="Enviar respuesta">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>