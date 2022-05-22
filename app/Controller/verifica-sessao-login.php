<?php
    session_start();
    if(!isset($_SESSION['logado']) || !isset($_SESSION['usuario'])){
        header("location:../View/login-form.php");
    }
?>