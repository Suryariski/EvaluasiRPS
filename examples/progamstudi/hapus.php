<?php
    include 'konek.php';
    $kodeprodi = $_GET['kodeprodi'];
    mysqli_query($koneksi, "DELETE FROM programstudi WHERE kodeprodi='$kodeprodi'");
    header("Location: progamstudi.php");
?>