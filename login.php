<?php
session_start();
include 'functions.php';

if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 'admin') {
        // header('Location: admin/dashboard_adm.php');
        header('Location: admin/index.php');
    }

    if ($_SESSION['level'] == 'user') {
        header('Location: user/index.php');
    }
}

// if (isset($_COOKIE['level'])) {
//     if ($_COOKIE['level'] == 'admin') {
//         $_SESSION['level'] == 'admin';
//     }

//     if ($_COOKIE['level'] == 'user') {
//         $_SESSION['level'] == 'user';
//     }
// }


if (isset($_POST['submit'])) {
    // var_dump($_POST);die;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            // Set Session
            $_SESSION['level'] = $row['level'];
            // var_dump($_SESSION);die;

            if (isset($_POST['remember'])) {
                //set cookie
                setcookie('level', $row['level'], time() + 60);
            }

            // if ($_SESSION['level'] == 'admin') {
            //     header('Location: admin/index.php');
            // } else if ($_SESSION['level'] == 'user') {
            //     header('Location: user/index.php');
            // }
        }
    }
    $error = true;
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/stylelg.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username/ Password Salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username"><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>

            <label for="remember">Remember Me</label><br>
            <input type="checkbox" name="remember" id="remember"><br>

            <button type="submit" name="submit" id="button">Log in</button>
            <p> Belum punya akun?
                <a href="register.php">Register di sini</a>
            </p>
        </form>
    </div>
</body>

</html>