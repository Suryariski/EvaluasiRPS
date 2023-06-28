<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <?php
$koneksi = mysqli_connect("localhost", "root","","evaluasirps");
if (mysqli_connect_error()){
	echo "koneksi ke database gagal : " . mysqli_connect_error();
}

  ?>
</body>
</html>