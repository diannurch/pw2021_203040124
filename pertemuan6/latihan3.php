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

    $buku =[
        [
            "judul buku" => "Sebuah Seni Untuk Bersikap Bodoamat",
            "pengarang" => "Mark Manson",
            "penerbit" => "PT. Gramedia Widiasarana Indonesia",
            "terbit" => "2018",
            "tebal" => "246 halaman",
            "isbn" => "978-602-452-698-6",
            "gambar" => "sebuah seni untuk bersikap bodoamat.png"
        ],
        [
            "judul buku" => "MANTAPPU JIWA",
            "pengarang" => "Jerome Polin Sijabat",
            "penerbit" => "PT. Gramedia Pustaka Utama",
            "terbit" => "Agustus 2019",
            "tebal" => "206 halaman",
            "isbn" => "978-602-06-3241-4",
            "gambar" => "mantappu jiwa.png"
        ],
        [
            "judul buku" => "GALAKSI",
            "pengarang" => "Poppi Pertiwi",
            "penerbit" => "Coconut Books",
            "terbit" => "Juli 2018",
            "tebal" => "492 halaman",
            "isbn" => "978-602-5508-45-5", 
            "gambar" => "galaksi.png" 
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Sendiri</title>
</head>
<body>

            <h1>Daftar Novel</h1>

            <?php foreach ( $buku as $bk ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $bk["gambar"];?>">
                </li>
                <li>Judul Buku : <?= $bk["judul buku"];?> </li>
                <li>Pengarang : <?= $bk["pengarang"];?> </li>
                <li>Penerbit : <?= $bk["penerbit"];?> </li>
                <li>Tahun Terbit : <?= $bk["terbit"];?> </li>
                <li>Tebal : <?= $bk["tebal"];?> </li>
                <li>ISBN : <?= $bk["isbn"];?> </li>
            </ul>
            <?php endforeach; ?>
    
</body>
</html>