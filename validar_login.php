<?php

    include('db.php');
    if (isset($_POST['button_send'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM usuarios WHERE usuario='$user' AND pass='$pass'";

        $rs = mysqli_query($cn,$sql);

        if ($fila = mysqli_fetch_row($rs)) {
            $_SESSION['idc'] = $fila[0];
            $_SESSION['message'] = "Bienvenido ".$fila[1].' '.$fila[2];
            $_SESSION['message_type'] = "success";
            header("Location: index.php");
        }else{
            $_SESSION['message'] = "Ingrese los datos correctos";
            $_SESSION['message_type'] = "danger";
            header("Location: login.php");
        }
        mysqli_close($cn);
    }

?>