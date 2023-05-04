<?php

    include('db.php');

    if (isset($_POST['btnSend'])) {

        $sql = "SELECT max(numero_orden) FROM contactenos";

        $rs = mysqli_query($cn,$sql);

        $fila = mysqli_fetch_row($rs);

        if($fila[0] == NULL){
            $id = "1";
        }else {
            $id = str_pad($fila[0]+1,1,STR_PAD_LEFT);
        }

        $nombre = $_POST['txtName'];
        $telefono = $_POST['txtNumber'];
        $email = $_POST['txtEmail'];
        $comment = $_POST['txtCom'];

        $sql = "INSERT INTO contactenos(numero_orden,nombres,telefono,email,comentario,fecha) VALUES('$id','$nombre','$telefono','$email','$comment',CURDATE())";

        mysqli_query($cn,$sql);

        mysqli_close($cn);

        header("location: confirmar_contacto.php");
    }

?>