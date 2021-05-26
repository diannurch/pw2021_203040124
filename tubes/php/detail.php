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
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../tubes/css/style.css">

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <!-- Bootstrap Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/105baf2792.js" crossorigin="anonymous"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

     <!-- Font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Detail</title>
    <style>

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #16384c;
        /* style="background: linear-gradient(-90deg, black, MidnightBlue);" */
    }

    .container {
        position: relative;
        width: 1100px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 30px;
    }

    .container .card {
        position: relative;
        max-width: 300px;
        height: 215px;
        margin: 30px 10px;
        padding: 20px 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        transition: 0.3s ease-in-out;
    }

    .container .card:hover {
        height: 420px;
    }

    .container .card .imgBx img {
        max-width: 100%;
        border-radius: 5px;
    }

    .container .card .content {
        position: relative;
        margin-top: -140px;
        padding: 10px 15px;
        text-align: center;
        color: #111;
        visibility: hidden;
        opacity: 0;
        transition: 0.3s ease-in-out;
    }

    .container .card:hover .content {
        visibility: visible;
        opacity: 1;
        margin-top: -40px;
    }
    </style>

</head>
<body>

<div class="container">
    <div class="card">
        <div class="imgBx">
        <img src="../assets/img/<?= $products["picture"]; ?>" width="200px;" height="200px" style="position: relative; top: -50px; left: 4px; box-shadow: 0 5px 20px rgba(0,0,0,0.2) ;
        z-index: 1;">
        </div>
        <div class="content">
        <p><?= $products["name"]; ?></p>
            <p><?= $products["brand"]; ?></p>
            <p><?= $products["description"]; ?></p>
            <p><?= $products["price"]; ?></p>
            <p><?= $products["category"]; ?></p>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg  navbar-dark shadow-sm fixed-bottom" style="background:  #1b262a; ">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-family: 'Fredoka One', cursive;">SHOES.CO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <form class="d-flex px-2">
            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-shopping-cart"></i></button>
        </form> <br>
        <form class="d-flex px-2">
            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-heart"></i></button>
        </form>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">BACK TO MENU <i class="fa fa-sign-in" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br>
   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>
</html>