<?php

    include('db.php');

    if (isset($_POST['btn_send'])) {

        $sql = "SELECT max(id_usuario) FROM usuarios";

        $rs = mysqli_query($cn,$sql);

        $fila = mysqli_fetch_row($rs);

        if($fila[0] == NULL){
            $id = "00001";
        }else {
            $id = str_pad($fila[0]+1,5,'0',STR_PAD_LEFT);
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $tipo = "usuario";

        $sql = "INSERT INTO usuarios(id_usuario,nombre,apellido,email,usuario,pass,tipo) VALUES('$id','$name','$surname','$email','$user','$pass','$tipo')";

        mysqli_query($cn,$sql);

        mysqli_close($cn);

        header("Location: login.php");

    }

?>