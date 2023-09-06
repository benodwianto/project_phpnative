<?php
$conn = mysqli_connect('localhost', 'root', '', 'motorcycle');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahp($data)
{
    global $conn;
    $namaproduk = $data['nama_produk'];
    $stok = $data['stok'];
    $harga = $data['harga'];
    $harga_normal = $data['harga_normal'];

    $foto = upload();
    if (!$foto) {
        return false;
    }

    $query = mysqli_query($conn, "INSERT INTO produk (nama_produk, harga, stok, foto, harga_normal ) VALUES ('$namaproduk', '$harga', '$stok', '$foto', '$harga_normal') ");
    return $query;
}

function upload()
{

    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $tmpname = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];

    if ($error === 4) {
        echo "<script>
        alert('Upload Gambar Dahulu');
        </script>";

        return false;
    }

    $ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "<script>
        alert('Yang Anda Upload Bukan Gambar');
        </script>";

        return false;
    }

    if ($ukuranfile > 3000000) {
        echo "<script>
        alert('Ukuran Gambar Terlalu Besar');
        </script>";

        return false;
    }

    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    move_uploaded_file($tmpname, '../image/' . $namafilebaru);
    return $namafilebaru;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama_user']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);

    $password = password_hash($password);

    $query = mysqli_query($conn, "insert into user (nama_user, username, password, email) values ('$nama', '$username', '$password', '$email')");

    return $query;
}

function register($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama_user']);
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    $email = htmlspecialchars($data['email']);
    $level = htmlspecialchars($data['level']);

    $result = mysqli_query($conn, "SELECT username From user WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username Sudah Ada');
        </script>";

        return false;
    }

    $row = mysqli_query($conn, "SELECT email From user WHERE email = '$email' ");
    if (mysqli_fetch_assoc($row)) {
        echo "<script>
        alert('Email Sudah Ada');
        </script>";

        return false;
    }

    if ($password !== $password2) {
        echo "<script>
        alert('Konfirmasi Password Tidak Sama');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO user (nama_user, username, password, email, level) VALUES ('$nama', '$username', '$password', '$email','$level')");
    return $query;
}

function cari($keyword)
{
    $query = ("SELECT * FROM produk WHERE nama_produk %LIKE% '$keyword' OR harga %LIKE% '$keyword' ");
    return query($query);
}
