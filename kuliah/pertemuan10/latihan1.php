<?php
// Koneksi ke Database dan pilih databasenya
$conn = mysqli_connect('localhost', 'root', '', 'pmpap');

// query dan isi semua tabel
$result = mysqli_query($conn, "SELECT * FROM data_pengurus");

$rows = [];
// ubah data dalam bentuk array
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// $row = mysqli_fetch_row($result); Jadi array numerik


// tampung ke variabel mahasiswa
$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <!-- <th>Gambar</th> -->
      <th>Nama</th>
      <th>NPM</th>
      <th>Email</th>
      <th>Prodi</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <!-- <td><img src="img/herly.jpg" width="60"></td> -->
        <td><?= $m['nama']; ?></td>
        <td><?= $m['npm']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['prodi']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>