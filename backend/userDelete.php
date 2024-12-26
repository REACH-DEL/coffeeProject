<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user_id = (int)$_POST["user_id"];
        echo $user_id;
        include 'dbCon.php';
        $query = 'DELETE FROM tbluser WHERE user_id = ?';
        $stmt = mysqli_prepare($dbCon, $query);
        mysqli_stmt_bind_param($stmt, 'i', $user_id);
        if(mysqli_stmt_execute($stmt)){
            echo "success";
        }else{
            echo "fail";
        }
    }
?>