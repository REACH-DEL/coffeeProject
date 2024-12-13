<?php
    session_start();
    if (!isset($_SESSION['admintoken'])){
        header("location: ../src/adminLogin.php");
        exit;
    }
?>