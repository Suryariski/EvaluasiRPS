<?php
    include 'konek1.php';
    $no = $_POST['no'];
    $semesterr    = $_POST['semesterr'];
    $kodemk   = $_POST['kodemk'];
    $nip    = $_POST['nip'];

    mysqli_query($koneksi, "UPDATE rps set semesterr='$semesterr', kodemk='$kodemk',nip='$nip' WHERE noidrps= '$no'");
    
    header("Location: rps1.php");    
?>