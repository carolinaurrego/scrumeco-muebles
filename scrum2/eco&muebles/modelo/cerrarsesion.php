<?php
    if(isset($_POST['cierre'])){
        session_start();
        session_destroy();
        header("location:../index.html");
    }
?>