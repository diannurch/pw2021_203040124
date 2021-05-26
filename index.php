<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- My CSS -->
   <link rel="stylesheet" type="text/css" href="tubes/css/style.css">

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

  <style>
  /* Jumbotron */
  .jumbotron {
    background-image: url("tubes/assets/img/jumbotron.jpg");
    padding: 5rem 1rem;
    background-size: cover;
    height: 540px;
    text-align: center;
    position: relative;
  }

  .jumbotron .container {
    position: relative;
    z-index: 1;
  }

  .jumbotron .display-4 {
    color: white;
    margin-top: 150px;
    font-weight: 200;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.8);
    font-size: 40px;
    margin-bottom: 30px;
  }

  .jumbotron .lead {
    color: white;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.8);
  }

  /* DESKTOP VERSION */
  @media (min-width: 992px) {
    .jumbotron {
      margin-top: -75px;
      height: 640px;
      background-position: 0 -160px;
    }

    .jumbotron .display-4 {
      font-size: 62px;
    }
  }

  .social-menu ul {
	position: absolute;
	left: 50%;
	padding: 0;
	margin: 0;
	transform: translate(-50%, -50%);
	display: flex;
}

.social-menu ul li {
	list-style: none;
	margin: 0 15px;
}

.social-menu ul li .fa {
	font-size: 20px;
	line-height: 50px;
	transition: .6s;
	color: #000;
}

.social-menu ul li .fa:hover {
	color: #fff;
}

.social-menu ul li a {
	position: relative;
	display: block;
	width: 50px;
	height: 50px;
	border-radius: 50px;
	background-color: #fff;
	text-align: center;
	transition: .6s;
	box-shadow: 0 5px 4px rgba(0, 0, 0, .5);
}

.social-menu ul li a:hover {
	transform: translate(0, -10px);
}

.social-menu ul li:nth-child(1) a:hover {
	background-color:grey;
}

.social-menu ul li:nth-child(2) a:hover {
	background-color: #e4405f;
}

.social-menu ul li:nth-child(3) a:hover {
	background-color: #cd201f;
}


  </style>

  <title>203040124</title>
