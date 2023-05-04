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
            <div class="col-md-12">
                <?php if (isset($_SESSION['message_int'])) {?>
                    <div class="alert alert-<?= $_SESSION['message_typeint'] ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message_int']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }?>
            </div>
            <div class="card" style="height:600px">
                <div class="card-header">
                    <h4 class="text-dark">Mensajes administrativos</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <tr class="bg-dark text-light">
                            <td>Numero de orden</td>
                            <td>Nombre del cliente</td>
                            <td>Telefono</td>
                            <td>Correo</td>
                            <td>Comentario</td>
                            <td>Fecha</td>
                            <td>Utilidades</td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM contactenos ORDER BY numero_orden";

                            $rs = mysqli_query($cn,$sql);

                            while($fila = mysqli_fetch_row($rs)){
                                echo "<tr>";
                                    for($i = 0; $i <= 5; $i++){
                                        echo "<td>".$fila[$i];
                                    }
                                    echo '<td>'.'<a href=atencion_mensaje.php class="btn btn-warning btn-block">Contestar</a>';
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