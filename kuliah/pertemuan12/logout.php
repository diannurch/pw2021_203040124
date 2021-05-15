<?php
/* 
Dian Nurcahya Ningrum
203040124
https://github.com/diannurch/pw2021_203040124
Pertemuan 12 - 29 April 2021
Mempelajari Logout
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;

?>