<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php 
// function untuk melakukan koneksi database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040124");

    return $conn;
}

// function untuk melakukan query dan memasukannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();

    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $brand = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO sepatu
                VALUES
                ('', '$picture', '$name', '$brand', '$description', '$price', '$category' )";

     mysqli_query($conn, $query);
     
     return mysqli_affected_rows($conn);
}

//function hapus data
function hapus($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");
   echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

?>