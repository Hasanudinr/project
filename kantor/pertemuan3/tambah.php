<?php 
require 'functions.php';


// cek tombol submit sda ditekan
if (isset($_POST["submit"])) {
  
// cek data berhasil ditambahkan atau tidak
if (tambah($_POST) > 0 ) {
  echo "
        <script>
        alert ('data berhasil ditambahkan');
        document.location.href = 'latihan4.php';
        </script>";
}else{
  echo "
  <script>
  alert ('data gagal ditambahkan');
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
  <title>Tambah Data Anak</title>
</head>
<body>
  <h1>Tambah Data Mahasiswa</h1>
  
  <form action="" method="post">
      <ul>
        <li>
          <label for="nr">Nomor Register</label>
          <input type="text" name="nr" id="nr" required>
        </li>
        <li>
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="tempat">Tempat Lahir</label>
          <input type="text" name="tempat" id="tempat">
        </li>
        <li>
          <label for="tgl">Tanggal Lahir</label>
          <input type="date" name="tgl" id="tgl">
        </li>
        <li>
          <label for="jk">Jenis Kelamin</label>
          <input type="radio" name="jk" id="jk" value="L"> Laki - Laki
          <input type="radio" name="jk" id="jk" value="P"> Perempuan
        </li>
        <li>
          <label for="umur">Umur</label>
          <input type="text" name="umur" id="umur">
        </li>
        <li>
          <label for="pendidikan">Pendidikan</label>
          <input type="text" name="pendidikan" id="pendidikan">
        </li>
        <li>
          <label for="pasal">Pasal</label>
          <input type="text" name="pasal" id="pasal">
        </li>
        <li>
          <label for="gambar">Gambar</label>
          <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
          <button type="submit" name="submit">Tambah Data!</button>
        </li>
      </ul>


  </form>
</body>
</html>