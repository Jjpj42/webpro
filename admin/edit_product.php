<?php
session_start();
include 'assets/php/connect.php';
if(!isset($_SESSION['e_id'])){
    $_SESSION['error'] = "กรุณาเข้าสู่ระบบ";
    header("location:index.php");
}
$ct = $_GET['ct'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../shop.PNG"  type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Dashboard(Edit Product Info)</title>
</head>
<body>
<?php require_once 'assets/navbar.php'?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h4 class="my-4" style="margin-top:6.0rem!important;font-size:45px;">Edit Product Info</h4>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header p-0" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-light btn-block text-left p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Product
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="product_manage.php" class="list-group-item">Product</a>
                                <a href="add_product.php" class="list-group-item">Add Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-0" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-light btn-block text-left collapsed p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Product List
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="view_cat.php" class="list-group-item">Product List</a>
                                <a href="add_cat.php" class="list-group-item">Add Product List</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-9">
            <div class="cat-header" style="text-align: center;">
                <h4 class="my-4" style="margin-top:6.0rem!important;">Edit Product Infomation</h4>
            </div>
            <form action="assets/php/update_product.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <?php include 'assets/php/log.php'?>
                        <?php
                            $psql = "select * from product where id_product  = '$ct'";
                            $load = $con->query($psql);
                            if($data = $load->fetch_assoc()):
                        ?>
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="id_product" value="<?php echo $data['id_product'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="p_name" value="<?php echo $data['p_name'] ?>" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <select name="id_category" id="id_category" class="form-select" aria-label="Default select example">
                                <?php
                                // LOAD CATEGORIES
                                $sql = "select * from category";
                                $qty = $con->query($sql);
                                while($rs = $qty->fetch_assoc()):
                                    if($rs['id_category'] == $data['id_category']) {
                                        ?>
                                        <option value="<?php echo $rs['id_category']?>" selected><?php echo $rs['type_product'] ?></option>
                                <?php
                                    }else{
                                    ?>
                                    <option value="<?php echo $rs['id_category']?>"><?php echo $rs['type_product'] ?></option>
                                <?php
                                    }
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="mb-4 col-lg-6">
                            <input type="text" name="p_price" value="<?php echo $data['p_price'] ?>" required class="form-control">
                        </div>
                        <div class="mb-4 col-lg-6">
                            <input type="text" name="p_amount" value="<?php echo $data['p_amount'] ?>" required class="form-control">
                        </div>
                        <div class="mb-4 col-lg-12">
                            <textarea name="p_detail" id="editor" cols="30" rows="10" class="form-control"><?php echo $data['p_detail'] ?></textarea>
                        </div>
                        <div class="mb-4 col-lg-6">
                            <input type="text" value="<?php echo $data['p_pic']?>" name="pchk" hidden>
                            <input type="file" class="form-control" name="p_pic">
                        </div>
                        <?php
                        endif;
                        ?>
                        <div class="mb-4 col-lg-6">
                            <button class="btn btn-success" style="float: right" type="submit">Enter</button>
                        </div>
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