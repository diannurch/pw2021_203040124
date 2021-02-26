<?php
/* 
Dian Nurcahya Ningrum
203040124
https://github.com/diannurch/pw2021_203040124
Pertemuan 5 - 26 Februari 2021
Mempelajari Array
*/
?>

<?php 
$mahasiswa = [
    ["Dian Nurcahya", "203040124", "Teknik Informatika", "diannurcahya52@gmail.com"],
    ["Ningrum", "203040125", "Teknik Industri", "ningrum@gmail.com"],
    ["Adi", "203040126", "Teknik Mesin", "adi@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $m ) : ?>
    <ul>
       <li>Nama : <?= $m[0]; ?></li>
       <li>NRP : <?= $m[1]; ?></li>
       <li>Jurusan : <?= $m[2]; ?></li>
       <li>Email : <?= $m[3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>