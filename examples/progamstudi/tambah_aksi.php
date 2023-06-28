<?php
    include 'konek.php';

    $kodeprodi       = $_POST['kodeprodi'];
    $namaprodi       = $_POST['namaprodi'];
    $nipkaprodi      = $_POST['nipkaprodi'];
    
    mysqli_query($koneksi, "INSERT INTO programstudi values('$kodeprodi','$namaprodi','$nipkaprodi')");

    header("location: progamstudi.php");
?>