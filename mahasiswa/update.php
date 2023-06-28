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
$mahasiswa_id			= $_POST['mahasiswa_id'];
$nim 					= $_POST['nim'];
$username				= $_POST['username'];
$tahunditerima 			= $_POST['tahunditerima'];
$namamahasiswa 			= $_POST['namamahasiswa'];
$alamat 				= $_POST['alamat'];
$notelp 				= $_POST['notelp'];
$password	 			= $_POST['password'];
$kodeprodi 				= $_POST['kodeprodi'];


//update data ke database

mysqli_query($koneksi,"update mahasiswa set nim = '$nim', tahunditerima='$tahunditerima', namamahasiswa='$namamahasiswa', alamat='$alamat', notelp='$notelp', kodeprodi='$kodeprodi'  where userid='$mahasiswa_id'");
mysqli_query($koneksi,"update user set username = '$username', password = '$password' where userid='$mahasiswa_id'");


//mangalihkan halaman kembali ke index.php
header("location: profile.php");





?>
</body>
</html>