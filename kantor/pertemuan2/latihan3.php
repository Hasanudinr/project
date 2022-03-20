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
  <?php foreach ($anak as $ank) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td><?= $ank["nomor register"]; ?></td>
    <td><?= $ank["nama"]; ?></td>
    <td><?= $ank["tempat tanggal lahir"]; ?></td>
    <td><?= $ank["umur"]; ?></td>
    <td><?= $ank["pendidikan"]; ?></td>
    <td><?= $ank["jenis kejahatan"]; ?></td>
    <td><?= $ank["pasal"]; ?></td>
    <td><?= $ank["tinggi badan"]; ?></td>
    <td><?= $ank["berat badan"]; ?></td>
    <td>
      <img src="img/<?= $ank["gambar"] ?>" width="50"></td>
    <td>
      <a href="">ubah</a> | <a href="">hapus</a>
      </td>
  </tr>
    <?php $i++; ?>
    <?php endforeach; 
    ?>

  </table>
</body>

</html>