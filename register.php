<?php
include 'functions.php';

if (isset($_POST['submit'])) {
    if (register($_POST) > 0) {
        echo "<script>
        alert('Registrasi Berhasil');
        document.location.href = 'login.php';
        </script>";
    }else {
        echo "<script>
        alert('Gagal Registrasi');
        document.location.href = 'register.php';
        </script>";
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Register</title>
        <link rel="stylesheet" href="css/stylelg.css">
    </head>

    <body>
        <div class="container">
          <h1>Register</h1>
            <form action="" method="post">
                <label for="nama">Nama Lengkap</label>\
                <br>
                <input type="text" name="nama_user" id="nama">
                <br>

                <label for="username">Username</label>\
                <br>
                <input type="text" name="username" id="username">
                <br>

                <label>Email</label>
                <br>
                <input type="email" name="email" id="email">
                <br>

                <label>Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>

                <label for="password2">Konfirmasi Password</label>
                <br>
                <input type="password" name="password2" id="password2">
                <br>

                <label for="level">level</label>
                <br>
                <input type="text" name="level" id="level" placeholder="admin / user">
                <br>

                <label for="cek">Remember Me</label>
                <input type="checkbox" name="cek" id="cek">
                <br>

                <button type="submit" name="submit">Register</button>
                <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>