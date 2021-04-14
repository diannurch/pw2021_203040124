<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$products = query("SELECT * FROM sepatu") ;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <link rel="stylesheet" href="css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

</head>
<body style="background-image: url(../assets/img/memphis-mini/memphis-mini.png);"> 

<div class="container mt-5 mb-5">
    <div class="add">
        <a href="tambah.php"><button style="background-color: #E8DAEF ; color: black; border-radius: 10px;">Tambah Data</button></a>
    </div>
    <br>
        <table class="table table-bordered table-hover" style="box-shadow: -5px -5px 3px #EBDEF0 ;">
            <thead>
            <tr style="text-align: center;  background-color: #F2D7D5 ; color: black;">
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
            <?php $i = 1 ?>
            <?php foreach ( $products as $p ) : ?>
                <tr style="text-align: center;  background-color: #FDEDEC; color: black;">
                    <th scope="row"><?= $i ?></th>
                    <td>
                        <a href=""><button style="background-color: #FADBD8 ;">Ubah</button></a>
                        <a href=""><button style="background-color: #EBDEF0 ;">Hapus</button></a>
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
        </table>
    </div>


    
</body>
</html>

