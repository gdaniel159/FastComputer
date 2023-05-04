<?php

    session_start();

    $server_name = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'proyecto_tienda';

    $cn = mysqli_connect($server_name,$user,$pass);

    mysqli_select_db($cn,$db);

?>