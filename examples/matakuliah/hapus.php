<?php
    include 'konek3.php';
    $kodemk = $_GET['kodemk'];
    mysqli_query($koneksi, "DELETE FROM matakuliah WHERE kodemk='$kodemk'");
    header("Location: matakuliah.php");
?>