<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    include 'koneksi.php';

    $nip                  = $_POST['nip'];
    $username             = $_POST['username'];
    $nidn                 = $_POST['nidn'];
    $namadosen            = $_POST['namadosen'];
    $alamat               = $_POST['alamat'];
    $notelp               = $_POST['notelp'];
    $password          = $_POST['passwordnya'];
    $kodeprodi            = $_POST['kodeprodi'];

    $query_insert_user = mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','dosen')");

    $query_select_user = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
    $data = mysqli_fetch_array($query_select_user);

    $user_id = $data['userid'];

    mysqli_query($koneksi, "INSERT INTO dosen values('$nip','$nidn','$namadosen','$alamat','$notelp','$user_id','$kodeprodi')");

    header("location: dosen.php");
?>
</body>

</html>