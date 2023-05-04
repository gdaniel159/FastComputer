<?php

    include('../db.php');
    if (isset($_POST['btn_actualizar'])) {

        $id = $_POST['id'];
        $nombre = $_POST['name'];
        $descripcion = $_POST['desc'];
        $precio = $_POST['precio'];

        $sql = "UPDATE catalogo SET nombre_producto='$nombre', descripcion='$descripcion',precio='$precio' WHERE id_producto='$id'";
        
        mysqli_query($cn,$sql);

        mysqli_close($cn);

        header("location: lista_productos.php");
    }

?>