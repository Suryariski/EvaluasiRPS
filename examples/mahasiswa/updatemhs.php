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
$userid 				= $_POST['userid'];
$nim 					= $_POST['nim'];
$username				= $_POST['username'];
$namamahasiswa 			= $_POST['namamahasiswa'];
$alamat 				= $_POST['alamat'];
$notelp 				= $_POST['notelp'];
$tahunditerima 			= $_POST['tahunditerima'];
$userid 				= $_POST['userid'];
$password 				= $_POST['password'];
$kodeprodi 				= $_POST['kodeprodi'];


//update data ke database

mysqli_query($koneksi,"update mahasiswa set nim='$nim', namamahasiswa='$namamahasiswa', alamat='$alamat', notelp='$notelp', tahunditerima='$tahunditerima', kodeprodi='$kodeprodi'  where userid='$userid'");

mysqli_query($koneksi,"update user set username = '$username', password = '$password' where userid='$userid'");


//mangalihkan halaman kembali ke index.php
header("location: mahasiswa.php");





?>
</body>
</html>
