<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php
require 'functions.php';

if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else { 
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        .container {
            border: 2px black solid;
            padding-left: 20px;
            margin-right: 45%;
            margin-left: 30%;
            background-color: #FDEDEC; 
            color: black;
        }   
    </style>
</head>
<body style="background-image: url(../assets/img/memphis-mini/memphis-mini.png);">

<div class="container">
    <h3>Form Tambah Data Sepatu</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="picture">Picture :</label><br>
                <input type="text" name="picture" id="picture" required><br><br>
            </li>
            <li>
                <label for="name">Name :</label><br>
                <input type="text" name="name" id="name" required><br><br>
            </li>
            <li>
                <label for="brand">Brand :</label><br>
                <select name="brand" id="brand" required>
                    <option value="">------- Pilih Brand -------</option>
                    <option value="Nike">Nike</option>
                    <option value="Adian">Adian</option>
                    <option value="Convers">Convers</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Vans">Vans</option>
                </select> 
            </li>
            <br>
            <li>
                <label for="description">Description :</label><br>
                <input type="text" name="description" id="description" required><br><br>
            </li>
            <li>
                <label for="price">Price :</label><br>
                <input type="text" name="price" id="price" required><br><br>
            </li>
            <li>
                <label for="category">Category :</label><br>
                <input type="text" name="category" id="category" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah" style="background-color:  #EBDEF0;">Tambah Data!</button>
            <button type="submit" style="background-color: #FADBD8 ;">
                <a  style="color: black;" href="../index.php">Kembali</a>
            </button>
        </ul>

    </form>
</div>
    
</body>
</html>
