<?php 
require 'functions.php'
$anak = Query("SELECT * FORM anak");

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

  <?php $i=1;
  foreach ($anak as $a); ?>
  <tr>
    <td><?= $i++; ?></td>
    <td><?= $a['nomor register']; ?></td>
    <td><?= $a['nama']; ?></td>
    <td><?= $a['tempat tanggal lahir']; ?></td>
    <td><?= $a['umur']; ?></td>
    <td><?= $a['pendidikan']; ?></td>
    <td><?= $a['jenis kejahatan']; ?></td>
    <td><?= $a['pasal']; ?></td>
    <td><?= $a['tinggi badan']; ?></td>
    <td><?= $a['berat badan']; ?></td>
    <td><img src="img/<?= $a['gambar']; ?>" width="60"></td>
    <td>
      <a href="">ubah</a> | <a href="">hapus</a>
      </td>
  </tr>
  <?php 'endforeach'; ?>
</table>


</body>

</html>