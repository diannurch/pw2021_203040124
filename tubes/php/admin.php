<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';


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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">



    <title>Admin</title>
    <style>
      img {
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 0.8s;
      }
      img:hover {
            transform: rotate(360deg);
            border-radius: 35%;
        }
    </style>
  

</head>
<body style="background: linear-gradient(#051923, #003554);"> 

<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark shadow-sm fixed-top" style="background: linear-gradient(#051923, #003554);  ">
    <div class="container">
    <button style="background: linear-gradient(#1b262a, #000046);  "><a class="navbar-brand" style="text-align: center;" href="#">SHOES.CO</a></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           PRODUCT
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tambah.php">ADD PRODUCT </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           ADMIN
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="registrasi.php">ADD ADMIN </a></li>
          </ul>
        </li>
      </ul>
      <form action="" method="get" class="d-flex" style="justify-content: center;">
        <input  type="text" name="keyword" class="form-control me-2" type="search" size="50" placeholder="search product" aria-label="Search" autofocus class="keyword">
        <button type="submit" name="cari" class="btn btn-outline-primary" type="submit" class="tombol-cari">Search</button>
      </form>
      <form class="d-flex px-2">
            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-shopping-cart"></i></button>
        </form> <br>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="logout.php">LOGOUT <i class="fa fa-sign-in" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- AKhir navbar -->

<div class="container mt-5 mb-5">
<h1 class="text-center pt-5" style="font-family: 'Dancing Script', cursive; color :  #EAECEE;">--- LIST PRODUCT ---</h1>
    <br>
    <div class="container">
        <div class="table-responsive" >
        <table class="table table-bordered table-hover" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.5);">
            <thead>
            <tr style="text-align: center;  background-color: #ABB2B9 ; color: black;">
                <th scope="col">NO</th>
                <th scope="col">Opsi</th>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th> 
                <th scope="col">Category</th>
            </tr>
            </thead>

            <?php if (empty($products)) : ?>
                <tr>
                    <td>
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ( $products as $p ) : ?>
                <tr style="text-align: center;  background-color: #EAECEE; color: black;">
                    <th scope="row"><?= $i ?></th>
                    <td>
                        <a href="ubah.php?id=<?= $p["id"]?>"><button style="background-color: #85929E;" <i class="bi bi-pencil-square"></i> Ubah</button></a>
                        <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('Apakah anda yakin?');"><button style="background-color: #34495E;" <i class="bi bi-trash-fill"></i> Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $p["picture"]; ?>"></td>
                    
                    <td><?= $p["name"]; ?></td>
                    <td><?= $p["brand"]; ?></td>
                    <td><?= $p["description"]; ?></td>
                    <td><?= $p["price"]; ?></td>
                    <td><?= $p["category"]; ?></td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
        </div>
      </div>
        

        <!-- Footer -->
        <div class="row footer">
          <div class="col text-center" style="color: #051923;">
            <p>Copyright © 2021 - SHOES.CO, All Rights Reserved.</p>
          </div>
        </div>
        <!-- Akhir footer -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>

