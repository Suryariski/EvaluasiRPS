hapus1.ph<?php
    include 'konek.php';
    $noiddetail = $_GET['noiddetail'];
    mysqli_query($koneksi, "DELETE FROM rpsdetail WHERE noiddetail='$noiddetail'");
    header("Location: rpsdetail1.php");
?>