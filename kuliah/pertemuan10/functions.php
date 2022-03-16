<?php
function koneksi()
{
  // Koneksi ke Database dan pilih databasenya
  return mysqli_connect('localhost', 'root', '', 'pmpap');
}

function query($query)
{
  $conn = koneksi();
  // query dan isi semua tabel
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  // ubah data dalam bentuk array
  while ($row = mysqli_fetch_assoc($result)) { // $row = mysqli_fetch_row($result); Jadi array numerik
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $email = htmlspecialchars($data['email']);
  $nama = htmlspecialchars($data['nama']);
  $npm = htmlspecialchars($data['npm']);
  $departemen = htmlspecialchars($data['departemen']);
  $jabatan = htmlspecialchars($data['jabatan']);
  $prodi = htmlspecialchars($data['prodi']);


  $query = "INSERT INTO `data_pengurus` (`email`, `nama`, `npm`, `departemen`, `jabatan`, `prodi`) VALUES ('$email', '$nama', '$npm', '$departemen', '$jabatan', '$prodi');";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
