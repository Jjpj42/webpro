<?php
    include'assets/php/connect.php';
    session_start();
    if(!isset($_SESSION['e_id'])){
        $_SESSION['error'] = "กรุณาเข้าสู่ระบบ";
        header("location:index.php");
    }
    ?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../women.PNG"  type="image/icon type">
    <link rel="stylesheet" href="assets/css/console.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Dashboard(Edit Users)</title>
</head>
<body style=" background:;">
<?php require_once 'assets/navbar.php'?>

<div class="container" style=" background: white!important;">
    <div class="row">
        <div class="col-lg-3">
            <h4 class="my-4" style="margin-top:6.0rem!important;font-size:50px;">Edit Users</h4>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header p-0" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-light btn-block text-left p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               Edit User
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="user.php" class="list-group-item">User</a>
                                <a href="add_user.php" class="list-group-item">Add User</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-9">
            <h4 class="my-4" style="margin-top:6.0rem!important;">All User</h4>
            <?php include 'assets/php/log.php' ?>
            <table class="table table-hover">
                <tr align="center">
                    <th>User Code</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Edit Info</th>
                </tr>

                <?php
                // LOAD DATA
                $sql = "select * from customer";
                $query = $con->query($sql);
                $i=1;
                while($rs = $query->fetch_assoc()):
                ?>
                <tr align="center" valign="middle">
                    <td><?php echo $rs['code_custom'] ?></td>
                    <td><?php echo $rs['fname'] ?></td>
                    <td><?php echo $rs['lname'] ?></td>
                    <td><?php echo $rs['username'] ?></td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: center;">
                            <div class="btn-group mr-2" role="group" aria-label="First group" style="text-align: center">
                                <a href="edit_user.php?c_id=<?php echo $rs['code_custom'] ?>"  class="btn btn-warning">Edit</a>
                                <a href="assets/php/del_user.php?c_id=<?php echo $rs['code_custom'] ?>" class="btn btn-danger">Del</a>
                            </div>

                        </div>
                    </td>
                </tr>
                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</div>

<!-- Script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
</body>
</html>