<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $pw = $_POST['password'];
        include 'dbCon.php';
        $queryAdd = 'SELECT admin_id, admin_name, pw, token from tbladmin where admin_name = ?';        
        $stmt = mysqli_prepare($dbCon, $queryAdd);
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result &&$result->num_rows>0){
            $user = $result->fetch_assoc();
            if($pw === $user['pw']){
                session_start();
                $_SESSION['admintoken'] = $user['token'];
                header('location: ../src/admin_product.php');
                exit;
            }else{
                echo'Invalid username or password';
            }
        }else{
            echo 'user not found';
        }
        mysqli_stmt_close($stmt);
        mysqli_close($dbCon);
    }
?>