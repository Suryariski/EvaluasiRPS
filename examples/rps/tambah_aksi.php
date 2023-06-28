<?php
    include 'konek1.php';

    $semesterr       = $_POST['semesterr'];
    $kodemk         = $_POST['kodemk'];
    $nip            = $_POST['nip'];

    
    
  mysqli_query($koneksi, "INSERT INTO rps values('','$semesterr','$kodemk','$nip')");


    header("location: rps.php");
?>