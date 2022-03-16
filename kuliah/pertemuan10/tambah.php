<?php
require 'functions.php';
// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href = 'latihan3.php'; </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li><label>
          Email :
          <input type="text" name="email" autofocus required>
        </label></li>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" required>
        </label>
      </li>
      <li><label>
          NPM :
          <input type="text" name="npm" required>
        </label></li>
      <!-- <div>
        <label for="prodi">
          Pasien </label>
        <select name="prodi" id="prodi" class="form-control" required>
          <option value="">- Pilih -</option>

        </select>

      </div> -->

      <li><label>
          Departemen :
          <input type="text" name="departemen" required>
        </label></li>
      <li>
        <label>
          Jabatan :
          <input type="text" name="jabatan" required>
        </label>
      </li>
      <li><label>
          Prodi :
          <input type="text" name="prodi" required>
        </label></li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>

  </form>

</body>

</html>