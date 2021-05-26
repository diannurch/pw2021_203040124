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
$products = query("SELECT * FROM sepatu");

// ketika tombol cari di klik
// if (isset($_GET['cari'])) {
//     $keyword = $_GET['keyword'];
//     $products = query("SELECT * FROM sepatu WHERE
//                 name LIKE '%$keyword%' OR
//                 brand LIKE '%$keyword%' OR
//                 description LIKE '%$keyword%' OR
//                 price LIKE '%$keyword%' OR
//                 category LIKE '%$keyword%' 
//                 ");
// } else {
//     $products = query("SELECT * FROM sepatu");
// }
if (isset($_POST['cari'])) {
  $products = cari($_POST['keyword']);
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
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>SHOES.CO</title>
    <style>

        input[type=text] {
          width: 40px;
          position: relative;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          font-size: 16px;
          background-color: white;
          background-position: 10px 10px; 
          background-repeat: no-repeat;
          padding: 12px 20px 12px 40px;
          -webkit-transition: width 0.4s ease-in-out;
          transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
          width: 100%;
        }

        /* .inner {
          overflow: hidden;
        }

        .inner:hover {
          transform: scale(1.5);
        } */

        .rubypedia-parallax { 
          background-image: url("assets/img/slider1.png");
          height: 500px; 
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }

        /* css product */
        .card {
          position: relative;
          border: none;
          outline: none;
          background-color: #122936;
          border-radius: 20px;
          overflow: hidden;
          transition: transform 0.3s;
        }

        .card::before {
          content: '';
          position: absolute;
          top: -50%;
          width: 100%;
          height: 100%;
          background: #2196f3;
          transform: skewY(345deg);
          transition: 0.5s;
        }

        .card:hover::before {
          top: -70%;
          transform: skewY(390deg);
        }
        .card:hover {
          transform: translateY(-15px);
          transition: transform 0.3s;
        }

        .btn:hover {
          color:  #fff;
          outline: 0;
          opacity: .9;
        }


        /* end css product */

    </style>


</head>

<body id="home">

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  navbar-dark shadow-sm fixed-top" style="background: linear-gradient(#051923, #003554);">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-family: 'Fredoka One', cursive;">SHOES.CO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#product">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="php/login.php">LOGIN <i class="fa fa-sign-in" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Akhir Navbar -->


    <!-- Parallax -->

    <div class="rubypedia-parallax">
      <div class="container" style="text-align: center;padding-top: 160px">
        <div class="row">
          <span class="border" style="background-color:  #122936; color: #2196f3; border-radius: 5px; opacity: 0.8;padding: 18px;font-size: 25px;letter-spacing: 5px;">SHOES.CO <br> Website menjual berbagai macam brand sepatu </span>
        </div>
      </div>
    </div>

   <!-- Akhir Parallax -->

<br>

    <!-- Search -->
    <section id="search">
    <form action="" method="POST">
        <input type="text" name="keyword" style="background-color: #003554; border-radius: 12px;  text-align: center; "  placeholder="search product" autocomplete="off" autofocus >
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
      </form>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#051923" fill-opacity="1" d="M0,192L40,208C80,224,160,256,240,250.7C320,245,400,203,480,186.7C560,171,640,181,720,202.7C800,224,880,256,960,272C1040,288,1120,288,1200,261.3C1280,235,1360,181,1400,154.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    
<div class="container">

    </section> 
    <!-- Akhir Search -->

    <!-- Product -->

    <main style="background: linear-gradient(#051923, #003554);">
    <section id="product" class="pt-5">
      <h3 class="text-center pt-1 " style="color: white; font-family: 'Roboto Slab', serif;">Product</h3>
        <div class="container mb-5 mt-5">
        <?php if (empty($products)) : ?>
            <tr>
              <td colspan="4">
                <p style="color: white; font-style:italic; text-align:center;">data tidak ditemukan</p>
              </td>
            </tr>
        <?php endif; ?>
          <div class="row">
          <?php  $i = 1;
          foreach ($products as $p) : ?>
            <div class="col-md-3">
              <div class="card mt-3">
                <div class="product align-items-center p-5 text-center">
                <img src="assets/img/<?= $p['picture']; ?>" class="rounded" width="160" style="position: relative; width:100%; display: flex; justify-content: center; align-items: center;"><br>
                <span style="color: white;"><?= $p['name']; ?></span>  <br><br>
                <!-- button -->
                <a href="php/detail.php?id=<?= $p['id']; ?>" class="btn btn-primary" style="border-radius: 5px;" >Detail</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b262a" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    </main>
</div>
    <!-- Akhir Product -->


    <!-- Footer -->
            <section id="footer" style="background: #1b262a;">
            <div class="container">
              <div class="row align-items-start">
                <div class="col-md-3">
                 <h5 style="color: #fff;">About us</h5>
                 <p style="color: grey;">Shoes.Co didirikan oleh Dian Nurcahya Ningrum pada tahun 2021. Shoes.co merupakan toko sepatu terlengkap yang menjual berbagai macam brand secara offline atau online. Shoes.co sudah membuka beberapa cabang di Indonesia yakni Bandung, Karawang dan Jakarta. </p>
                </div>
                <div class="col-md-3">
                <h5 style="color: #fff;">Customer Service</h5>
                <h4 style="color: #fff; font-weight: bold; font-style:italic;">(022)641707</h4>
                <p style="color: grey;">Buka : 10:00 - 19:00</p>
                <p style="color: grey;">Istirahat : 12:00 - 13:00</p>
                <p style="color: grey;">Weekend/hari libur nasional tutup</p>
                </div>
                <div class="col-md-3">
                  <h5 style="color: #fff;">Pembayaran</h5>
                  <img src="../tubes/assets/img/mandiri.png" alt="" width="60px"> <img src="../tubes/assets/img/bni.png" alt="" width="50px"> <img src="../tubes/assets/img/bri.jpg" alt="" width="70px;"> 
                  <img src="../tubes/assets/img/bjb.png" alt="" width="50px" style="background-color: white;">  <img src="../tubes/assets/img/bca.jpg" alt="" width="40px"> 
                  <img src="../tubes/assets/img/dana.jpg" alt="" width="40px"> <img src="../tubes/assets/img/gopay.png" alt="" width="50px" style="background-color: white;"> 
                </div>
                <div class="col-md-3">
                 <h5 style="color: #fff;">Pengiriman</h5>
                 <img src="../tubes/assets/img/jne.jpg" alt="" width="40px"> <img src="../tubes/assets/img/j&t.png" alt="" width="50px">
                </div>
                
                <div class="row justify-content-center pt-3">
                <div class="col text-center">
                  <p style="color: grey;">Company Name : Basari DnN Group | CEO : Dian Nurcahya Ningrum | Customer Service : (022) 641707 | Location : Jln.Cihuni No 14, Karawang, Jawa Barat, Indonesia | Email : basari6@gmail.com</p>
                </div>
                <hr style="color: grey;">
                <div class="col text-center">
                  <p style="color: grey;">Copyright © 2021 - Shoes.Co, All Rights Reserved.</p>
                </div>
              </div>
            </section>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../tubes/js/script.js"></script>

</body>

</html>