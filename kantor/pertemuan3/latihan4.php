<?php 
require 'functions.php';
$anak = query("SELECT * FROM anak");
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
  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>
  <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>NO</th>
    <th>NOMOR REGISTER</th>
    <th>NAMA</th>
    <th>TEMPAT LAHIR</th>
    <th>TANGGAL LAHIR</th>
    <th>JENIS KELAMIN</th>
    <th>UMUR</th>
    <th>PENDIDIKAN</th>
    <th>PASAL</th>
    <th>GAMBAR</th>
    <th>AKSI</th>
  </tr>
 
  <?php $i = 1; ?>
  <?php foreach ($anak as $ank) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td><?= $ank["nr"]; ?></td>
    <td><?= $ank["nama"]; ?></td>
    <td><?= $ank["tempat"]; ?></td>
    <td><?= $ank["tgl"]; ?></td>
    <td><?= $ank["jk"]; ?></td>
    <td><?= $ank["umur"]; ?></td>
    <td><?= $ank["pendidikan"]; ?></td>
    <td><?= $ank["pasal"]; ?></td>
    <td>
      <img src="img/<?= $ank["gambar"] ?>" width="50"></td>
    <td>
      <a href="">ubah</a> | 
      <a href="hapus.php?id=<?= $ank["id"]; ?>" onclick="return confirm('yakin');">Hapus</a>
      </td>
  </tr>
    <?php $i++; ?>
    <?php endforeach; 
    ?>

  </table>
</body>

</html>