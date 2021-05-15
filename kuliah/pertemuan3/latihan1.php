<?php
/* 
Dian Nurcahya Ningrum
203040124
https://github.com/diannurch/pw2021_203040124
Pertemuan 3 - 17 Februari 2021
Mempelajari Struktur Kendali
*/
?>

<?php
//pengulangan
//1. for
//2. while (blok tidak akan dijalankan jika false)
//3. do.. while (blok akan tetap dijalankan 1 kali, jika kondisi false)
//4. foreach : pengulangan khusus array

//for( $i = 0; $i < 5; $i++ ) {
//    echo "Hello World! <br>";
//}

//$i = 0;
//while ($i < 5 ){
//   echo "Hello World! <br>";
//$i++;
//}

// $i = 10;
// do {
//     echo "Hello World! <br>";
// $i++;
// } while( $i < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

<table border ="1" cellpadding="10" cellspacing="0">
    <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if ( $i % 2 == 1 ) : ?> 
            <tr class = "warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for ( $j = 1; $j <= 5; $j++ ) : ?>
             <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    
    </table>
</body>
</html>