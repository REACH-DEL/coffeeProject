<?php 
    include '../backend/dbCon.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    $qty = $_GET['qty'];
    $pid = $_GET['pid'];
    $query = 'INSERT INTO tblorder(user_id, pid, quantity) values (?, ?, ?)';
    $stmt = mysqli_prepare($dbCon, $query);
    mysqli_stmt_bind_param($stmt, 'iii', $user_id, $pid, $qty);
    if (mysqli_stmt_execute($stmt)){
        echo 'success';
    }else{
        echo 'fail';
    }
?>