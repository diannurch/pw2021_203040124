<?php
/* 
Dian Nurcahya Ningrum
203040124
Jum'at 13:00
*/
?>

<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo "<script>
            alert('Registrasi Gagal');
            document.location.href = 'login.php';
            </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/105baf2792.js" crossorigin="anonymous"></script>

     <!-- Font style -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <title>Registrasi</title>
    <style>
        .container {
            margin: 0 auto;
            border-radius: 8px;
            height: 430px;
            max-width: 430px;
            width: 100%;
            background-color: rgba(236, 240, 241, 0.8);
            border: 2px solid rgba(236, 240, 241, 0.8);
            margin-top: 60px;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 1.5);
        }


        .container h2 {
            color: #424242;
            text-align: center;
            padding: 10px;
            text-shadow: 1px 1px 1px grey;
        }

        .container p {
            font-size: 14px;
            text-align: center;
            padding-top: 2px;
            padding-left: 30px;
        }

        .form {
            margin: 0% 10% 0% 5%;
        }

        .button-registration {
            align-content: center;
            text-align: center;
            padding-left: 20px;
        }
    </style>


</head>

<body style="background-image: url(../assets/img/vintage-wallpaper/vintage-wallpaper.png);">

    <div class="container">
    <h2 class="text-center pt-3" style="font-family: 'Dancing Script', cursive;">CREATE ACCOUNT</h2>
        <form class="form" action="" method="post">

            <div class="mb-1">
            <label for="username" class="form-label">Username </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" autofocus 
                   autocomplete="off" required>
                </div>
            </div>

            <div class="mb-1">
                <label for="password" class="form-label">Password </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></div>
                    </div>
                    <input type="password" class="form-control" name="password1" id="password1" placeholder="Masukan Password" required>
                </div>

                <div class="mb-1">
                    <label for="password" class="form-label">Confirm </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key fa-2x"></i></i></div>
                        </div>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password" required>
                    </div>

                    <br>
                    <!-- button ----------------------->
                    <div class="button-login d-grid gap-2 col-6 mx-auto">
                        <button type="submit" name="register" class="btn btn-primary" style="margin-top: 8px;">REGISTRATION</button>
                    </div>
                    <p>Have an Account? <a href="login.php" style="text-decoration: none;"> Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></p>

        </form>
    </div>

</body>

</html>