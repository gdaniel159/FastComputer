<?php include('../db.php')?>
<?php 
	if (!isset($_SESSION['ida'])) {
		header('location: index.php');
	} 
?>
<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:98vh">
        <div class="col-md-12 mt-4">
            <div class="card" style="height:600px">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                    <h4 class="text-dark">Listado de Productos</h4>
                    <div>
                        <a href="bestseller_insert.php" class="btn btn-success mt-2 mb-2">Nuevo producto</a>
                        <a href="bestseller_search.php" class="btn btn-success mt-2 mb-2">Buscar producto</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <tr class="bg-dark text-light">
                            <td>ID Producto</td>
                            <td>Nombre del producto</td>
                            <td>Precio</td>
                            <td>Descripcion</td>
                            <td>Imagen</td>
                            <td>Utilidades</td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM mas_vendidos ORDER BY id_producto";

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
                        ?>
                            <td>
                                <?= '<a href=editar_producto_masvendido.php?id='.$fila[0].' class="btn btn-warning btn-block">Editar</a>'; ?>
                                <?= '<a href=eliminar_producto_masvendido.php?id='.$fila[0].' class="btn btn-danger btn-block" onclick="return confirmar()">Eliminar</a>'; ?>
                        </tr>
                    <?php } ?>
                    <?php mysqli_close($cn); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>