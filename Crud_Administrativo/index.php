<?php include('../db.php')?>
<?php

    if (isset($_POST['button_send'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM usuarios_administrativos WHERE usuario='$user' AND pass='$pass'";

        $rs = mysqli_query($cn,$sql);

        if ($fila = mysqli_fetch_row($rs)) {
            $_SESSION['ida'] = $fila[0];
            $_SESSION['message_int'] = "Bienvenido ".$fila[1].' '.$fila[2];
            $_SESSION['message_typeint'] = "success";
            header("Location: lista_productos.php");
        }else{
            $_SESSION['message_int'] = "Ingrese los datos correctos";
            $_SESSION['message_typeint'] = "danger";
            header("Location: index.php");
        }
        mysqli_close($cn);
    }

?>
<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:82vh">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header d-flex justify-content-center">
                    <h5 class="text-dark">Login administrativo</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST" name="frmLogin">
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
                    <small class="text-muted">Ingrese datos correctos</small>
                </div>
            </div>
            <?php if (isset($_SESSION['message_int'])) {?>
                <div class="alert alert-<?= $_SESSION['message_typeint'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message_int']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>