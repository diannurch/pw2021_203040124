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

function upload()
{
  $nama_file = $_FILES["picture"]["name"];
  $tipe_file = $_FILES["picture"]["type"];
  $ukuran_file = $_FILES["picture"]["size"];
  $error = $_FILES["picture"]["error"];
  $tmp_file = $_FILES["picture"]["tmp_name"];

  // ketika tidak ada gambar yang dipilih 
  if ($error == 4) {
    // echo "<script>
    //         alert('Pilih gambar terlebih dahulu!');
    //     </script>  ";
    return 'nophoto.jpg';
  }

  // cek ekstensi file 
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "
            <script>
                alert('yang anda pilih bukan gambar');
            </script>
        ";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('Yang anda pilih bukan gambar!');
        </script>  ";
    return false;
  }

  // ukuran file
  // maksimal 5Mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('Ukuran terlalu besar!');
        </script>  ";
  }

  // lolos pengecekan
  // siap upload file 
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;

  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

//    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $brand = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

  // upload gambar 
  $picture = upload();
  if (!$picture) {
    return false;
  }

  $query = "INSERT INTO 
            sepatu
            VALUES
            (null, '$picture', '$name', '$brand', '$description', '$price', '$category' )
            ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

// function hapus
function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img 
  $p = query("SELECT * FROM sepatu WHERE id = $id");
  if ($p['picture'] != 'nophoto.jpg') {
    unlink('../assets/img/' . $p['picture']);
  }

  mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// function ubah 
function ubah($data)
{
  $conn = koneksi();

      $id = $data['id'];
      $gambar_lama = htmlspecialchars($data['gambar_lama']);
      $name = htmlspecialchars($data['name']);
      $brand = htmlspecialchars($data['brand']);
      $description = htmlspecialchars($data['description']);
      $price = htmlspecialchars($data['price']);
      $category = htmlspecialchars($data['category']);

  $picture = upload();
  if (!$picture) {
    return false;
  }

  if ($picture == 'nophoto.jpg') {
    $picture = $gambar_lama;
  }

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
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}



// function cari 
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM sepatu
            WHERE 
            name LIKE '%$keyword%' OR
            brand LIKE '%$keyword%' 
            ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// // function login

// function login($data)
// {
//   $conn = koneksi();

//   $username = htmlspecialchars($data['username']);
//   $password = htmlspecialchars($data['password']);

//   // cek dulu username
//   if ($user = query("SELECT * FROM user WHERE username = '$username' ")) {

//     // cek password
//     if (password_verify($password, $user['password'])) {
      
//       // set session
//       $_SESSION['login'] = true;

//       header("Location: admin.php");
//       exit;
//     }
//   }
//   return [
//     'error' => true,
//     'pesan' => 'Username / Password Salah !'
//   ];
// }

// functions registrasi 
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
              alert('username / password tidak boleh kosong');
              document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
                alert('username sudah terdaftar!');
                </script>
            ";
        return false;
    }

    // jika  konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika password < 5 digit 
    if (strlen($password1 < 5)) {
        echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    // tambahkan user baru
    $query = "INSERT INTO user
            VALUES
            (null, '$username', '$password_baru')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>