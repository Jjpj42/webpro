<?php
    $num1=  $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = 0;
    for($i = $num1; $i<= $num2;$i++){
        
            $result+=$i;
            

        
    }

    echo "num1 : $num1 <br>";
    echo "num2 : $num2 <br>";
    echo "sun num1 to num2 : $result";
    echo "<br><a href='SumNum.php'>Back</a>";