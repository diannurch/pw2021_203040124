<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php 
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>