<?php
    include 'konek2.php';

    $kode            = $_POST['kode'];
    $kurikulum       = $_POST['kurikulum'];
    
    mysqli_query($koneksi, "INSERT INTO kurikulumprodi values('$kode','$kurikulum')");

    header("location: kurikulumprodi.php");
?>