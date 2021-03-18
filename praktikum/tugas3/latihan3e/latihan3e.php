<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>


<?php

$products = [

    [
        "picture" => "foto1.png",
        "name" => "Nike airforce",
        "brand" => "Nike",
        "description" => "Material Suede, Size 38-42",
        "category" => "Sneakers",
        "price" => "Rp. 1. 050.000"
    ],
    [
        "picture" => "foto2.png",
        "name" => "Adian sneakers",
        "brand" => "Adian",
        "description" => "Material Leather-Canvas, Size 38-42 ",
        "category" => "Sneakers",
        "price" => "Rp. 399.000"
    ],
    [
        "picture" => "foto3.png",
        "name" => "Convers CT 70s Burgundy High",
        "brand" => "Convers",
        "description" => "Material Canvas, Size 40-42",
        "category" => "Sneakers",
        "price" => "Rp. 650.000"
    ],
    [
        "picture" => "foto4.png",
        "name" => "Sepatu Nike View",
        "brand" => "Nike",
        "description" => "Material Leather & Textile, Size 36-41",
        "category" => "Sneakers",
        "price" => "Rp. 950.000"
    ],
    [
        "picture" => "foto5.png",
        "name" => "Sepatu",
        "brand" => "Adidas",
        "description" => "Material Mesh, Size 37-42",
        "category" => "Sneakers",
        "price" => "Rp. 650.000"
    ],
    [
        "picture" => "foto6.png",
        "name" => "Adian pink 08",
        "brand" => "Adian",
        "description" => "Material Mesh & Knit, Size 36-41",
        "category" => "Sneakers",
        "price" => "Rp. 299.000"
    ],
    [
        "picture" => "foto7.png",
        "name" => "Vans Era Comfycush",
        "brand" => "Vans",
        "description" => "Material Canvas, Size 39-44",
        "category" => "Sneakers",
        "price" => "Rp. 750.000"
    ],
    [
        "picture" => "foto8.png",
        "name" => "Adian High 29",
        "brand" => "Adian",
        "description" => "Material Mesh, Size 40-43",
        "category" => "Sneakers",
        "price" => "Rp. 400.000"
    ],
    [
        "picture" => "foto9.png",
        "name" => "Sepatu Nike Free",
        "brand" => "Nike",
        "description" => "Material Mesh, Size 40-44",
        "category" => "Sneakers",
        "price" => "Rp. 650.000"
    ],
    [
        "picture" => "foto10.png",
        "name" => "Vans slip on classic",
        "brand" => "Vans",
        "description" => "Material Canvas, Size 40-44",
        "category" => "Sneakers",
        "price" => "Rp. 750.000"
    ],
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> shoesis</title>

    <link rel="stylesheet" href="css/style.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js"
    crossorigin="anonymous"></script>

</head>
<body>

    <div class="container mt-5 mb-5">
        <table id="cari" class="table table-hover">
            <thead>
                <tr class="tab">
                    <th>No<i class="material-icons">import_export</i></th>
                    <th>Picture<i class="material-icons">import_export</i></th>
                    <th>Name<i class="material-icons">import_export</i></th>
                    <th>Brand<i class="material-icons">import_export</i></th>
                    <th class="deskripsi">Decription<i class="material-icons">import_export</i></th>
                    <th>Price<i class="material-icons">import_export</i></th>
                    <th>Category<i class="material-icons">import_export</i></th>
                </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach( $products as $p ) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><img src="img/<?= $p["picture"]; ?>"></td>
                    <td><?= $p["name"] ?></td>
                    <td><?= $p["brand"] ?></td>
                    <td><?= $p["description"] ?></td>
                    <td><?= $p["price"] ?></td>
                    <td><?= $p["category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>


    
</body>
</html>