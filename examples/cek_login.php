<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$data_user = mysqli_fetch_array($data);
$level = $data_user['level'];
if($cek > 0){
    if($level == 'admin'){
        $_SESSION['username'] = $username;
        $_SESSION['admin_id'] = $data_user['userid'];
    }
    if($level == 'mahasiswa'){
        $_SESSION['username'] = $username;
        $_SESSION['mahasiswa_id'] = $data_user['userid'];
    }
    if($level == 'dosen'){
        $_SESSION['username'] = $username;
        $_SESSION['dosen_id'] = $data_user['userid'];
    }
    $_SESSION['status'] ="login";
        header("location:login/login.php?pesan=login&level=$level");
    
}else {
    header("location:login/login.php?pesan=gagal");
    }
?>
