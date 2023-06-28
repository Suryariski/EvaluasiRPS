<?php
    include 'konek3.php';

    $mk     =$_POST['mk'];
    $kodemk    = $_POST['kodemk'];
    $namamk   = $_POST['namamk'];
    $sks    = $_POST['sks'];
    $sksteori    = $_POST['sksteori'];
    $skspraktek    = $_POST['skspraktek'];
    $semester    = $_POST['semester'];
    $kurikulum    = $_POST['kurikulum'];


    mysqli_query($koneksi, "UPDATE matakuliah set kodemk='$kodemk', namamk='$namamk', sks='$sks', sksteori ='$sksteori', skspraktek='$skspraktek', semester='$semester', kurikulum='$kurikulum' WHERE kodemk= '$mk'");
    
    header("Location: matakuliah.php");    
?>