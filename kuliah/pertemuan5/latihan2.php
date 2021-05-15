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
// Pengulangan pada Array 
// for / foreach
$angka = [1,2,3,4,5,6,7,8];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear : both; }
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class= "kotak"><?php echo $a; ?></div>
<?php endforeach; ?>
    
</body>
</html>