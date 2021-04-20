<?php
session_start();
if(isset($_SESSION['c_id'])) header("location:user.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin/assets/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<div class="login-control">
    <form action="assets/php/register.php" method="post" class="form-container">
        <div class="form-header">
            <h3>Register</h3>
        </div>
        <div class="container">
            <div class="row">
                <?php include 'admin/assets/php/log.php'?>
                <div class="mb-3 col-lg-6">
                    <input type="text" name="fname" placeholder="First Name" required class="form-control">
                </div>
                <div class="mb-3 col-lg-6">
                    <input type="text" name="lname" placeholder="Last Name" required class="form-control">
                </div>
                <div class="mb-3 col-lg-12">
                    <input type="text" name="username" placeholder="Username" required class="form-control">
                </div>
                <div class="mb-3 col-lg-12">
                    <input type="password" name="password" placeholder="Password" required class="form-control">
                </div>
                <div class="mb-3 col-lg-6">
                    <input type="text" name="phone_num" placeholder="Phone" required class="form-control">
                </div>
                <div class="mb-3 col-lg-6">
                    <input type="text" name="email" placeholder="Email" required class="form-control">
                </div>
                <div class="mb-3 col-lg-12">
                    <button class="btn btn-success form-control">Register</button>
                </div>
                <div class="mb-3 col-lg-12">
                    <div class="waring">
                        If You Have Account <a href="login.php">Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<!-- Script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
</body>
</html>