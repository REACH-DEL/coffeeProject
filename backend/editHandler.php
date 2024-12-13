<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        session_start();
        $pid = $_SESSION['pid'];
        echo 'hi';
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $cateid = $_POST['category'];
        $editDate = date('Y/m/d H:m:s');
        $newImage = $_FILES['new_image'];
        $ran = rand();
        $imgRan = $ran.$newImage['name'];
        $imgPath = $_SERVER['DOCUMENT_ROOT']."/cafeshop/asset/image/".$imgRan;
        if (!empty($_FILES['new_image']['name'])) {
            $imgDb = "../asset/image/".$imgRan;
            move_uploaded_file($_FILES['new_image']['tmp_name'], $imgPath);
        } else {
            $imgDb = $_POST['old_image'];
        }
        include './dbCon.php';
        $query = 'UPDATE tbl_product SET pname = ?, description = ?, price = ?, cid =?, image = ?, editDate = ? WHERE pid = ?';
        $stmt = mysqli_prepare($dbCon, $query);
        mysqli_stmt_bind_param($stmt, 'ssdissi', $name, $description, $price, $cateid, $imgDb, $editDate, $pid);
        if (mysqli_stmt_execute($stmt)){
            echo 'success';
            header("location: ../src/admin_product.php");
            exit;
        }else{
            echo "fail";
        }
        mysqli_stmt_close($stmt);
        mysqli_close($dbCon);
    }
?>