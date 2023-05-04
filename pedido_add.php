<?php

    include("db.php");
    /*genera id del pedido*/
    $sql = "SELECT max(id_pedido) from pedidos";
    $rs = mysqli_query($cn,$sql);
    $fila = mysqli_fetch_row($rs);
    if($fila[0] == NULL){
        $id = "00001";
    }else {
        $id = str_pad($fila[0]+1,5,'0',STR_PAD_LEFT);
    }

    /*genera variable de sesión de id de pedido*/
    $_SESSION["id_pedido"] = $id;

    /*inserta nuevo pedido en la tabla de pedidos*/
    $sql = "INSERT pedidos VALUES('".$id."',CURDATE(),'".$_SESSION['idc']."')";
    mysqli_query($cn,$sql);

    /*transfiere datos del carrito al detalle de pedidos*/
    $sql = "INSERT INTO detalle_pedidos(id_producto,cantidad,precio,id_cliente) SELECT id_producto,
    cantidad,precio,id_cliente FROM carrito WHERE id_cliente='".$_SESSION['idc']."'";
    mysqli_query($cn,$sql);

    /*actualizando el id del pedido en la tabla detalle de pedidos*/
    $sql = "UPDATE detalle_pedidos SET id_pedidos='".$id."' WHERE id_pedidos=' '";
    mysqli_query($cn,$sql);

    /*quitando datos de productos del carrito*/
    $sql = "DELETE FROM carrito WHERE id_cliente='".$_SESSION['idc']."'";
    mysqli_query($cn,$sql);

    /*redireccionando a la página de confirmación*/
    header("Location: confirmacion.php");
?>