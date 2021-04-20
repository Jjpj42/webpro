<?php
include 'admin/assets/php/connect.php';
session_start();
$ct = $_GET['ct'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="icon" href="../../handbag.PNG"  type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MIUMIU</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body style="background:#708090">

<!-- Navigation -->
<?php require_once 'assets/navbar.php'?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h4 class="my-4" style="font-weight:800;">PRODUCT LIST</h4>
            <div class="list-group">
                <?php
                $sql = "select * from category";
                $load  =$con->query($sql);
                while($rs = $load->fetch_assoc()):
                    ?>
                   <center> <a href="product-list.php?ct=<?php echo $rs['type_product'] ?>" class="list-group-item"><?php echo $rs['type_product']?></a></center>
                <?php
                endwhile;
                ?>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="row">
                <?php
                    // LOAD PRODUCT DATA
                    $sql = "select * from product where id_product  = '$ct'";
                    $load = $con->query($sql);
                    if($data = $load->fetch_assoc()):
                ?>
                <div class="col-lg-12" style="text-align: center;">
                    <h5 class="my-4"  style="color:black;text-align: center ; font-size:50px;">Product Details</h5>
                </div>

                <div class="col-lg-4">
                    <img src="admin/assets/images/<?php echo $data['id_product']?>/<?php echo $data['p_pic'] ?>" alt="<?php echo $data['p_name'] ?>" class="img-fluid" >
                </div>
                <div class="col-lg-8">
                    <h5><?php echo $data['p_name'] ?></h5>
                    <br>
                    <br>
                    <p class="price" style="font-weight:700;"> Price :  $<strong><?php echo $data['p_price'] ?></strong></p>
                    <a href="cart.php?p_id=<?php echo $ct ?>&act=add" class="btn btn-primary">Add To Cart</a>
                    <br>
                    <br>
                    <p style="font-weight:700;">Quantity :  <strong><?php echo $data['p_amount']?> </strong></p>
                </div>
                <div class="col-lg-12">
                    <center><h5 style="padding: 20px;font-weight: 500">Product Detail</h5></center>
                    <center><?php echo $data['p_detail'] ?></center>
                </div>
                <?php
                endif;
                ?>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h5 style="padding: 20px;font-weight: 400">Other Product</h5>
        </div>
        <?php
            $sql = "select * from product order by rand() limit 4";
            $load = $con->query($sql);
            while ($rs  =$load->fetch_assoc()):
        ?>
                <div class="col-lg-3 mb-4">
                    <div class="card h-100">
                        <a href="product.php?ct=<?php echo $rs['id_product'];?>"><img class="card-img-top" src="admin/assets/images/<?php echo $rs['id_product'].'/'.$rs['p_pic']?>" alt=""></a>
                        <div class="card-body">
                            <p>
                                <a href="product.php?ct=<?php echo $rs['id_product'];?>"><?php echo $rs['p_name'] ?></a>
                            </p>
                            <h5><?php echo $rs['p_price'] . ' บาท' ?></h5>
                            <div class="card-text">
                                <?php echo $rs['p_detail'] ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="product.php?ct=<?php echo $rs['id_product'];?>&act=add" class="btn btn-primary" style="display: inline-block">More</a>
                            <a href="cart.php?ct=<?php echo $rs['id_product'] ?>" class="btn btn-warning"  style="display: inline-block">Add To Cart</a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        ?>
    </div>
</div>
<!-- Footer -->
<?php include 'assets/footer.php'?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
