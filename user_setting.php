<?php
session_start();
include 'admin/assets/php/connect.php';
if(!isset($_SESSION['code_custom'])){
    $_SESSION['error'] = "กรุณาเข้าสู่ระบบ";
    header("location:index.php");
}
$c_id = $_SESSION['code_custom'];
// LOAD CUSTOMER NAME
$fname="";
$nsql = "select fname from customer where code_custom = '$c_id'";
$nload = $con->query($nsql);
if($ndata = $nload->fetch_assoc()) $fname = $ndata['fname'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../women.PNG"  type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Edit Account</title>
</head>
<body style="background:;" >
<?php require_once 'assets/navbarforin.php'?>
<div class="container" style="margin-top: 7.0rem!important;">
    <div class="row">
        <div class="mb-3 col-lg-12">
            <h4 style="font-size:50;font-weight:800;">Welcome <?php echo $fname ?></h4>
        </div>
        <div class="col-lg-3">
            <div class="list-group">
                <a href="user.php" class="list-group-item">Order History</a>
                <a href="user_setting.php" class="list-group-item">Edit Account</a>
            </div>
        </div>
        <div class="col-lg-9" style="border-left: 1px solid gray">
            <h4>Edit Account</h4>
            <?php include 'admin/assets/php/log.php' ?>
            <form action="assets/php/update_user.php" method="post">
                    <div class="row my-4">
                        <?php
                        include 'admin/assets/php/log.php';
                        // LOAD DATA
                        $sql ="select * from customer where code_custom = '$c_id'";
                        $load =$con->query($sql);
                        if($data = $load->fetch_assoc()):
                        ?>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="fname" placeholder="ชื่อจริง" value="<?php echo $data['fname'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="lname" placeholder="นามสกุล" value="<?php echo $data['lname'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="text" name="username" placeholder="Username" value="<?php echo $data['username'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="password" name="password"placeholder="Password" value="<?php echo $data['password'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <button class="btn btn-success" style="float: right">Enter</button>
                        </div>
                        <?php
                        endif;
                        ?>
                    </div>
            </form>
        </div>
    </div>
</div>



<!-- Script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
</body>
</html>