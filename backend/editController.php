<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pid = $_POST['edit-id'];
        session_start();
        $_SESSION['pid'] = $pid;
        include '../backend/dbCon.php';
        $query = 'SELECT * FROM tbl_product WHERE pid = ?';
        $stmt = mysqli_prepare($dbCon, $query);
        mysqli_stmt_bind_param($stmt, 'i', $pid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result->num_rows>0){
            while($item = $result->fetch_assoc()){
    ?>
        <img src="<?php echo $item['image']?>" alt="">
        <Form id="formEdit" method="POST" enctype="multipart/form-data" action="../backend/editHandler.php">
            <p>Name</p>
            <input type="text" name="name" id="" value="<?php echo $item['pname']?>">
            <p>Description</p>
            <textarea name="description" id=""><?php echo $item['description']?></textarea>
            <p>Price</p>
            <input type="text" name="price" id="" value="<?php echo $item['price']?>"><br>
            <select name="category" id="">
            <?php include '../backend/category.php';
                if($cate->num_rows>0){
                    while($row = $cate->fetch_assoc()){
            ?>
                    <option value="<?php echo $row["cid"]?>"><?php echo $row["category"]?></option>
            <?php        }
                }
            ?>
            </select>
            <p>Image</p>
            <input type="hidden" name="old_image" value="<?php echo $item['image']?>">
            <input type="file" name="new_image" id="" >
            <div class="button">
                <input type="button" value="Cancel" class="cancelBtn" onclick="onclickCloseEdit()">
                <input type="submit" value="Change" class="changeBtn">
            </div>
            
        </Form>
            <?php }
        }
    }
    
?>