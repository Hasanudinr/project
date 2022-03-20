<?php 
// koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'db_pembinaan');

// Query isi tabel anak
$result = mysqli_query($conn, "SELECT * FROM anak");


// ubah data ke dalam array
// $rows = [];
// while ($row = mysqli_fetch_assoc($result)) {
//   $rows[] = $row;


// // tampung ke variabel anak
// $anak = $rows;

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
    <th>No</th>
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
 
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($result)):?>
  <tr>
    <td><?= $i; ?></td>
    <td><?= $row["nomor register"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["tempat tanggal lahir"]; ?></td>
    <td><?= $row["umur"]; ?></td>
    <td><?= $row["pendidikan"]; ?></td>
    <td><?= $row["jenis kejahatan"]; ?></td>
    <td><?= $row["pasal"]; ?></td>
    <td><?= $row["tinggi badan"]; ?></td>
    <td><?= $row["berat badan"]; ?></td>
    <td>
      <img src="img/<?= $row["gambar"] ?>" width="50"></td>
    <td>
      <a href="">ubah</a> | <a href="">hapus</a>
      </td>
  </tr>
  <?php $i++; ?>
  <?php endwhile; ?>
  </table>
</body>

</html>