</head>
<body id="home">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark shadow-sm fixed-top" style="background:  linear-gradient(#051923, #003554); ">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-family: 'Fredoka One', cursive;">DIANNUR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#kuliah">KULIAH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#praktikum">PRAKTIKUM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#tubes">TUGAS BESAR</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Akhir Navbar -->


<!-- Jumbotron -->
    <div class="jumbotron">
      <h1 class="display-4" style="font-family: 'Fredoka One', cursive;">Welcome to my index, <br>203040124</h1>
      <p class="lead" style="color: white; font-family: 'Roboto Slab', serif;">Website untuk menyimpan tugas-tugas mata kuliah Pemrograman Web 2021</p>
    </div>
<!-- Akhir Jumbotron -->


<!-- Kuliah -->
<section id="kuliah" style="background-color: #051923">
  <div class="container pt-5 mx-auto">
    <h3 class="text-center" style="color: white; font-family: 'Fredoka One', cursive;">KULIAH</h3> <br>
    <div class="row justify-content-evenly">
      <!-- <div class="col-md-4">

      </div> -->
      <div class="col-md-4">
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <a class="list-group-item"  href="kuliah/pertemuan10/latihan3.php"><i class="fas fa-book"></i> Pertemuan 10</a>
          <a class="list-group-item"  href="kuliah/pertemuan11/index.php"><i class="fas fa-book"></i> Pertemuan 11</a>
          <a class="list-group-item"  href="kuliah/pertemuan12/index.php"><i class="fas fa-book"></i> Pertemuan 12</a>
          <a class="list-group-item"  href="kuliah/pertemuan13/index.php"><i class="fas fa-book"></i> Pertemuan 13</a>
        </ul>
      </div>
    </div>
  </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#003554" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,202.7C384,235,480,245,576,213.3C672,181,768,107,864,117.3C960,128,1056,224,1152,224C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!-- Akhir Kuliah -->


<!-- Praktikum -->
<section id="praktikum" style="background-color: #003554">
  <div class="container pt-5">
    <h3 class="text-center" style="color: white; font-family: 'Fredoka One', cursive;">PRAKTIKUM</h3> <br>
    <div class="row align-items-start">
      <div class="col-md-4" >
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <li class="list-group-item" style="text-align: center;">Tugas 1</li>
          <a class="list-group-item"  href="praktikum/tugas1/latihan1a.php"><i class="fas fa-book"></i> Latihan 1A</a>
          <a class="list-group-item"  href="praktikum/tugas1/latihan1b.php"><i class="fas fa-book"></i> Latihan 1B</a>
          <a class="list-group-item"  href="praktikum/tugas1/latihan1c.php"><i class="fas fa-book"></i> Latihan 1C</a>
          <a class="list-group-item"  href="praktikum/tugas1/tugas1.php"><i class="fas fa-book"></i> Tugas 1</a>   
        </ul>    
      </div>
      <div class="col-md-4">
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <li class="list-group-item" style="text-align: center;">Tugas 2</li>
          <a class="list-group-item"  href="praktikum/tugas2/latihan2a.php"><i class="fas fa-book"></i> Latihan 2A</a>
          <a class="list-group-item"  href="praktikum/tugas2/latihan2b.php"><i class="fas fa-book"></i> Latihan 2B</a>
          <a class="list-group-item"  href="praktikum/tugas2/latihan2c.php"><i class="fas fa-book"></i> Latihan 2C</a>
          <a class="list-group-item"  href="praktikum/tugas2/latihan2d.php"><i class="fas fa-book"></i> Latihan 2D</a>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <li class="list-group-item" style="text-align: center;"> Tugas 3</li>
          <a class="list-group-item"  href="praktikum/tugas3/latihan3a.php"><i class="fas fa-book"></i> Latihan 3A</a>
          <a class="list-group-item"  href="praktikum/tugas3/latihan3b.php"><i class="fas fa-book"></i> Latihan 3B</a>
          <a class="list-group-item"  href="praktikum/tugas3/latihan3c.php"><i class="fas fa-book"></i> Latihan 3C</a>
          <a class="list-group-item"  href="praktikum/tugas3/latihan3d.php"><i class="fas fa-book"></i> Latihan 3D</a>
          <a class="list-group-item"  href="praktikum/tugas3/latihan3e.php"><i class="fas fa-book"></i> Latihan 3E</a>
        </ul>
      </div>
    </div>
    <br><br>
    <div class="row align-items-start">
      <div class="col-md-4">
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <li class="list-group-item" style="text-align: center;">Tugas 4</li>
          <a class="list-group-item"  href="praktikum/tugas4/latihan4a/index.php"><i class="fas fa-book"></i> Latihan 4A</a>
          <a class="list-group-item"  href="praktikum/tugas4/latihan4b/index.php"><i class="fas fa-book"></i> Latihan 4B</a>
          <a class="list-group-item"  href="praktikum/tugas4/latihan4c/index.php"><i class="fas fa-book"></i> Latihan 4C</a>
        </ul>    
      </div>
      <div class="col-md-4">
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <li class="list-group-item" style="text-align: center;">Tugas 5</li>
          <a class="list-group-item"  href="praktikum/tugas5/latihan5a/index.php"><i class="fas fa-book"></i> Latihan 5A</a>
          <a class="list-group-item"  href="praktikum/tugas5/latihan5b/index.php"><i class="fas fa-book"></i> Latihan 5B</a>
          <a class="list-group-item"  href="praktikum/tugas5/latihan5c/index.php"><i class="fas fa-book"></i> Latihan 5C</a>
          <a class="list-group-item"  href="praktikum/tugas5/latihan5d/index.php"><i class="fas fa-book"></i> Latihan 5D</a>
          <a class="list-group-item"  href="praktikum/tugas5/latihan5e/index.php"><i class="fas fa-book"></i> Latihan 5E</a>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <li class="list-group-item" style="text-align: center;"> Tugas 6</li>
          <a class="list-group-item"  href="praktikum/tugas6/latihan6a/index.php"><i class="fas fa-book"></i> Latihan 6A</a>
          <a class="list-group-item"  href="praktikum/tugas6/latihan6b/index.php"><i class="fas fa-book"></i> Latihan 6B</a>
          <a class="list-group-item"  href="praktikum/tugas6/latihan6c/index.php"><i class="fas fa-book"></i> Latihan 6C</a>
        </ul>
      </div>
    </div>
  </div>
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#051923" fill-opacity="1" d="M0,160L40,160C80,160,160,160,240,170.7C320,181,400,203,480,224C560,245,640,267,720,245.3C800,224,880,160,960,154.7C1040,149,1120,203,1200,202.7C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</section>
<!-- Akhir Praktikum -->


<!-- Tugas Besar -->
<section id="tubes" style="background-color: #051923">
  <div class="container">
    <h3 class="text-center" style="color: white; font-family: 'Fredoka One', cursive;">TUGAS BESAR</h3> <br>
    <div class="row justify-content-evenly">
      <!-- <div class="col-md-4">

      </div> -->
      <div class="col-md-4">
        <ul class="list-group" style="border-radius: 10px;  box-shadow: 0 5px 20px rgba(0,0,0,0.5);">
          <a class="list-group-item" style="text-align: center;" href="tubes/index.php"><i class="fas fa-book"></i>    TUBES</a>
        </ul>
        <br><br>
      </div>
    </div>
  </div>
</section>

<!-- Akhir Tugas Besar -->


<!-- Footer -->
<section id="footer" style="background-color: #003554">
<div class="container pt-3">
<div class="social-menu mt-5">
  <ul>
    <li><a href="https://github.com/diannurch"><i class="fab fa-github fa-2x" style="color: #1b262a; padding-top: 5px;"></i></a></li>
    <li><a href="https://www.instagram.com/diannurch"><i class="fa fa-instagram fa-2x"></i></a></li>
    <li><a href="https://www.youtube.com/c/WebProgrammingUNPAS"><i class="fa fa-youtube fa-2x"></i></a></li>
  </ul>
</div>

<div class="row footer">
  <div class="col text-center pt-5" style="color: white;">
    <p>Copyright © 2021 - Dian Nurcahya Ningrum, All Rights Reserved.</p>
  </div>
</div>
</div>
</section>
<!-- AKhir Footer -->

  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>