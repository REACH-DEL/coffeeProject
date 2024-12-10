<?php
    session_start();
    if (!isset($_SESSION['token'])){
        header("location: ../src/login.php");
        exit;
    }
    $token = $_SESSION['token'];
    include 'dbCon.php';
    $query = 'SELECT * FROM tbluser WHERE token=?';
    $stmt = mysqli_prepare($dbCon, $query);
    mysqli_stmt_bind_param($stmt,'s' , $token);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($result ->num_rows>0){
        while ($row = $result->fetch_assoc()){?>
        <img src="<?php echo $row['img']?>" alt="" width="46", height="46">
        <h2 class="text-dark-brown font-semibold sm:text-base text-xl active:text-white"><?php echo $row['username']?></h2>
        <?php }
    }else{
        session_destroy();
    }
?>