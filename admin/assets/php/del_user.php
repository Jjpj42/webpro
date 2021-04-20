<?php
    session_start();
    include 'connect.php';
    $c_id = $_GET['c_id'];
    //DELETE USER
    $sql = "delete from customer where code_custom ='$c_id'";
    if($con->query($sql)){
        $_SESSION['suc'] = "ลบบัญชีผู้ใช้สำเร็จ";
        header("location:../../user.php");
    }
    else{
        $_SESSION['error'] = "ลบบัญชีผู้ใช้ไม่สำเร็จ " . $con->error;
        header("location:../../user.php");
    }