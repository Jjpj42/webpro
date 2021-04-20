<?php  
$money=$_POST['money'];
$bank1000=0;
$bank500=0;
$bank100=0;
$coin10=0;
$coin5=0;
$coin1=0;



if($money>=1000){
    $bank1000 =floor($money/1000);
    $money -=($bank1000*1000);
    echo " ธนบัตร 1000 : $bank1000 <br>";
}


if($money >=500 && $money <=1000){

    $bank500=floor($money/500);
    $money -=($bank500 * 500);
    echo " ธนบัตร 500 : $bank500 <br>";
}
 
if($money >=100 && $money <=500){

    $bank100=floor($money/100);
    $money -=($bank100 * 100);
    echo "ธนบัตร 100 : $bank100 <br>";
}

if($money >=10 && $money <=100){

    $coin10=floor($money/10);
    $money -=($coin10 * 10);
    echo "เหรียญ 10 : $coin10 <br>";
}

if($money >=5 && $money <=10){

    $coin5=floor($money/5);
    $money -=($coin5 * 5);
    echo "เหรียญ 5 : $coin5 <br>";
}
if($money >=1 && $money <=5){

    $coin1=floor($money/1);
    $money -=($coin1 * 1);
    echo "เหรียญ 1 : $coin1 <br>";
}

?>




