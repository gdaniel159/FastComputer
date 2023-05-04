<?php include('db.php')?>
<?php include('include/header.php')?>
<div class="container">
    <?php
    
        $sql = "SELECT email FROM usuarios WHERE id_usuario='".$_SESSION['idc']."'";

        $rs = mysqli_query($cn,$sql);

        while ($fila = mysqli_fetch_row($rs)){
    ?>
    <div class="row d-flex justify-content-center align-items-center" style="height:98vh">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <div class="card-body">
                    <h2>Gracias por comprar</h2>
                </div>
                <div class="card-footer">
                    <?= '<small>Espere mientras procesamos el pedido, le avisaremos por el correo que nos proporciono '.$fila[0].'</small>'; ?>
                    <br>
                    <a href="tienda.php">Seguir comprando</a>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php mysqli_close($cn); ?>
</div>
<?php include('include/footer.php')?>