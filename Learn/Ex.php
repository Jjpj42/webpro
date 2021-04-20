<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <style>
        .btn-primary {
                background: lightblue;
            }

            .btn {
                padding: 10px;
                border: none;
                color: white;
                border-radius: 5px;
                cursor:pointer;
            }
            .btn-danger {
                background: coral;
            }

    </style>



    <bod>
        <form action="areaCal.php" method="post"> 
        <table align="center" border="0">
            <tr>
                <td colspan=2 align="center"> 
                    <h2>เครื่องคำนวณวงกลมและทรงกลม</h2>
                </td>
            </tr>

            <tr>
                <td bgcolor="lightgray">
                    รัศมี : 
                </td>
                <td align="center">
                    <input type="text" name="area" value="">

                    
                </td>
            </tr>
            <tr>
                <td>
                    เลือกการคำนวณ :
                </td>

                <td align="center">
                    <select name="number">
                        <option value="1">เส้นผ่าศูนย์กลาง</option>
                        <option value="2">เส้นรอบวง</option>
                        <option value="3">พื้นที่วงกลม</option>
                        <option value="4">พื้นที่ผิวของทรงกลม</option>
                        <option value="5">ปริมาตรของทรงกลม</option>
                    </select>

                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <button type="submit" class="btn btn-primary"> Calculate  </button>
                <button type="reset" class="btn btn-danger"> Clear </button>

                </td>
            </tr>
            


        

        </table>
    </body>




</html>