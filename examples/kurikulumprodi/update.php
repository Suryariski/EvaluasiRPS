<?php
    include 'konek2.php';
    $kur = $_POST['kur'];
    $kode    = $_POST['kode'];
    $kurikulum   = $_POST['kurikulum'];

    $query = mysqli_query($koneksi, "UPDATE kurikulumprodi set kode= '$kode', kurikulum = '$kurikulum' WHERE kurikulum= '$kur'");

    header("Location: kurikulumprodi.php");    
?>