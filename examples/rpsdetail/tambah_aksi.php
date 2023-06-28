<?php
    include 'konek.php';

    $noidrps       = $_POST['noidrps'];
    $minggu            = $_POST['minggu'];
    $materi            = $_POST['materi'];
    $sesuai            = $_POST['sesuai'];
    $keterangan           = $_POST['keterangan'];

 
    mysqli_query($koneksi, "INSERT INTO rpsdetail values('','$noidrps','$minggu','$materi','$sesuai','$keterangan')");

    header("location: rpsdetail.php");
?>