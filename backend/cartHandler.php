<?php 
    include '../backend/dbCon.php';
    $query = 'SELECT tblorder.order_id, tbl_product.pname, tbl_product.price, tbl_product.description, tbl_product.image
    from tblorder inner join tbl_product on tblorder.pid = tbl_product.pid where tblorder.user_id = ?';
    $stmt = 
?>