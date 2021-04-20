<?php
include 'connect.php';
    session_start();
    $cat_id = $_GET['cat_id'];

    // DELETE
    $sql = "delete from category where id_category  = '$cat_id'";
    if($con->query($sql)){
        $_SESSION['suc'] = "ลบประเภทสินค้าสำเร็จ";
        header("location:../../view_cat.php");
    }
    else{
        $_SESSION['error'] = "ลบประเภทสินค้าไม่สำเร็จ";
        header("location:../../view_cat.php");
    }

