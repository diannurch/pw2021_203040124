<?php
/* 
Dian Nurcahya Ningrum
203040124
https://github.com/diannurch/pw2021_203040124
Pertemuan 4 - 19 Februari 2021
Mempelajari Function
*/
?>

<?php 
    // Data
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("d M Y", time()-60*60*24*100);

    // mk time
    // membuat sendiri detik 
    // mktime(0,0,0,0,0,0,)
    // jam, menit, detik, bulan, tanggal, tahun
    //echo date("l", mktime(0,0,0,8,29,2002));

    // strtotime 
    echo date ("l", strtotime("29 aug 2002"));

?>