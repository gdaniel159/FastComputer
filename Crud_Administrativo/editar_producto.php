<?php include('../db.php')?>
<?php 
	if (!isset($_SESSION['ida'])) {
		header('location: index.php');
	} 
?>
<?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM catalogo WHERE id_producto='".$id."'";
    $rs = mysqli_query($cn,$sql);
    $fila = mysqli_fetch_row($rs);

    $nombre = $fila[1];
    $descripcion = $fila[2];
    $precio = $fila[3];

    mysqli_close($cn);

?>

<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:79.9vh">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h2 class="text-center text-light">Edicion de productos</h2>
                </div>
                <div class="card-body">
                    <form action="actualizar_producto.php" method="POST" name="frmContacInformation">
                        <div class="form-group d-flex justify-content-end">
                            <a href="lista_productos.php" class="btn btn-primary">Ver datos</a>
                        </div>
                        <div class="form-group">
                            <input type="text" name="id" class="form-control" placeholder="Ingrese el ID" required readonly value="<?php echo $id;?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre del producto" required value="<?php echo $nombre;?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="desc" class="form-control" placeholder="Ingrese la descripcion del producto" required value="<?php echo $descripcion;?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="precio" class="form-control" placeholder="Ingrese el precio del producto" required value="<?php echo $precio;?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn_actualizar" class="btn btn-success form-control" value="Actualizar Lista">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>