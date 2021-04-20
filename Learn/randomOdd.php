<?php
function randomnumber(){
$Row=$_POST['row'];
$Col=$_POST['column'];
$odd=0;
$even=0;
for($i=0;$i<$Row;$i++){
    echo "<tr>";

    for($j=0;$j<$Col;$j++){
        
        $num=rand(0,99);

        if($num % 2==0){
            echo "<td align=center><span style='color:blue;font-size:40px;'> $num </span></td>";
            $even += 1;
            

        }
        else{
            echo "<td align=center><span style='color:red;font-size:40px;'> $num </span></td>";
            $odd +=1;
        }

        
        }

        
        echo "</tr>";
        
    }
        echo "<tr>";
        echo "<td colspan='5'> มีเลขคู่ทั้งหมด $even ตัว
                    มีเลขคี่ทั้งหมด $odd  ตัว</td>";
        echo "</tr>";
}
?>

<html>
    <head>
    <meta charset="UTF-8">
    </head>

    <body>
    
        <table border="1" align="center" >
            <?php randomnumber() ?>

        </table>
        <center>
            <a href="random.php">Back</a>
        </center>
    </body>

</html>