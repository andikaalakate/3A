<?php

include 'conn.php';

$email = mysqli_real_escape_string($koneksi, $_POST['email']);

$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();

    $data = mysqli_fetch_assoc($login);

    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['status'] = "login";

    header("location:../../users/");
} else {
    header("location:../../?alert=gagal");
}