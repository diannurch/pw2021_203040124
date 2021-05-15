<?php
/* 
Dian Nurcahya Ningrum
203040124
https://github.com/diannurch/pw2021_203040124
Pertemuan 7 - 13 Maret 2021
Mempelajari GET & POST
*/
?>

<?php 
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX (){
//     global $x;
//     echo $x; 
// }

// tampilX();

// SUPERGLOBALS
// varoable global milik PHP
// merupakan Array Associative

// var_dump($GET);
$mahasiswa = [
    [
        "nama" => "Dian Nurcahya Ningrum", 
        "nrp" => "203040124",
        "email" => "diannurcahya52@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dian.png"
    ],       
    [
        "nama" => "Renan", 
        "nrp" => "203040153",
        "email" => "Renan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "renan.png"
],       
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?nama=<?=$mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"]; ?> &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>