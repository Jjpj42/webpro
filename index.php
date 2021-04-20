<?php
    session_start();
    include 'admin/assets/php/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link rel="icon" href="../../cart.PNG"  type="image/icon type">
  <title>Welcome to MIUMIU</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body style="background:">

  <!-- Navigation -->
  <?php require_once 'assets/navbarforin.php'?>
  <?php
  require_once 'admin/assets/php/log.php';
  ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <center><h4 class="my-4"  style="font-weight:800;">PRODUCT LIST</h4></center>
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

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
        
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

            <?php
            $sql = "select * from product order by rand() LIMIT 6";
            $load = $con->query($sql);
            while($rs = $load->fetch_assoc()):
            ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="product.php?ct=<?php echo $rs['p_id'];?>"><img class="card-img-top" src="admin/assets/images/<?php echo $rs['id_product'].'/'.$rs['p_pic']?>" alt=""></a>
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
                  <a href="cart.php?p_id=<?php echo $rs['id_product'] ?>&act=add" class="btn btn-warning"  style="display: inline-block">Add To Cart</a>
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
  <footer class="py-5 "style="background-color: #708090;>
    <div class="container">
      <p class="m-0 text-center text-white">MIUMIU SHOP 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
