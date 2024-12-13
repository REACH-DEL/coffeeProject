<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $pid = (int)$_POST["pid"];
        include 'dbCon.php';
        $query = 'DELETE FROM tbl_product WHERE pid = ?';
        $stmt = mysqli_prepare($dbCon, $query);
        mysqli_stmt_bind_param($stmt, 'i', $pid);
        mysqli_stmt_execute($stmt);
    }
?>