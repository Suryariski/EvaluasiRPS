<?php
    include 'konek3.php';

    $kodemk       = $_POST['kodemk'];
    $namamk       = $_POST['namamk'];
    $sks            = $_POST['sks'];
    $sksteori            = $_POST['sksteori'];
    $skspraktek            = $_POST['skspraktek'];
    $semester            = $_POST['semester'];
    $kurikulum            = $_POST['kurikulum'];

 
    mysqli_query($koneksi, "INSERT INTO matakuliah values('$kodemk','$namamk','$sks','$sksteori','$skspraktek','$semester','$kurikulum')");

    header("location: matakuliah.php");
?>