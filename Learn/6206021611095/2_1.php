<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="2_2.php">
    <table border="1" align="center" width="400">
        <tr>
            <td colspan="2" align="center">
            <strong> CAR PAY </strong>
            </td>
        </tr>
        <tr>
        <td align="right">ชื่อ นามสกุล ลูกค้า : </td>
        <td><input type="text" name="data" size="15" value=""> </td>
        </tr>
        <tr>
        <tr>
        <td align="right">จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด : </td>
        <td><input type="text" name="debt" size="15" value=""></td>
        </tr>
        <td align="right">จำนวนงวด ที่ต้องการ : </td>
        <td><select name="period" id="" onchange="">
                <option value="36" >36</option>
                <option value="48" >48</option>
                <option value="60" >60</option>
                <option value="72" >72</option>
                
              </select><br></td>
        </tr>
        <tr>
        
        </tr>
        <tr>
        <td colspan="2" align="center">
        <input type="submit" value=" ซื้อรถ " >
        
        </td>
        </tr>
    </table>
    </form>
</body>
</html>