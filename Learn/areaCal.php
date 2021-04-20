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
        <form action="Ex.php" method="post"> 
        <table align="center" border="0">
            <tr>
                <td colspan=2 align="center"> 
                    <h2>เครื่องคำนวณวงกลมและทรงกลม</h2>
                </td>
            </tr>
            <tr bgcolor="lightgray">
                
                    <?php

                    $menu=$_POST['number'];
                    $area=$_POST['area'];

                    if($menu=='1'){
                        echo diameter($area);
                    }
                    else if($menu=='2'){
                        echo circumference($area);
                    }
                    else if($menu=='3'){
                        echo Circulararea($area);
                    }
                    else if($menu=="4"){
                        echo Surface($area);
                    }
                    else if($menu=="5"){
                        echo phere($area);   
                    }




                    function diameter($area){
                            echo "<td> เส้นผ่านศูนย์กลาง : </td>";
                            echo "<td>". number_format($area *2,4) . "</td>";

                    }

                    function circumference($area){
                            echo "<td> เส้นรอบวง : </td>";
                            echo "<td>". number_format($area * 2 *3.1415,4). "</td>";
                    }
                    function Circulararea($area){
                            echo "<td> พื้นที่วงกลม : </td>";
                            echo "<td>". number_format(3.1415* pow($area,2),4). "</td>";
                    }
                    function Surface($area){
                        echo "<td> พื้นที่ผิวของทรงกลม :  </td>";
                        echo "<td>". number_format(4*3.1415 * pow($area,2),4). "</td>";
                    }
                    function phere($area){
                        echo "<td> ปริมาตรของทรงกลม :  </td>";
                        echo "<td>". number_format( (4/3)*3.1415 *pow($area,3),4). "</td>";
                    }









                    ?>
                    
                
            </tr>
            <tr>
                    <td colspan="2" align="center">
                        <button type="button" onclick="history.back()" class="btn btn-danger"> Back </button>
                    </td>
            </tr>



            
        </table>
    </body>




</html>