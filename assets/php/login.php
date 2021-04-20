<?php
    session_start();
    include '../../admin/assets/php/connect.php';
    $user = $_POST['username'];
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $pass = md5($password);

    // LOAD DATA
    $sql = "select * from customer where username = '$user'";
    $load = $con->query($sql);
    if($data = $load->fetch_assoc()){
        if($pass == $data['password']){
            $_SESSION['code_custom'] = $data['code_custom'];
            header("location:../../user.php");
        }
        else{
            $_SESSION['error'] = 'รหัสผ่านไม่ถูกต้อง';
            header("location:../../login.php");

        }
    }
    else{
        $_SESSION['error'] = 'ไม่พบบัญชีผู้ใช้';
       header("location:../../login.php");

    }