<?php include('../db.php')?>
<?php 
	if (!isset($_SESSION['ida'])) {
		header('location: index.php');
	} 
?>
<?php include('include/header.php')?>
<div class="container">
    <?php

        if (isset($_POST['btn_send'])) {
            
            $sql = "SELECT max(id_producto) FROM mas_vendidos";

            $rs = mysqli_query($cn,$sql);

            $fila = mysqli_fetch_row($rs);

            if($fila[0] == NULL){
                $id = "00001";
            }else {
                $id = str_pad($fila[0]+1,5,'0',STR_PAD_LEFT);
            }

            $name = $_POST['name'];
            $desc = $_POST['descripcion'];
            $precio = $_POST['precio'];

            //Imagen renombre y acceso
            $file = $id.".jpg";
            $ruta = "resource/mas_vendidos/";

            move_uploaded_file($_FILES['txtImg']['tmp_name'],$ruta.$_FILES['txtImg']['name']);

            rename($ruta.'/'.$_FILES['txtImg']['name'],$ruta.'/'.$file);

            
            $foto = 'resource/mas_vendidos/'.$id.'.jpg';

            $sql = "INSERT INTO mas_vendidos(id_producto,nombre,precio,descripcion,imagen) VALUES('$id','$name','$precio','$desc','$foto')";

            mysqli_query($cn,$sql);

            mysqli_close($cn);

            header("location: productos_mas_vendidos.php");


        }

    ?>
    <div class="row d-flex justify-content-center align-items-center" style="height:98vh">
        <div class="col-md-8 p-4" style="box-shadow: 2px 2px 1px rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.2); background-color:#fff;">
            <h2 class="text-center">Productos</h2>
            <form action="" name="frmProducto" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <!--Id-->
                    <input type="text" class="form-control" readonly placeholder="Id del producto">
                </div>
                <div class="form-group">
                    <!--Nombre del producto-->
                    <input type="text" class="form-control" name="name" placeholder="Nombre del producto">
                </div>
                <div class="form-group">
                    <!--Descripcion-->
                    <input type="text" class="form-control" name="precio" placeholder="Precio del producto">
                </div>
                <div class="form-group">
                    <!--Precio-->
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion del producto">
                </div>
                <div class="form-group">
                    <!--Imagen-->
                    <input type="file" id="txtImg" name="txtImg">
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="btn_send" value="Cargar el producto" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('include/footer.php')?>