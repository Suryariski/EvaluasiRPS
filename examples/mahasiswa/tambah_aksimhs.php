<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    include 'koneksi.php';

    $nim                 = $_POST['nim'];
    $username             = $_POST['username'];
    $namamahasiswa        = $_POST['namamahasiswa'];
    $alamat              = $_POST['alamat'];
    $notelp              = $_POST['notelp'];
    $tahunditerima       = $_POST['tahunditerima'];
    $password         = $_POST['passwordnya'];
    $kodeprodi           = $_POST['kodeprodi'];

 $query_insert_user = mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','mahasiswa')");

    $query_select_user = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
    $data = mysqli_fetch_array($query_select_user);

    $user_id = $data['userid'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa values('$nim','$namamahasiswa','$alamat','$notelp','$tahunditerima','$user_id','$kodeprodi')");

    header("location: mahasiswa.php");
?>
</body>

</html>

