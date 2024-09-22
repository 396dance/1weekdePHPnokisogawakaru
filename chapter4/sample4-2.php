<!DOCTYPE html>
<html>
    <head>
        <title>sample4-2.php</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>九九の計算をする</h1>
        <?php
            for ($i = 1; $i <= 9; $i++ ) {
                for ($j = 1; $j <=9; $j++) {
                    $ans = $i * $j;
                    echo "{$i} × {$j}= {$ans}&nbsp;&nbsp";
                }
                echo "<br>";
            }
            ?>
    </body>