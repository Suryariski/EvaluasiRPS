<?php
    include 'konek.php';
    $p = $_POST['p'];
    $kodeprodi    = $_POST['kodeprodi'];
    $namaprodi   = $_POST['namaprodi'];
    $nipkaprodi    = $_POST['nipkaprodi'];
    
    $query=mysqli_query($koneksi, "UPDATE programstudi set kodeprodi='$kodeprodi',namaprodi='$namaprodi', nipkaprodi='$nipkaprodi' where kodeprodi= '$p'");

    header("Location: progamstudi.php");    
?>