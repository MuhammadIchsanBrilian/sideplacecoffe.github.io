<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$passwordVerification = $_POST['passwordVerification'];
mysqli_query(
    $koneksi,
    "insert into user values(NULL,'$username','$password', 'kasir')"
);
header('location:tambah_kasir.php?pesan=berhasil');
?>
