<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title></title></head>
    </head>
    <body>
    <?php


        if(isset($_POST['Send']))
        {
            $First =$_POST['first'];
            $Last = $_POST['last'];
          
          
            
            echo 'Result<br>';
            echo "First Name :$First <br>";
            echo "Last Name : $Last <br>";
            echo "<br><a href='morePage.php'>Back</a>";
            


        }
        else {
        ?>




        
        <form method="post" action="<?php echo $_SERVER['PHP_SELE'];?>">
        <table border="1" align="center" width="500">


             <td>First Name : </td>
            <td><input type="text" name="first" size="15" value=""/></td>
            </tr>
            </tr>
            <td>Last Name  : </td>
            <td><input type="text" name="last" size="15" value=""/></td>
            </tr>
            <tr>
            <td colspan="2" align="center">
            <input type="submit" name="Send" value=" OK "  />
            <input type="reset" value=" Clear " />
            </td>
            </tr>
            </table>
            </form>

            <?php
        }
        ?>
    </body>
</html>