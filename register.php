<?php include('db.php')?>
<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:98vh">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h5 class="text-dark">Registro</h5>
                </div>
                <div class="card-body">
                    <form action="validar_register.php" method="POST" name="frmLogin">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required placeholder="Ingrese su nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="surname" class="form-control" required placeholder="Ingrese su apellido">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required placeholder="Ingrese su correo electronico">
                        </div>
                        <div class="form-group">
                            <input type="text" name="user" class="form-control" required placeholder="Ingrese su nombre de usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" required placeholder="Ingrese una contraseña">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn_send" class="btn btn-success form-control" value="Registrarse">
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <small class="text-muted">Ingrese datos correctos</small>
                </div>
            </div>
        </div>
    </div>   
</div>
<?php include('include/footer.php')?>