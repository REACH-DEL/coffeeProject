<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $pw = $_POST['password'];
        include 'dbCon.php';
        $queryAdd = 'SELECT user_id, username, email, pw, token from tbluser where username = ?';        
        $stmt = mysqli_prepare($dbCon, $queryAdd);
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result &&$result->num_rows>0){
            $user = $result->fetch_assoc();
            if(password_verify($pw, $user['pw'])){
                session_start();
                $_SESSION['token'] = $user['token'];
                header('location: ../src/index.php');
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