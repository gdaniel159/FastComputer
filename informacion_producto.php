<?php include('db.php')?>
<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:90vh;">
        <div class="card">
            <div class="card-header text-center">
                <h2 class="text-dark">Informacion del producto</h2>
            </div>
            <div class="card-body">
                <?php
                
                    $sql = "SELECT * FROM catalogo WHERE id_producto='".$_GET['id']."'";

                    $rs = mysqli_query($cn,$sql);

                    while($fila = mysqli_fetch_row($rs)){
                ?>
                <div class="text-center">
                    <p>Nombre: <?= $fila[1]; ?></p>
                    <p>Descripcion: <?= $fila[2]; ?></p>
                    <p>Precio: <?= $fila[3]; ?> soles</p>
                    <?= '<img src="Crud_Administrativo/'.$fila[4].'" width="300" height="300" class="img-responsive d-block m-auto" style="border:3px dashed #000; padding:10px;">' ?>
                </div>
                <?php } ?>
                <?php mysqli_close($cn); ?>
            </div>
            <div class="card-footer">
                <a href="tienda.php" class="text-dark"><i class="fas fa-arrow-alt-circle-left"></i> Regresar a la tienda</a>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>