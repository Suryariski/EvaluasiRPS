<?php
    include 'konek1.php';
    $noidrps = $_GET['noidrps'];
    mysqli_query($koneksi, "DELETE FROM rps WHERE noidrps='$noidrps'");
    header("Location: rps.php");
?>