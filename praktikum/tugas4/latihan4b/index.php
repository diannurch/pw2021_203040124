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
    <title> shoesis</title>

    <link rel="stylesheet" href="css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

</head>
<body>

<div class="container mt-5 mb-5">
        <table class="table table-bordered table-hover">
            <thead>
            <tr style="text-align: center;  background-color: peachpuff; color: black;">
                <th scope="col">NO</th>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
            </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach ( $products as $p ) : ?>
                <tr style="text-align: center;  background-color: lightyellow; color: black;">
                    <th scope="row"><?= $i ?></th>
                    <td><img src="assets/img/<?= $p["picture"]; ?>"></td>
                    <td><?= $p["name"]; ?></td>
                    <td><?= $p["brand"]; ?></td>
                    <td><?= $p["description"]; ?></td>
                    <td><?= $p["price"]; ?></td>
                    <td><?= $p["category"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>


    
</body>
</html>