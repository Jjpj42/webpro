<?php
session_start();

$binnum = array();
if (empty($_SESSION["game_round"])) {
    $_SESSION["game_round"] = 0;
}
if (empty($_SESSION["game_check"])) {
    $_SESSION["game_check"] = 0;
}
if (empty($_SESSION["game_messege"])) {
    $_SESSION["game_messege"]  = "";
}
if (empty($_SESSION["ses_binnum"])) {
    for ($i = 0; $i < 25; $i++) {
        $binnum[] = rand(0, 99);
    }
    $_SESSION["ses_binnum"] = $binnum;
}
if (isset($_POST["rest"])) {
    $_SESSION["game_round"] = Null;
    $_SESSION["game_check"] = Null;
    $_SESSION["game_messege"] = Null;
    $_SESSION["ses_binnum"] = Null;
    for ($i = 0; $i < 25; $i++) {
        $binnum[] = rand(0, 99);
    }
    $_SESSION["ses_binnum"] = $binnum;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINGO GAME</title>
</head>

<body>
    <h1 align="center">BINGO GAME</h1>
    <form method="POST" action="#">
        <table align="center" border="1" width="60%" cellspacing=0>
            <?php
            $pos = 0;
            for ($i = 0; $i < 5; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 5; $j++) {
                    echo "<td align=center style=font-size:40px;>" . $_SESSION["ses_binnum"][$pos] . "</td>";
                    $pos++;
                }
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <table align="center">
            <tr>
                <td>
                    <button type="submit" name="sbmit" style="width: 500px;font-size:35px;color:white;background:darkcyan">START GAME</button>
                </td>
                <td>
                    <button type="submit" name="rest" style="width: 500px;font-size:35px;color:white;background:darkcyan">RESET</button>
                </td>
            </tr>
        </table>
        <br>
    </form>
</body>

</html>

<?php

function checkNum($num)
{
    $_SESSION["game_round"] += 1;
    $lucky = rand(0, 99);
    $l = 0;
    if ($l == 0) {
        for ($i = 0; $i < 25; $i++) {
            if ($lucky == $num[$i]) {
                $l += 1;
                $_SESSION["game_check"] += 1;
                $mess = "ครั้งที่ " . $_SESSION["game_round"] . " = $lucky => ยินดีด้วย คุณมีเลขนี้ <br>";
                $_SESSION["game_messege"] .= $mess;
                break;
            }
        }
    }
    if ($l == 0) {
        for ($i = 0; $i < 25; $i++) {
            if ($lucky != $num[$i]) {
                $mess = "ครั้งที่ " . $_SESSION["game_round"] . " = $lucky => เสียใจด้วย คุณไม่มีเลขนี้ <br>";
                $_SESSION["game_messege"] .= $mess;
                break;
            }
        }
    }
    echo $_SESSION["game_messege"];
    if ($_SESSION["game_check"] == 5) {
        echo ("<p align=center style='font-size:35px;color:red;'>คุณ จบ BINGO เกมนี้ในครั้งที่ " . $_SESSION["game_round"] . "</p>");
        session_destroy();
    }
}
if (isset($_POST["sbmit"])) {
    checkNum($_SESSION["ses_binnum"]);
}
?>