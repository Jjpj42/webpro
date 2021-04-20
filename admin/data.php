<?php
header('Content-Type: application/json');
require_once 'assets/php/connect.php' ;

$g = "SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
$con-> query($g);

$sql = "SELECT sum(p_sell) AS totol, DATE_FORMAT(datesave, '%M') AS datesave FROM sell_de  GROUP BY DATE_FORMAT(datesave, '%M%')";
$result = $con->query($sql);
$data = array();
foreach ($result as $row){
    $data[] = $row;
}
$con ->close();
echo json_encode($data);
