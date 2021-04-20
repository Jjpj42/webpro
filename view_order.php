<?php
include 'admin/assets/php/connect.php';
session_start();
error_reporting(0);
$total=0;
$sale_id = $_GET['sale_id'];
if(!isset($_SESSION['code_custom'])){
    $_SESSION['error'] = "กรุณาเข้าสู่ระบบ";
    header("location:index.php");
}
$c_id = $_SESSION['code_custom'];
// LOAD CUSTOMER NAME
$nsql = "select fname from customer where code_custom = '$c_id'";
$nload = $con->query($nsql);
if($ndata = $nload->fetch_assoc()) $fname = $ndata['fname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail Orders</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body style="background:;">

<!-- Navigation -->
<?php require_once 'assets/navbarforin.php'?>

<!-- Page Content -->
<div class="container"  style="margin-top: 5.0rem!important;background: white !important;">
    <div class="row">
        <div class="mb-3 col-lg-12">
            <h4 style="font-size:50px;font-weight:800;">Welcome <?php echo $fname ?></h4>
        </div>
        <div class="col-lg-3">
            <div class="list-group">
                <a href="user.php" class="list-group-item">Orders History</a>
                <a href="user_setting.php" class="list-group-item">Edit Account</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="row">
                <div class="col-lg-12">
                    <h5>Detail Order Number <?php echo $sale_id ?></h5>
                </div>
                <table class="table table-hover" height="300px">
                    <thead>
                    <tr align="center" valign="middle">
                        <th>
                            No.
                        </th>
                        <th>
                            Product Code
                        </th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>
                            Quantity
                        </th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "select * from sell_de where sell_id = '$sale_id'";
                        $load  = $con->query($sql);
                    while($data = $load->fetch_assoc()):
                        ?>
                        <tr align="center" valign="middle">
                            <td><?php echo $i+=1 ?></td>
                            <td><?php echo $data['p_id'] ?></td>
                            <?php
                            // LOAD PRODUCT DATA
                            $psql = "select p_name , p_pic from product where id_product = '".$data['p_id']."'";
                            $plaod = $con->query($psql);
                            if($rs = $plaod->fetch_assoc()):
                                ?>
                                <td><img  width="50px" src="admin/assets/images/<?php echo $data['p_id'] ?>/<?php echo $rs['p_pic'] ?>" alt=""></td>
                                <td><?php echo $rs['p_name'] ?></td>
                            <?php
                            endif;
                            ?>
                            <td><?php echo $data['p_amount'] ?></td>
                            <td><?php echo '$'.$data['p_sell'] ?></td>
                        </tr>


                    <?php
                        $total+=$data['p_sell'];
                        endwhile;
                    ?>
                    <tr align="right">
                        <td colspan="5">
                             Total Sum
                        </td>
                        <td align="center">
                            <?php echo '$'.$total ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div style="padding: 50px"></div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<!-- Footer -->
<?php include 'assets/footerforin.php'?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
