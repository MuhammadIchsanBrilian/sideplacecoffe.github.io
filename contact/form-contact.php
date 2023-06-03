<?php
require "../koneksi.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['psubject'];
$pesan = $_POST['pesan'];
mysqli_query(
    $koneksi,
    "insert into feedback values('','$nama','$email','$subject','$pesan')"
);

$mail = new PHPMailer(true);

$mail-> isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'hadidalfin@gmail.com';
$mail->Password = 'wneuyoxccbdexulp';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom($_POST["email"]);

$mail->addAddress('hadidalfin@gmail.com');
$mail->Sender = $_POST["email"];
$mail->From = $_POST["email"];
$mail->FromName = $_POST["email"];

$mail->isHTML(true);


$mail->Subject = $_POST["subject"];
$mail->Body = "Nama Customer : ".$_POST["nama"]."<br>"."Pesan : ".$_POST["pesan"];

$mail->send();

echo
"
<script>
alert('Pesan Berhasil Dikirim');
document.location.href = '../index.php';
</script>
";

?>

