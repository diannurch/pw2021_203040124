<?php
/* 
Dian Nurcahya Ningrum
203040124
https://github.com/diannurch/pw2021_203040124
Pertemuan 6 - 4 Maret 2021
Mempelajari Array Associative
*/
?>

<?php
// $mahasiswa = [
//     ["Dian Nurcahya Ningrum", "203040124", "diannurcahya52@gmail.com", "Teknik Informatika"],
//     ["Renandra Rahadian Putri", "203040153", "renan@gmail.com", "Teknik Informatika"]
// ];

// Array Associative 
// definisinya sama seperti array numerik, kecuali
// key-nya adalah String yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Dian Nurcahya Ningrum", 
        "nrp" => "203040124",
        "email" => "diannurcahya52@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dian.png"
    ],       
    [
        "nama" => "Renandra Rahadian Putri", 
        "nrp" => "203040153",
        "email" => "renan@gmail.com",
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
    <title>Latihan Array</title>
</head>
<body>
    
        <h1>Daftar Mahasiwa</h1>

        <?php foreach ( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?> ">
                </li>
                <li>Nama : <?= $mhs["nama"];?></li>
                <li>NRP : <?= $mhs["nrp"];?></li>
                <li>Email : <?= $mhs["email"];?></li>
                <li>Jurusan : <?= $mhs["jurusan"];?></li>
            </ul>
        <?php endforeach; ?>

</body>
</html>

