<?php include('db.php')?>
<?php include('include/header.php')?>
    <!--MAIN CONTENT-->
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height:98vh">
            <div class="col-md-8">
				<div class="card">
                    <div class="card-header">
                        <h5 class="text-dark">Detalles del producto</h5>
                    </div>
                    <div class="card-body">
                        <?php

                            $_SESSION['codpro'] = $_GET['id'];
                            $_SESSION['prepro'] = $_GET['pp'];
                            $_SESSION['codcli'] = $_SESSION['idc'];

                            $sql = "SELECT c.imagen,c.id_producto,descripcion,precio,nombre_producto FROM catalogo c WHERE c.id_producto='".$_SESSION['codpro']."'";

                            $rs = mysqli_query($cn,$sql);
                            while($fila = mysqli_fetch_row($rs)){
                        ?>
                        <div class="col-md-4 text-center m-auto">
                            <?= "<img class='img-responsive d-block fakeimg m-auto' src=Crud_Administrativo/".$fila[0]." width=200 height=200 style='border:5px dotted #000'>"; ?>
                            <br>
                            <?= '<h4>'.$fila[4].'</h4>'; ?>
                            <?= '<p>'.$fila[2].'</p>'; ?>
                            <?= '<p>'.'S/. '.$fila[3].'</p>'; ?>
                            <form name="frmAdd" method="post" action="carrito_add.php">
                                <div class="form-group">
                                    <label for="Cantidad">Cantidad</label>
                                    <input class="" type="button" onclick="disminuir()" value="-">
                                    <input type="text" name="txtCantidad" size="2">
                                    <input class="" type="button" onclick="aumentar()" value="+">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Añadir al carrito" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <?php } ?>
			            <?php mysqli_close($cn); ?>
                    </div>
                    <!-- <div class="card-footer">
                        <form name="frmAdd" method="post" action="carrito_add.php">
                            <div class="form-group">
                                <label for="Cantidad">Cantidad</label>
                                <input class="" type="button" onclick="disminuir()" value="-">
                                <input type="text" name="txtCantidad" size="2">
                                <input class="" type="button" onclick="aumentar()" value="+">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Añadir al carrito" class="btn btn-primary">
                            </div>
                        </form>
                    </div> -->
                </div>
			</div>
        </div>
    </div>
<?php include('include/footer.php')?>