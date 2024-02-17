<?php

include 'conn.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("location:../../register/?alert=success");
} else {
    header("location:../../register/?alert=gagal");
}