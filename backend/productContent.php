<?php include'dbCon.php';
    $query = 'select * from tbl_product'.$addQw;
    $result = mysqli_query($dbCon, $query);
?>
<?php if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
?>
<div class="content-card">
    <div class="right-part">
        <div class="img">
            <img src="<?php echo $row["image"]?>" alt="">
        </div>       
        <div class="info">
            <h3><?php echo $row['pname']?></h3>
            <div class="price">
                <p class="detail"><?php if (strlen($row['description'])> 22){
                    $detail = substr($row['description'], 0, 22) . "....";
                    }else{
                        $detail = $row['description'];
                    }
                    echo $detail?></p>               
                <p>$<?php echo $row['price']?></p>
            </div>
            
        </div>                       
    </div>                   
    <div class="btn-part">
        <p><?php echo $row['dateIn']?></p>
        <button><span class="material-symbols-outlined size">edit</span></button>
        <button><span class="material-symbols-outlined size">delete</span></button>
    </div> 
</div> 
<?php   }
    }else{?>
    <p>There no Content</p>

<?php }
?>                  