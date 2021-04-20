<?php
session_start();
    include '../../admin/assets/php/connect.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $pass = md5($password);
    $c_id = $_SESSION['c_id'];
    // UPDATE DATA
    $sql = "update customer set fname='$fname',lname='$lname',username='$username',password='$pass' where c_id ='$c_id'";
    if($con->query($sql)){
        $_SESSION['suc'] = 'บันทึกข้อมูลสำเร็จ';
        header("location:../../user_setting.php");
    }
    else{
        $_SESSION['error'] = 'บันทึกข้อมูลไม่สำเร็จ ' . $con->error;
        header("location:../../user_setting.php");
    }