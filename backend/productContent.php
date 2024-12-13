<?php include'dbCon.php';
    $search = isset($_GET['search']) ? mysqli_real_escape_string($dbCon, $_GET['search']) : '';
    $category = isset($_GET['category']) ? intval($_GET['category']) : 0;
    $query = 'SELECT * from tbl_product where 1';
    if (!empty($search)){
      $query = $query." AND (pname like '%$search%' )";
    }
    if (!empty($category)){
      $query = $query." AND cid = '$category'";
    }
    $result = mysqli_query($dbCon, $query);
?>
<?php if ($result->num_rows>0){ while($row = $result->fetch_assoc()){ ?>
<div class="content-card">
  <div class="right-part">
    <div class="img"><img src="<?php echo $row["image"]?>" alt=""></div>
    <div class="info">
      <h3><?php echo $row['pname']?></h3>
      <div class="price">
        <p class="detail">
          <?php if (strlen($row['description'])>
          22){ $detail = substr($row['description'], 0, 22) . "...."; }else{
          $detail = $row['description']; } echo $detail?>
        </p>
        <p>$<?php echo $row['price']?></p>
      </div>
    </div>
  </div>
  <div class="btn-part">
    <p><?php echo $row['dateIn']?></p>
    <button class="editBtn" name="edit-id" value-id="<?php echo $row['pid']?>">
      <img src="../asset/icon/edit.svg" alt="" />
    </button>
    <button class="deleteBtn" name="pid" value-id="<?php echo $row['pid']?>">
      <img src="../asset/icon/delete.svg" alt="" />
    </button>
  </div>
</div>
<?php   }
    }else{?>
<p>There no Content</p>

<?php }
?>
