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
                            <td>ID del Producto</td>
                            <td>Cantidad</td>
                            <td>Precio</td>
                            <td>Id Cliente</td>
                            <td>Importe</td>
                        </tr>
                        <?php
                            $sql = "SELECT d.id_pedidos, d.id_producto,d.cantidad,d.precio,d.id_cliente,d.cantidad*d.precio from detalle_pedidos d inner join pedidos p on p.id_pedido = d.id_pedidos where d.id_cliente = '".$_GET['id']."'";

                            $rs = mysqli_query($cn,$sql);

                            $suma = 0;

                            while($fila = mysqli_fetch_row($rs)){
                                echo "<tr>";
                                    for($i = 0; $i <= 5; $i++){
                                        echo "<td>".$fila[$i];
                                        if($i==5){
                                            $suma += $fila[$i];
                                        }
                                    }
                                echo "</tr>";
                            }
                            echo '<tr>
                                    <td colspan="6" class="text-right">
                                        Total: S/.'.$suma.'
                                    </td>
                                </tr>';
                            mysqli_close($cn);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>