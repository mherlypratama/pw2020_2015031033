<?php
require 'functions.php';
// ambil dari URL
$npm = $_GET['id'];
// query mahasiswa berdasarkan id
$m = query("SELECT * FROM data_pengurus WHERE npm = $npm");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <!-- <li><img src="img/<?= $m['gambar']; ?>" width="60"></li> -->

    <li>NPM: <?= $m['npm']; ?></li>
    <li>Nama: <?= $m['nama']; ?></li>
    <li>Email: <?= $m['email']; ?></li>
    <li>Prodi: <?= $m['prodi']; ?></li>
    <li><a href=""> ubah | hapus </a></li>
    <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>

</body>

</html>