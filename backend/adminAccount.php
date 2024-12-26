<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST['admin_name']) && empty($_POST['pw'])){
            header('location: ../src/admin_setting.php');
            exit;
        }else{
            $admin_name = $_POST['admin_name'];
            $pw = $_POST['pw'];
            include './dbCon.php';
            $query = 'UPDATE tbladmin set';
            if(empty($_POST['admin_name'])){
                $query .= ' pw = "'.$pw.'"';
            }else if(empty($_POST['pw'])){
                $query .= ' admin_name = "'.$admin_name.'"';
            }
            else{
                $query .= ' admin_name = "'.$admin_name.'" ,pw = "'.$pw.'"';
            }
            $query .= " where admin_id = 1"; 
        
            if (mysqli_query($dbCon, $query)){
                echo "success";
            }else{
                echo "fail";
            }
            mysqli_close($dbCon);
        }
        
    }
?>