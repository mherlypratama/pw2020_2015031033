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
