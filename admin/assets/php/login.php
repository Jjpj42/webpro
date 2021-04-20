<?php
    include 'connect.php';
    session_start();
    $username = $_POST['username'];
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $pass = md5($password);

    // CHECK USERNAME IN DATABASE
    $sql = "select code_staff,password from staff where username = '$username'";
    $qyt = $con->query($sql);
    if($rs = $qyt->fetch_assoc()){
        if($pass === $rs['password']){
            $_SESSION['e_id'] = $rs['code_staff'];
            header("location:../../console.php");
        }
        else{
            $_SESSION['error'] = "รหัสผ่านผิด";
            header("location:../../index.php");
        }
    }
    else{
        $_SESSION['error'] = "ไม่พบบัญชีผู้ใช้";
        header("location:../../index.php");
    }