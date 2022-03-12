<?php 
// koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'db_pembinaan');

// Query isi tabel andik
$result = mysqli_query($conn, "SELECT * FROM anak");


// ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel anak
$anak = $rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Andikpas</title>
</head>
<body>
  <h3>Daftar Andikpas</h3>
  <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>NOMOR REGISTER</th>
    <th>NAMA</th>
    <th>TEMPAT TANGGAL LAHIR</th>
    <th>UMUR</th>
    <th>PENDIDIKAN</th>
    <th>JENIS KEJAHATAN</th>
    <th>PASAL</th>
    <th>TINGGI BADAN</th>
    <th>BERAT BADAN</th>
    <th>GAMBAR</th>
    <th>AKSI</th>
  </tr>

  <?php foreach($anak as $a) ?>
  <tr>
    <td>1</td>
    <td>B.IIa/2017</td>
    <td>Feri Pieter Drunyi</td>
    <td>Papua, 29 September 2002</td>
    <td>22</td>
    <td>SMA</td>
    <td>Narkoba</td>
    <td>KUHP</td>
    <td>165</td>
    <td>65</td>
    <td><img src="img/1.jpg" width="60"></td>
    <td>
      <a href="">ubah</a> | <a href="">hapus</a>
      </td>
  </tr>
  <?php 'endforeach'; ?>
</table>

</body>

</html>