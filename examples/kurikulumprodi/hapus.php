<?php
    include 'konek2.php';
    $kurikulum = $_GET['kurikulum'];
    mysqli_query($koneksi, "DELETE FROM kurikulumprodi WHERE kurikulum='$kurikulum'");
    header("Location: kurikulumprodi.php");
?>