<?php
session_start();
include 'admin/assets/php/connect.php';
$ct = $_GET['ct'];
// LOAD CAT ID
$sql = "select id_category from category where type_product = '$ct'";
$load = $con->query($sql);
if($data = $load->fetch_assoc()) $cat_id = $data['id_category'];

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

            <center><h4 class="my-4" style="font-weight:800;">PRODUCT LIST</h4></center>
            <div class="list-group">
                <?php
                $sql = "select * from category";
                $load  =$con->query($sql);
                while($rs = $load->fetch_assoc()):
                    ?>
                    <center><a href="product-list.php?ct=<?php echo $rs['type_product'] ?>" class="list-group-item"><?php echo $rs['type_product']?></a></center>
                <?php
                endwhile;
                ?>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 my-4">
            <div class="row">
                <div class="mb-3 col-lg-12">
                    <center><h5 style="padding: 20px;font-weight: 400;font-size:50px;"><?php echo $ct ?></h5></center>
                </div>
                <?php
                $sql = "select * from product where id_category = '$cat_id'";
                $load = $con->query($sql);
                while($rs = $load->fetch_assoc()):
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <a class="ix" href="product.php?ct=<?php echo $rs['id_product'];?>"><img class="card-img-top" src="admin/assets/images/<?php echo $rs['id_product'].'/'.$rs['p_pic']?>" alt=""></a>
                            <div class="card-body">
                                <p>
                                    <a href="product.php?ct=<?php echo $rs['id_product'];?>"><?php echo $rs['p_name'] ?></a>
                                </p>
                                <h5><?php echo ' $'.$rs['p_price']  ?></h5>
                                <div class="card-text">
                                    <?php echo $rs['p_detail'] ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="product.php?ct=<?php echo $rs['id_product'];?>" class="btn btn-primary" style="display: inline-block">More</a>
                                <a href="cart.php?p_id=<?php echo $rs['id_product']?>&act=add" class="btn btn-warning"  style="display: inline-block">Add To Cart</a>
                            </div>
                        </div>
                    </div>

                <?php
                endwhile;
                ?>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php include 'assets/footer.php'?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
