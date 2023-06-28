<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
// koneksi database
include '../examples/koneksi.php';

// menangkap data yang dikirim dari form
$dosen_id		= $_POST['dosen_id'];
$nip 			= $_POST['nip'];
$username		= $_POST['username'];
$nidn 			= $_POST['nidn'];
$namadosen 		= $_POST['namadosen'];
$alamat 		= $_POST['alamat'];
$notelp 		= $_POST['notelp'];
$password	 	= $_POST['password'];
$kodeprodi 		= $_POST['kodeprodi'];


//update data ke database

mysqli_query($koneksi,"update dosen set nip = '$nip', nidn='$nidn', namadosen='$namadosen', alamat='$alamat', notelp='$notelp', kodeprodi='$kodeprodi'  where userid='$dosen_id'");
mysqli_query($koneksi,"update user set username = '$username', password = '$password' where userid='$dosen_id'");


//mangalihkan halaman kembali ke index.php
header("location: index.php");





?>
</body>
</html>