<?php
session_start();
session_destroy();
$_SESSION['suc'] = 'ออกจากระบบสำเร็จ';
header("location:../../login.php");