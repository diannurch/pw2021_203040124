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
    <title>Latihan 2A</title>
    <style>
    .style1 {
        margin:  auto;
        border : 2px solid  black;
        box-shadow: 0 0 8px #000;
        border-radius: 5px;
        width: 70%;
    } 
    .style2 {
        font-size : 28px;
        font-family : arial;
        color: #8c782d;
        font-style : italic ;
        font-weight : bolder;
        margin : 10px 0px 10px 12px;
    }
    </style>
</head>
<body>
    
    <?php 
    function gantiStyle ($tulisan, $style1 = "style1", $style2 = "style2")
    {
        return "<div class=$style1><p class=$style2>$tulisan</p></div>";
    }

    echo gantiStyle ("Selamat datang di praktikum PW");


    ?>

</body>
</html>