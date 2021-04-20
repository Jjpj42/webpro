<?php
session_start();
include 'assets/php/connect.php';
if(!isset($_SESSION['e_id'])){
    $_SESSION['error'] = "กรุณาเข้าสู่ระบบ";
    header("location:index.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>ยินดีต้อนรับเข้าสู่ Dashboard</title>
</head>
<body>
<?php require_once 'assets/navbar.php'?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h4 class="my-4" style="margin-top:6.0rem!important;">ผู้ใช้</h4>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header p-0" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-light btn-block text-left p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                จัดการผู้ใช้
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="user.php" class="list-group-item">ผู้ใช้ทั้งหมด</a>
                                <a href="add_user.php" class="list-group-item">เพิ่มผู้ใช้ใหม่</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-9">
            <div class="cat-header" style="text-align: center;">
                <h4 class="my-4" style="margin-top:6.0rem!important;">ตั้งค่าบัญชี</h4>
            </div>
            <form action="assets/php/admin_update_user.php" method="post" >
                <div class="container">
                    <div class="row">
                        <?php include 'assets/php/log.php'?>
                        <?php
                        $sql = "select * from staff where code_staff='".$_SESSION['e_id']."'";
                        $load = $con->query($sql);
                        if($data = $load->fetch_assoc()):
                        ?>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="fname" value="<?php echo $data['fname'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="lname" value="<?php echo $data['lname'] ?>" required class="form-control">
                        </div>
                        <div class="mb-4 col-lg-6">
                            <input type="text" name="username" value="<?php echo $data['username'] ?>" required class="form-control">
                        </div>
                        <div class="mb-4 col-lg-6">
                            <input type="password" name="password" value="<?php echo $data['password'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="phone_num" value="<?php echo $data['phone_num'] ?>" required class="form-control">
                        </div>

                        <div class="mb-4 col-lg-12">
                            <button class="btn btn-success" style="float: right" type="submit">บันทึกข้อมูล</button>
                        </div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script -->
<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor');
    function CKupdate() {
        for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
    }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
</body>
</html>