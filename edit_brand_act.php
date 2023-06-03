<?php 
include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];

$edit = mysqli_query($koneksi, "UPDATE brand SET nama='$nama' WHERE id='$id' ");

if($edit)
	header('location: edit_brand.php?pesan=berhasil');
else
	echo "Edit Nama Gagal";


 ?>