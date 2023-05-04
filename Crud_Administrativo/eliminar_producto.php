<?php

    include('../db.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM catalogo WHERE id_producto='$id'";

    mysqli_query($cn,$sql);

    mysqli_close($cn);

    header('Location: lista_productos.php');

?>