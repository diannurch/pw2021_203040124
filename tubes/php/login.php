<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php

// // ketika tombol login ditekan
// if (isset($_POST["login"])) {
//   $login = login($_POST);
// }

session_start();
require 'functions.php';
/* melakukan pengecekan apakah user sudah melakukan login 
   jika sudah redirect ke halamaan admin */
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// cek cookie 
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0 ) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
        
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">



    <title>Login</title>
    <style>
        .container {
            margin: 0 auto;
            border-radius: 8px;
            height: 400px;
            max-width: 400px;
            width: 100%;
            background-color: rgba(236, 240, 241, 0.8);
            border: 2px solid rgba(236, 240, 241, 0.8);
            margin-top: 80px;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 1.5);
        }


        .container h2 {
            padding-top: 3px;
            color: #424242;
            text-align: center;
            padding: 10px;
            text-shadow: 1px 1px 1px grey;
        }

        .container p {
            font-size: 14px;
            text-align: center;
            padding-top: px;
            padding-left: 30px;
        }

        .form {
            margin: 0% 10% 0% 5%;
        }

        .button-signin {
            align-content: center;
            text-align: center;
            padding-left: 20px;
            transition: .6s;
        }
    </style>




</head>

<body style="background-image: url(../assets/img/vintage-wallpaper/vintage-wallpaper.png);">

    <div class="container">
    <h2 class="text-center pt-3" style="font-family: 'Dancing Script', cursive;">FORM LOGIN</h2>
        <!-- Form  ------------------------->
        <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username atau Password salah!</p>
        <?php endif;?>


        <form class="form" action="" method="POST">


            <div class="mb-3">
                <label for="username" class="form-label">Username </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" autofocus 
                   autocomplete="off" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></div>
                    </div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                </div>
            </div>
            <div class="remember">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

            <br>
            <!-- button ----------------------->
            <div class="button-login d-grid gap-2 col-6 mx-auto">
                <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 6px;">SIG IN</button>
            </div>
            <p>Don't have an account?<a href="registrasi.php" style="text-decoration: none;"> Sign Up Now!</a></p>

        </form>
    </div>

</body>

</html>