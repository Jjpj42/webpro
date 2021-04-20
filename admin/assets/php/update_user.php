<?php
    session_start();
    include'connect.php';
    $c_id = $_POST['code_custom'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password =mysqli_real_escape_string($con,$_POST['password']);
    $pass = md5($password);

    // UPDATE DATA
    $sql = "update customer set fname='$fname',lname='$lname',username='$username',password='$pass' where code_custom='$c_id'";
    if($con->query($sql)){
        $_SESSION['suc'] = "บันทึกข้อมูลสำเร็จ";
        header("location:../../edit_user.php?c_id=$c_id");
    }
    else{
        $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ ". $con->error;
        header("location:../../edit_user.php?c_id=$c_id");
    }

