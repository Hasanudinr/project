<?php 
require 'functions.php';

// ambil data diurl
$id = $_GET["id"];

// query data anak berdasarkan id
$ank = query("SELECT * FROM anak WHERE id = $id") [0];

// cek tombol submit sda ditekan
if (isset($_POST["submit"])) {
  
// cek data berhasil diubah atau tidak
if (ubah($_POST) > 0 ) {
  echo "
        <script>
          alert('data berhasil diubah!');
          document.location.href = 'latihan4.php';
        </script>";}
  else {
  echo "
      <script>
        alert ('data gagal diubah!')
        document.location.href = 'latihan4.php';
      </script>";  
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Anak</title>
</head>
<body>
  <h1>Ubah Data Anak</h1>
  
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $ank["id"]; ?>">
      <ul>
        <li>
          <label for="nr">Nomor Register</label>
          <input type="text" name="nr" id="nr" required value="<?= $ank["nr"]; ?>">
        </li>
        <li>
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" required value="<?= $ank["nama"]; ?>">
        </li>
        <li>
          <label for="tempat">Tempat Lahir</label>
          <input type="text" name="tempat" id="tempat" required value="<?= $ank["tempat"]; ?>">
        </li>
        <li>
          <label for="tgl">Tanggal Lahir</label>
          <input type="date" name="tgl" id="tgl" required value="<?= $ank["tgl"]; ?>">
        </li>
        <li>
          <label for="jk">Jenis Kelamin</label>
          <input type="radio" name="jk" id="jk" required value="<?= $ank["jk"]; ?>">Laki - Laki
          <input type="radio" name="jk" id="jk" reqiured value="<?= $ank["jk"]; ?>"> Perempuan
        </li>
        <li>
          <label for="umur">Umur</label>
          <input type="text" name="umur" id="umur" required value="<?= $ank["umur"]; ?>">
        </li>
        <li>
          <label for="pendidikan">Pendidikan</label>
          <input type="text" name="pendidikan" id="pendidikan" required value="<?= $ank["pendidikan"]; ?>">
        </li>
        <li>
          <label for="pasal">Pasal</label>
          <input type="text" name="pasal" id="pasal" required value="<?= $ank["pasal"]; ?>">
        </li>
        <li>
          <label for="gambar">Gambar</label>
          <input type="text" name="gambar" id="gambar" required value="<?= $ank["gambar"]; ?>">
        </li>
        <li>
          <button type="submit" name="submit">Ubah Data!</button>
        </li>
      </ul>
  </form>
</body>
</html>