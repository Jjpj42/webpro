<?php
function random(){
$row=$_POST['row'];
$col=$_POST['col'];
$arrnum=[];
$chk="";


    for($i=0;$i<$row;$i++){

        array_push($arrnum,[]);
        
        
        echo "<tr>";
    
        for($r=0;$r<$col;$r++){

            array_push($arrnum[$i],rand(0,1));
            echo $arrnum[$i][$r];
            echo "<td align=center width=50px height=50px>" , $arrnum[$i][$r] , "</td>";
            
            
        
        }
        echo "<br>";

    echo "</tr>";

    }
}

    





?>
<html>
    <head>
    <meta charset="UTF-8">
    </head>

    <body>
    
        <table border="1" align="center" >
            <?php random() ?>

        </table>
        <center>
            <a href="1.php">Back</a>
        </center>
    </body>

</html>