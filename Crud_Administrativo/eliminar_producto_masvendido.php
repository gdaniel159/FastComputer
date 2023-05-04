<?php

    include('../db.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM mas_vendidos WHERE id_producto='$id'";

    mysqli_query($cn,$sql);

    mysqli_close($cn);

    header('Location: productos_mas_vendidos.php');

?>