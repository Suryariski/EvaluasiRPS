<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$userid = $_GET['userid'];

//menghapus data dari database
mysqli_query($koneksi, "delete from mahasiswa where userid='$userid' ");
mysqli_query($koneksi, "delete from user where userid='$userid' ");

//mangalihkan halaman kembali ke index.php
header("location: mahasiswa.php");












?>
</body>

</html>