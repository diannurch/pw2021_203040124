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

if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else { 
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }

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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <title>Tambah Data</title>
    <style>
        body
        {
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body style="background: linear-gradient(#051923, #003554);">

<div class="container">
<h3 class="text-center pt-4" style="font-family:  'Pattaya', sans-serif;
color :  #EAECEE;">Form Tambah Data Sepatu</h3>
    <form action="" method="post" enctype="multipart/form-data">
<br>
    <div class="container">
  <div class="row justify-content-evenly">
    <div class="col-md-4">
     <div class="border p-3 bg-light text-center" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
        <label for="picture" class="pt-2">Picture :</label><br><br> 
        <img src="../assets/img/nophoto.jpg" width="250" class="img-preview"><br><br>
        <input type="file" name="picture" class="gambar" onchange="previewImage()" id="picture"><br><br>
        <button type="submit" name="tambah" style="background-color:  #85929E;">Tambah Data!</button>
        <button type="submit" style="background-color: #34495E ;">
            <a  style="color: black;" href="admin.php">Kembali</a>
        </button>
        <br><br>
    </div>
    <br>
    </div>
    <div class="col-md-4">
      <div class="p-3 border bg-light" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
        <div class="mb-3">
            <label for="name" class="form-label">Name :</label><br>
            <input type="text" name="name" id="name" autofocus required class="form-control" id="exampleInputName">
        </div>   
        <div class="mb-3">
            <label for="brand" class="form-label">Brand :</label><br>
            <select name="brand" id="brand" required class="form-control">
                <option value="">---------------- Pilih Brand ----------------</option>
                <option value="Nike">Nike</option>
                <option value="Adian">Adian</option>
                <option value="Convers">Convers</option>
                <option value="Adidas">Adidas</option>
                <option value="Vans">Vans</option>
            </select>
        </div>
        <div class="mb-3">    
            <label for="description"  class="form-label">Description :</label><br>
            <input type="text" name="description" id="description" required  class="form-control">
        </div>   
        <div class="mb-3">    
            <label for="price" class="form-label">Price :</label><br>
            <input type="text" name="price" id="price" required class="form-control">
        </div>
        <div class="mb-3">      
            <label for="category" class="form-label">Category :</label><br>
            <input type="text" name="category" id="category" required class="form-control">
        </div>    
      </div>
      <br><br>
    </div>
  </div>
</div>   
    </form>
</div>

<script src="../js/script.js"></script>
    
</body>
</html>
