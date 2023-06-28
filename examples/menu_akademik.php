<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <?php
    session_start();
    $username=$_SESSION['username'];
    $status=$_SESSION['status'];
    echo "<h2>Selamat Datang $username, anda berhasil login</h2>
    <a href='dashboard.html'>Menu Utama<br><br>
    <a href='listmahasiswa.php'>Data Mahasiswa><br><br>
    <a href='listdosen.php'>Data Dosen</a><br><br>
    ";
    ?>
    <a href="./logout.php">
    <button>Logout</button></a>
</body>
</html>