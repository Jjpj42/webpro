<?php
session_start();
if(isset($_SESSION['code_custom'])) header("location:user.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../log-in.PNG"  type="image/icon type">
    <link rel="stylesheet" href="admin/assets/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background:">
<div class="login-control">
    <form action="assets/php/login.php" method="post" class="form-container">
        <div class="form-header">
            <h3>Login</h3>
        </div>
        <div class="container">
            <div class="row">
                <?php include 'admin/assets/php/log.php'?>
                <div class="mb-3 col-lg-12">
                    <input type="text" name="username" placeholder="Username" required class="form-control">
                </div>
                <div class="mb-3 col-lg-12">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="mb-3 col-lg-12">
                    <button class="btn btn-primary form-control">Enter</button>
                </div>
                <div class="mb-3 col-lg-12">
                    <div class="waring">
                        No Account? <a href="register.php">Register!</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-12"style="text-align: center">
                    <a  href="index.php">Back To Home</a>
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