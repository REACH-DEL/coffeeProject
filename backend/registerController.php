<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pw = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $gender = $_POST['gender'];
        $token = bin2hex(random_bytes(16));
        $img = '';
        $dateIn = date('Y/m/d H:m:s');
        if ($gender == 'male'){
            $img = '../asset/image/muser.png';
        }else{
            $img = '../asset/image/fuser.png';
        }
        include 'dbCon.php';
        $queryAdd = 'INSERT INTO tbluser (username, email, pw, gender, img, token)
            VALUES (?, ?, ?, ?, ?, ?)';
            
        $stmt = mysqli_prepare($dbCon, $queryAdd);
        mysqli_stmt_bind_param($stmt, 'ssssss', $username, $email, $pw, $gender, $img, $token);
        if (mysqli_stmt_execute($stmt)) {
            session_start();
            $_SESSION['token'] = $token;
            header('location: ../src/index.php');
            exit;
        } else {
            echo 'error';
        }
        mysqli_stmt_close($stmt);
    }
?>