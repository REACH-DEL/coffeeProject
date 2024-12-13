<?php
echo ("Data recieve: ");
print_r($_POST);
print_r($_FILES);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ctype = (int)$_POST["ctype"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = (float)$_POST["price"];
    $img = $_FILES['img'];
    
    
    // Validate inputs
    if(empty($name) || empty($description) || empty($price) || empty($ctype) || empty($img)) {
        echo 'error';
        exit;
    }
    
    $ran = rand();
    $imgRan = $ran.$img['name'];
    $imgPath = $_SERVER['DOCUMENT_ROOT']."/cafeshop/asset/image/".$imgRan;
    $imgDb = "../asset/image/".$imgRan;
    
    if(move_uploaded_file($img['tmp_name'], $imgPath)) {
        $inDate = date('Y/m/d H:m:s');
        
        include 'dbCon.php';
        $queryAdd = 'INSERT INTO tbl_product (pname, price, description, image, dateIn, cid) 
            VALUES (?, ?, ?, ?, ?, ?)';
            
        $stmt = mysqli_prepare($dbCon, $queryAdd);
        mysqli_stmt_bind_param($stmt, 'sdsssi', $name, $price, $description, $imgDb, $inDate, $ctype);
        
        if (mysqli_stmt_execute($stmt)) {
            echo 'success';
        } else {
            echo 'error';
        }
        mysqli_stmt_close($stmt);
    } else {
        echo 'error: failed to move uploaded file to ' . $imgPath;
    exit;
        
    }
}
?>