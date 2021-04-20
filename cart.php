<?php

error_reporting( error_reporting() & ~E_NOTICE );
session_start();
$p_id = $_REQUEST['p_id'];
$act = $_REQUEST['act'];

if($act=='add' && !empty($p_id))
{
    if(!isset($_SESSION['shopping_cart']))
    {

        $_SESSION['shopping_cart']=array();
    }else{

    }
    if(isset($_SESSION['shopping_cart'][$p_id]))
    {
        $_SESSION['shopping_cart'][$p_id]++;
    }
    else
    {
        $_SESSION['shopping_cart'][$p_id]=1;
    }
}

if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
{
    unset($_SESSION['shopping_cart'][$p_id]);
}

if($act=='update')
{
  
    $amount_array = $_POST['amount'];
    foreach($amount_array as $p_id=>$amount)
    {
        $_SESSION['shopping_cart'][$p_id]=$amount;
    }
}


//ยกเลิกตะกร้าสินต้า
if($act=='Cancel-Cart'){
    unset($_SESSION['shopping_cart']);
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>CART</title>
    <link rel="icon" href="../../cart.PNG"  type="image/icon type">
    <!-- Latest compiled and minified CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">
</head>

<body style="background:">
<?php include("assets/navbar.php");?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center><h5 style="padding: 20px;font-weight: 800;font-size: 50px;">My Orders</h5></center>
        </div>
        <div class="col-md-12">
            <form id="frmcart" name="frmcart" method="post" action="?act=update">
                <table width="100%" border="0" align="center" class="table table-hover">
                    <tr>
                        <td height="40" colspan="7" align="center" bgcolor="#CCCCCC" ><strong style="font-size:20px; font-weight:800">Cart</span></strong></td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#EAEAEA"><strong>No.</strong></td>
                        <td align="center" bgcolor="#EAEAEA"><strong>Picture</strong></td>
                        <td align="center" bgcolor="#EAEAEA"><strong>Product</strong></td>
                        <td align="center" bgcolor="#EAEAEA"><strong>Price</strong></td>
                        <td align="center" bgcolor="#EAEAEA"><strong>Quantity</strong></td>
                        <td align="center" bgcolor="#EAEAEA"><strong>Total</strong></td>
                        <td align="center" bgcolor="#EAEAEA"><strong>Del</strong></td>
                    </tr>
                    <?php

                    if(!empty($_SESSION['shopping_cart']))
                    {
                        require_once('admin/assets/php/connect.php');
                        foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
                        {
                            $sql = "select * from product where id_product ='$p_id'";
                            $query = $con->query($sql);
                            while($row = $query->fetch_assoc())
                            {

                                $sum = $row['p_price'] * $p_qty;
                                $total += $sum;
                                echo "<tr>";
                                echo "<td>";
                                echo $i += 1;
                                echo ".";
                                echo "</td>";
                                ?>
                                <td>
                                    <img width="50px" src="admin/assets/images/<?php echo $row['id_product'] ?>/<?php echo $row['p_pic'] ?>" alt="">
                                </td>
                    <?php
                                echo "<td width='334'>"." " . $row["p_name"] . "</td>";
                                echo "<td width='100' align='right'>" . number_format($row["p_price"],2) . "</td>";

                                echo "<td width='57' align='right'>";
                                echo "<input type='number' name='amount[$p_id]' value='$p_qty' size='2'/></td>";

                                echo "<td width='100' align='right'>" .number_format($sum,2)."</td>";
                                echo "<td width='100' align='center'><a href='cart.php?p_id=$p_id&act=remove' class='btn btn-danger btn-xs'>ลบ</a></td>";

                                echo "</tr>";
                            }

                        }
                        echo "<tr>";
                        echo "<td colspan='5' bgcolor='#CEE7FF' align='right'>Total</td>";
                        echo "<td align='right' bgcolor='#CEE7FF'>";
                        echo "<b>";
                        echo  number_format($total,2);
                        echo "</b>";
                        echo "</td>";
                        echo "<td align='left' bgcolor='#CEE7FF'></td>";
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <td></td>
                        <td colspan="6" align="right">
                            <?php
                                if(!isset($_SESSION['code_custom'])){
                            ?>
                            <a href="login.php" class="btn btn-primary">Please Login </a>
                            <?php
                                }
                                else
                                    {
                                    ?>
                            <a href="cart.php?act=Cancel-Cart" class="btn btn-danger"> Cancle Cart </a>
                            <button type="submit" name="button" id="button" class="btn btn-warning"> Resum </button>
                                        <?php
                                      if(isset($_SESSION['shopping_cart'])){
                                        ?>
                            <button type="button" name="Submit2"  onclick="window.location='confirm.php';" class="btn btn-primary">
                                <span class="glyphicon glyphicon-shopping-cart"> </span> Enter </button>

                            <?php
                                      }
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
            <p align="center"> <a href="index.php" class="btn btn-primary">Back To Home</a> </p>
        </div>
    </div>
</div>
</body>
</html>