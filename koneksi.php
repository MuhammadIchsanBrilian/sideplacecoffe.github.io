<?php 

$server = "localhost";
$uname = "root";
$pass = "";
$db = "sideplace";

//create connection
$koneksi = new mysqli($server, $uname, $pass, $db);

//check connection
if ($koneksi->connect_error) {
    die("Koneksi gagal : " . $koneksi->connect_error);
}
// $conn->close();



?>

