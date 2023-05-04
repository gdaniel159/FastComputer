<?php

    include('db.php');
    if(isset($_POST['log_out'])){
        session_unset();
        header("Location: login.php");
    }

?>