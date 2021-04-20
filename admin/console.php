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
    <link rel="icon" href="../../admin.PNG"  type="image/icon type">
    <link rel="stylesheet" href="assets/css/console.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Welcom To  Dashboard</title>
</head>
<body style=" background:;">
<?php require_once 'assets/navbar.php'?>
<div class="container" style="margin-top: 7rem!important">
    <div class="row">
        <?php
            // LOAD CARD DATA
            $sql = "select count(*) as total from product";
            $rt = $con->query($sql);
            if($data = $rt->fetch_assoc()):
        ?>
        <div class="col-lg-3">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">All Products</div>
                    <div class="card-body text-dark">
                        <p class="card-count"><?php echo $data['total'] ?> pcs.</p>
                    </div>
                </div>
        </div>
        <?php
            endif;
        ?>

        <?php
        // LOAD CARD DATA
        $sql = "select count(*) as total from sell ";
        $rt = $con->query($sql);
        if($data = $rt->fetch_assoc()):
            ?>
        <div class="col-lg-3">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Order Amount </div>
                <div class="card-body text-dark">
                    <p class="card-count"><?php echo $data['total'] ?> list </p>
                </div>
            </div>
        </div>
        <?php
        endif;
        ?>

        <?php
        // LOAD CARD DATA
        $sql = "select count(*) as total from category";
        $rt = $con->query($sql);
        if($data = $rt->fetch_assoc()):
            ?>
            <div class="col-lg-3">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Product List</div>
                    <div class="card-body text-dark">
                        <p class="card-count"><?php echo $data['total'] ?> list</p>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>

        <?php
        // LOAD CARD DATA
        $sql = "select sum(p_sell) as total from sell_de";
        $rt = $con->query($sql);
        if($data = $rt->fetch_assoc()):
            ?>
            <div class="col-lg-3">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Price</div>
                    <div class="card-body">
                        <p class="card-count">$<?php echo $data['total'] ?>  </p>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="mb-3 col-lg-12">
                    <div class="canvas-container">
                        <canvas id="graphCanvas"></canvas>
                    </div>
                </div>
                <div class="mb-3 col-lg-12">
                   <div class="form-control">
                       <div class="form-head">
                           <h5 style="padding-top:20px">Add Product List</h5>
                       </div>
                       <form action="assets/php/add_cat.php" method="post">
                           <div class="container">
                               <div class="row">
                                   <?php include 'assets/php/log.php'?>
                                   <div class="mb-3 col-lg-6">
                                       <input type="text" name="cat_name" placeholder="Product Name" class="form-control">
                                   </div>
                                   <div class="mb-3 col-lg-6">
                                       <button class="btn btn-success form-control" type="submit">Add Product List</button>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <div class="form-control">
                <div class="form-head">
                    <h5>Add Product</h5>
                </div>
                <form action="assets/php/add_product.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-3 col-lg-3">
                            <input type="text" name="id_product" placeholder="Product Code" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-5">
                            <input type="text" name="p_name" placeholder="Product Name" required class="form-control">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <select name="cat_id" id="cat_id" class="form-select" required aria-label="Default select example">
                                <?php
                                // LOAD CATEGORIES
                                $sql = "select * from category";
                                $qty = $con->query($sql);
                                while($rs = $qty->fetch_assoc()):
                                    ?>
                                    <option value="<?php echo $rs['id_category']?>"><?php echo $rs['type_product'] ?></option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="mb-4 col-lg-6">
                            <input type="text" name="p_price" placeholder="Price" required class="form-control">
                        </div>
                        <div class="mb-4 col-lg-6">
                            <input type="text" name="p_amount" placeholder="Quantity" required class="form-control">
                        </div>
                        <div class="mb-4 col-lg-12">
                            <textarea name="p_detail" id="editor" cols="10" rows="1" class="form-control"></textarea>
                        </div>
                        <div class="mb-4 col-lg-9">
                            <input type="file" class="form-control" name="p_pic" required>
                        </div>
                        <div class="mb-4 col-lg-3">
                            <button class="btn btn-success form-control"  type="submit">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="mb-3 container" style="background: white;padding: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <h5>Recent orders</h5>
            <?php include 'assets/php/log.php' ?>
            <table class="table table-hover">
                <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Order Code</th>
                    <th>Order Date</th>
                    <th>Edit Order</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // LOAD ORDER DATA
                $sql = "select * from sell order by datesave desc";
                $load = $con->query($sql);
                $i=1;
                while($data = $load->fetch_assoc()):
                    ?>
                    <tr align="center" valign="middle">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['sell_id']; ?></td>
                        <td><?php echo $data['datesave'] ?></td>
                        <td><a href="view_order.php?sale_id=<?php echo $data['sell_id']?>" class="btn btn-success">Details</a></td>
                    </tr>
                    <?php
                    $i++;
                endwhile;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Script -->
<script src="//cdn.ckeditor.com/4.15.0/basic/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor');
    function CKupdate() {
        for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<script src="https://kit.fontawesome.com/330329e9f7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function () {
        showGraph();
    });
    function showGraph() {
        $.post('data.php',function (data) {
            console.log(data);
            let total = [];
            let year = [];
            for (let i in data){
                total.push(data[i].totol);
                year.push(data[i].datesave);
            }
            let chartdata={
                labels:year,
                datasets:[{
                    label:"รายได้ต่อเดือน",
                    backgroundColor: ['#49e2ff','blue'],
                    borderColor:'#46d5f1',
                    hoverBackgroundColor:'#cccccc',
                    hoverBorderColor:'#666666',
                    fill:true,
                    data:total
                }]
            };

            let graphTarget = $('#graphCanvas');
            let barGraph = new Chart(graphTarget,{
                type: 'doughnut',
                data:chartdata,
                options:{
                    scales:{
                        yAxes:[{
                            stacked:true
                        }]
                    }
                }
            });
        });
        chart.canvas.parentNode.style.height = '128px';
        chart.canvas.parentNode.style.width = '128px';
    }
</script>

</body>
</html>