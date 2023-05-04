<?php include('../db.php')?>
<?php 
	if (!isset($_SESSION['ida'])) {
		header('location: index.php');
	} 
?>
<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:79.9vh;">
        <div class="col-md-12">
            <form action="" name="frmBuscar" method="POST">
                <div class="form-group">
                    <label for="" class="text-light">ID / Nombre del producto</label>
                    <input type="text" name="txtDato" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <input type="submit" value="Buscar" name="btn_search" class="btn btn-success btn-block">
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between">
                    <h3>Buscar Productos</h3>
                    <a href="productos_mas_vendidos.php" class="btn btn-success">Lista de productos</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-light">
                            <td>ID Producto</td>
                            <td>Nombre del producto</td>
                            <td>Precio</td>
                            <td>Descripcion</td>
                            <td>Imagen</td>
                        </tr>
                        <?php
                            if (isset($_POST['btn_search'])) {
                                $sql = "SELECT * FROM mas_vendidos WHERE id_producto='".$_POST['txtDato']."' OR nombre LIKE '%".$_POST['txtDato']."%'";

                                $rs = mysqli_query($cn,$sql);

                                while($fila = mysqli_fetch_row($rs)){
                                    echo "<tr>";
                                        for($i = 0; $i <= 4; $i++){
                                            if($i == 4){
                                                echo "<td><img src=".$fila[$i]." width=80 height=80>";
                                            }else{
                                                echo "<td>".$fila[$i];
                                            }
                                        }
                                    echo "</tr>";
                                }
                                mysqli_close($cn);
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>