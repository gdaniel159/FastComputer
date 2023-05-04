<?php

    include('../db.php');
    if (isset($_POST['btn_actualizar'])) {

        $id = $_POST['id'];
        $nombre = $_POST['name'];
        $descripcion = $_POST['desc'];
        $precio = $_POST['precio'];

        $sql = "UPDATE mas_vendidos SET nombre='$nombre', precio='$precio',descripcion='$descripcion' WHERE id_producto='$id'";
        
        mysqli_query($cn,$sql);

        mysqli_close($cn);

        header("location: productos_mas_vendidos.php");
    }

?>