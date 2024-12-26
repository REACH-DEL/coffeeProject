<?php include'dbCon.php';
    $search = isset($_GET['search']) ? mysqli_real_escape_string($dbCon, $_GET['search']) : '';
    $query = 'SELECT * from tbluser where 1';
    if (!empty($search)){
      $query = $query." AND (username like '%$search%' )";
    }
    $result = mysqli_query($dbCon, $query);
?>
<?php if ($result->num_rows>0){ while($row = $result->fetch_assoc()){ ?>
<div class="content-card">
  <div class="right-part">
    <div class="img"><img src="<?php echo $row["img"]?>" alt=""></div>
    <div class="info">
      <h3><?php echo $row['username']?></h3>
      <div class="price">
        <p><?php echo $row['email']?></p>
      </div>
    </div>
  </div>
  <div class="btn-part">
    <p><?php echo $row['dateIn']?></p>
    <button class="deleteBtn" name="user_id" value-id="<?php echo $row['user_id']?>">
      <img src="../asset/icon/delete.svg" alt="" />
    </button>
  </div>
</div>
<?php   }
    }else{?>
<p>There no Content</p>

<?php }
?>
