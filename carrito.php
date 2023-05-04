<?php include('db.php')?>
<?php 
	if (!isset($_SESSION['idc'])) {
		header('location: login.php');
	} 
?>
<?php include('include/header.php')?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:98vh">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">
                    <h4 class="text-dark">Carrito</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr class="bg-dark text-light">
                            <td>Imagen</td>    
                            <td>IdProducto</td>
                            <td>Descripción</td>
                            <td>Cantidad</td>
                            <td>Precio</td>
                            <td>Importe</td>
                        </tr>
                        <?php
                            /*cadena para generar la consulta a la tabla de contactos*/
                            $sql = "SELECT imagen, c.id_producto, descripcion, cantidad, c.precio,
                            cantidad*c.precio importe FROM carrito c INNER JOIN catalogo ca 
                            ON c.id_producto = ca.id_producto WHERE id_cliente='".$_SESSION['codcli']."'";

                            $rs = mysqli_query($cn,$sql);

                            while($fila = mysqli_fetch_row($rs)){
                                echo "<tr>";
                                    for($i = 0; $i <= 5; $i++){
                                        if($i == 0){
                                            echo "<td><img src=Crud_Administrativo/".$fila[$i]." width=80 height=80>";
                                        }else{
                                            echo "<td>".$fila[$i];
                                        }
                                    }
                                echo "</tr>";
                            }
                            mysqli_close($cn);
                        ?>
                    </table>
                    <a href='pedido_add.php' class="btn btn-success">Confirmar pedido</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>