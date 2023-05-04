<?php
    include("../db.php");
    if(isset($_POST['log_out_intra'])){
        session_unset();
        header("Location: index.php");
    }

?>