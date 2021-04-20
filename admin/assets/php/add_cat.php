<?php
    session_start();
    include 'connect.php';
    $name = $_POST['type_product'];

    // ADD DATA TO DATABASE
    $sql = "insert into category (type_product) values('$name');";
    if($con->query($sql)){
        $_SESSION['suc'] = "เพิ่มประเภทสินค้าสำเร็จ";
        header("location:../../add_cat.php");
    }
    else{
        $_SESSION['error'] = "เพิ่มประเภทสินค้าไม่สำเร็จ " . $con->error;
        header("location:../../add_cat.php");
    }