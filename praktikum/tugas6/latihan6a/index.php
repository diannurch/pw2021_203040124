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

// ketika tombol cari di klik
if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $products = query("SELECT * FROM sepatu WHERE
                name LIKE '%$keyword%' OR
                brand LIKE '%$keyword%' OR
                description LIKE '%$keyword%' OR
                price LIKE '%$keyword%' OR
                category LIKE '%$keyword%' 
                ");
} else {
    $products = query("SELECT * FROM sepatu") ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6a</title>
    <style>
        .container {
            width: 30% !important;
            border: 2px solid  #EBDEF0;
            margin-right: 20%;
            background-color: #FADBD8;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 6px 15px 0 rgba(0, 0, 0, 0.19);
            
        }
        
    </style>

    <link rel="stylesheet" href="../css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<br>
<a href="php/login.php"><button style="background-color: #E8DAEF ; color: black; border-radius: 10px; margin-left: 40px;">Masuk ke halaman admin</button></a>
<form action="" method="get">
        <input type="text" name="keyword" style="background-color: #FADBD8 ; border-radius: 10px; margin-left: 40px;" autofocus>
        <button type="submit" name="cari" style="background-color: #E8DAEF; border-radius: 10px;">Cari!</button>
</form>


<div class="container mt-5 mb-5">
    <?php foreach ($products as $p) : ?>
        <tr> 
            <td><p class="nama"></td>
            <td><a href="php/detail.php?id=<?= $p['id'] ?>" style="color:  #CD6155;"> 
                <?= $p["name"] ?>
            </a></td>
        </tr>
    <?php endforeach; ?>
</div>



    
</body>
</html>