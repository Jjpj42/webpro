<?php
include 'connect.php';
session_start();
    $p_id = $_POST['id_product'];
    $cat_id = $_POST['id_category'];
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_amount = $_POST['p_amount'];
    $p_detail = $_POST['p_detail'];
    $chk = $_POST['pchk'];
    $file = $_FILES["p_pic"]["name"];
    // CHK PIC
    $psql = "select p_pic from product where id_product = '$p_id'";
    $pload = $con->query($psql);
    if($rs = $pload->fetch_assoc()){
        echo "PASS";
           if($rs['p_pic'] == $chk){
               // UPDATEATA
               $sql = "update product set id_product='$p_id',id_category='$cat_id',p_name='$p_name',p_price='$p_price',p_amount='$p_amount',p_detail='$p_detail',p_pic='$chk' where id_product='$p_id'";
               if($con->query($sql)){
                   $_SESSION['suc'] = "แก้ไขข้อมูลสำเร็จ";
                   header("location:../../edit_product.php?ct=$p_id");
               }
               else{
                   $_SESSION['error'] = "แก้ไขไม่ข้อมูลสำเร็จ " . $con->error;
                   header("location:../../edit_product.php?ct=$p_id");
               }
        }
        else{
            mkdir("../images/".$p_id,0777,true);
            if(move_uploaded_file($_FILES["p_pic"]["tmp_name"],"../images/".$p_id."/".$file)){
                $sql = "update product set id_category='$cat_id',p_name='$p_name',p_price='$p_price',p_amount='$p_amount',p_detail='$p_detail',p_pic='$file' where id_product='$p_id'";
                if($con->query($sql)){
                    $_SESSION['suc'] = "เพิ่มสินค้าสำเร็จ";
                    header("location:../../add_product.php");
                }
                else{
                    $_SESSION['error'] = "ไม่สามารถเพิ่มรายการสินค้าได้ " . $con->error;
                }
            }
            else{
                $_SESSION['error'] = "ไม่สามารถเพิ่มรายการสินค้าได้ " . $con->error;
            }
        }
    }



