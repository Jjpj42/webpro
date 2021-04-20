<?php
include 'assets/php/connect.php';
session_start();
error_reporting(0);
$total=0;
$sale_id = $_GET['sale_id'];
if(!isset($_SESSION['e_id'])){
    $_SESSION['error'] = "กรุณาเข้าสู่ระบบ";
    header("location:index.php");


}
$c_id=0;

$nsql = "select id_custom from sell where sell_id = '$sale_id'";
$nload= $con->query($nsql);
if($ndata = $nload->fetch_assoc()){
    $c_id = $ndata['id_custom'];
}


// LOAD CUSTOMER NAME
$nsql = "select fname , lname from customer where code_custom = '$c_id'";
$nload = $con->query($nsql);
if($ndata = $nload->fetch_assoc()) {
    $fname = $ndata['fname'];
    $lname = $ndata['lname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="icon" href="../../bill.PNG"  type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Orders Details</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">

</head>



<!-- Navigation -->
<?php require_once 'assets/navbar.php'?>

<!-- Page Content -->
<div class="container" style="margin-top: 6.0rem!important;">
    <div class="row">
        <div class="col-lg-2">
            <h4 class="my-4">Order Details</h4>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header p-0" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-light btn-block text-left p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Order History
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="order.php" class="list-group-item">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- /.col-lg-3 -->
    <div class="col-lg-10">

            <div class="row" style="margin-top: 1.0rem!important;">
                <div class="col-lg-12">
                    <h5 > <font style="font-weight:800;">Detail Order Number : </font>  <?php echo $sale_id ?></h5>
                    <h5><font style="font-weight:800;">Order By : </font> <?php echo $fname . ' ' . $lname ?></h5>
                </div>
                <table class="table table-hover">
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
                                <td>
                                    <img  width="50px" src="assets/images/<?php echo $data['p_id'] ?>/<?php echo $rs['p_pic'] ?>" alt="">
                                </td>
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
<?php include 'assets/footer.php'?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
