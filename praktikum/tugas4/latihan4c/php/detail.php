<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php 
    // Mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url 
    $id = $_GET['id'];

    // Melakukan query dengan parameter id yang diambil dari url
    $products = query("SELECT * FROM sepatu WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoesis</title>
    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<div class = "container" style="padding-left: 7px; padding-top: 15px;">
<div class="card" style="width: 18rem; background-color:bisque;" >
    <div class="gambar">
       <img src="../assets/img/<?= $products["picture"]; ?>" alt="Card image cap">
    <div class="card-body">
    <div class="keterangan">
        <p class="card-text"><?= $products["name"]; ?></p>
        <p class="card-text"><?= $products["brand"]; ?></p>
        <p class="card-text"><?= $products["description"]; ?></p>
        <p class="card-text"><?= $products["price"]; ?></p>
        <p class="card-text"><?= $products["category"]; ?></p>
    </div>
    </div>
    </div>
</div>
<br>
    <a class="btn btn-danger" class="bi bi-arrow-left" href="../index.php">Kembali</a>
</div>
    
</body>
</html>