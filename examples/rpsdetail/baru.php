<?php
    include 'konek.php';

    $detail     =$_POST['detail'];
    $noidrps   = $_POST['noidrps'];
    $minggu   = $_POST['minggu'];
    $materi   = $_POST['materi'];
    $sesuai    = $_POST['sesuai'];
    $keterangan    = $_POST['keterangan'];

    mysqli_query($koneksi, "UPDATE rpsdetail set noidrps='$noidrps', minggu='$minggu', materi='$materi',  keterangan='$keterangan',sesuai ='$sesuai' WHERE noiddetail= '$detail'");
    
    header("Location: rpsdetail1.php");    
?>