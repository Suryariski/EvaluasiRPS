<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$userid 		= $_POST['userid'];
$nip 			= $_POST['nip'];
$username		= $_POST['username'];
$nidn 			= $_POST['nidn'];
$namadosen 		= $_POST['namadosen'];
$alamat 		= $_POST['alamat'];
$notelp 		= $_POST['notelp'];
$userid 		= $_POST['userid'];
$password	 	= $_POST['password'];
$kodeprodi 		= $_POST['kodeprodi'];


//update data ke database

mysqli_query($koneksi,"update dosen set nip = '$nip', nidn='$nidn', namadosen='$namadosen', alamat='$alamat', notelp='$notelp', userid='$userid', kodeprodi='$kodeprodi'  where userid='$userid'");

mysqli_query($koneksi,"update user set username = '$username', password = '$password' where userid='$userid'");


//mangalihkan halaman kembali ke index.php
header("location: dosen.php");





?>
</body>
</html>
