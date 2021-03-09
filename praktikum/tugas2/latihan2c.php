<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2C</title>
    <style>
    .bola {
        background-color: salmon;
        height: 50px;
        width: 50px;
        line-height: 50px;
        text-align: center;
        margin-bottom: 3px;
        border-radius: 60px;
        display: inline-block;
        border: 2px solid black;
        font-weight: bold;
        margin-right: 2px;
    }
    .container {
        margin-right : 70%;
        padding: 10px;
        border : 2px solid black;
    }
    </style>
</head>
<body>

<div class = "container">
    <?php

        function tumpukanBola($tumpukan)
            {
                for ($i = 1; $i <= $tumpukan; $i++) {
                     for ($j = 1; $j <= $i; $j++) {
                 echo "<div class=bola>$i</div>";
                     }
                 echo "<br>";
                }
            }

        echo tumpukanBola(5);

    ?>
</div>

</body>
</html>