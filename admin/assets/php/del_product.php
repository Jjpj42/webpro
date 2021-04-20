<?php
    include 'connect.php';
    session_start();
    $p_id = $_GET['p_id'];
    //DELETE
    $sql = "delete from product where id_product='$p_id'";
    if($con->query($sql)){
        $_SESSION['suc'] = "ลบรายการสินค้าสำเร็จ";
        header("location:../../product_manage.php");
    }
    else{
        $_SESSION['error'] = "ลบรายการสินค้าไม่สำเร็จ " . $con->error;
        header("location:../../product_manage.php");
    }
