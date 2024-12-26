<?php 
    session_start();
    session_destroy();
    header('location: ../src/adminLogin.php');
    exit;
?>