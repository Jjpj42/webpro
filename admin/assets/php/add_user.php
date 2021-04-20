<?php
    session_start();
    include 'connect.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $pass = md5($password);
    $phone_num = $_POST['phone_num'];
    $email = $_POST['email'];

    // INSERT DATA TO CUSTOMER TABLE
    $sql = "insert into customer (fname,lname,username,password,phone_num,email) value ('$fname','$lname','$username','$pass','$phone_num','$email')";
    if($con->query($sql)){
        $_SESSION['suc'] = "เพิ่มผู้ใช้สำเร็จ";
        header("location:../../add_user.php");
    }
    else{
        $_SESSION['suc'] = "เพิ่มผู้ใช้ไม่สำเร็จ " . $con->error;
        header("location:../../add_user.php");
    }