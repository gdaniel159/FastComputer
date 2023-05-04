<?php

    include('db.php');

    $cantidad = $_POST["txtCantidad"];

    $sql = "INSERT carrito VALUES('".$_SESSION['codpro']."',".$cantidad.",'".$_SESSION['prepro']."','".$_SESSION['codcli']."')";

    mysqli_query($cn,$sql);

    mysqli_close($cn);

    header("Location: carrito.php");
?>