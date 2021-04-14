<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$products = query("SELECT * FROM sepatu");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
    <style>
        .container {
            border: 2px solid   #FADBD8;
            margin-right: 20%;
            background-color: #EBDEF0;
            text-align: center;
            border-radius: 10px;
            
        }
    </style>

    <link rel="stylesheet" href="../css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5 mb-5">
    <?php foreach ($products as $p) : ?>
        <tr> 
                    <td><p class="nama"></td>
                    <td><a href="php/detail.php?id=<?= $p['id'] ?>" style="color: #CD6155;"> 
                            <?= $p["name"] ?>
                        </a></td>
                        </tr>
                <?php endforeach; ?>
</div>


    
</body>
</html>