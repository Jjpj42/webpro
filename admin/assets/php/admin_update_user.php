<?php
session_start();
include'connect.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$e_id = $_SESSION['e_id'];
$password = mysqli_real_escape_string($con,$_POST['password']);
$pass = md5($password);

//UPDATE
$sql="update staff set fname='$fname',lname='$lname',username='$username',password='$pass' where code_staff='$e_id'";
if($con->query($sql)){
    $_SESSION['suc'] = "แก้ไขข้อมูลสำเร็จ";
    header("location:../../user_setting.php");
}
else{
    $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ " . $con->error;
    header("location:../../user_setting.php");
}