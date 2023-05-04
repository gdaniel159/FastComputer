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
                        <a href="insertar_producto.php" class="btn btn-success mt-2 mb-2">Nuevo producto</a>
                        <a href="buscar_producto.php" class="btn btn-success mt-2 mb-2">Buscar producto</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <tr class="bg-dark text-light">
                            <td>ID Pedido</td>
                            <td>Fecha del pedido</td>
                            <td>ID Cliente</td>
                            <td>ID Producto</td>
                            <td>Cantidad</td>
                            <td>Precio</td>
                            <td>Utilidades</td>
                        </tr>
                        <?php
                            $sql = "SELECT p.id_pedido,fecha_pedido,p.id_cliente,id_producto,cantidad,precio FROM pedidos p INNER JOIN detalle_pedidos d ON p.id_pedido = d.id_pedidos";

                            $rs = mysqli_query($cn,$sql);

                            while($fila = mysqli_fetch_row($rs)){
                                echo "<tr>";
                                    for($i = 0; $i <= 5; $i++){
                                        echo "<td>".$fila[$i];
                                    }
                                    echo '<td>'.'<a href=detalle_pedido.php?id='.$fila[2].' class="btn btn-warning btn-block">Detalle</a>'; 
                                echo "</tr>";
                            }
                            mysqli_close($cn);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>