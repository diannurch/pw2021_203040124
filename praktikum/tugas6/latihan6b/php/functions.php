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

// function ubah data 
function ubah($data) 
{
    $conn = koneksi();

    $id = $data['id'];
    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $brand = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "UPDATE sepatu SET
            picture = '$picture',
            name = '$name',
            brand = '$brand',
            description = '$description',
            price = '$price',
            category = '$category'
            WHERE id = $id
            ";
            
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}

// functions registrasi 
function registrasi($data) 
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
                alert('username sudah digunakan');
                </script>
            ";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);

}

?>