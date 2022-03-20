<?php 
// koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'db_pembinaan');

function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
   return $rows;
}


function tambah ($data) {
  // ambil data dari tiap elemen dalam form
  global $conn;
  $nr = htmlspecialchars($data["nr"]);
  $nama = htmlspecialchars($data["nama"]);
  $tempat = htmlspecialchars($data["tempat"]);
  $tanggal = htmlspecialchars($data["tgl"]);
  $jeniskelamin = htmlspecialchars($data["jk"]);
  $umur = htmlspecialchars($data["umur"]);
  $pendidikan = htmlspecialchars($data["pendidikan"]);
  $pasal = htmlspecialchars($data["pasal"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // query insert data
  $query = "INSERT INTO anak
      VALUES
      ('', '$nr', '$nama', '$tempat', '$tanggal', '$jeniskelamin', '$umur', '$pendidikan', '$pasal', '$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus ($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM anak WHERE id =$id");
  return mysqli_affected_rows($conn);
}


function ubah ($data) {
      global $conn;
      $id = $data["id"];
      $nr = htmlspecialchars($data["nr"]);
      $nama = htmlspecialchars($data["nama"]);
      $tempat = htmlspecialchars($data["tempat"]);
      $tanggal = htmlspecialchars($data["tgl"]);
      $jeniskelamin = htmlspecialchars($data["jk"]);
      $umur = htmlspecialchars($data["umur"]);
      $pendidikan = htmlspecialchars($data["pendidikan"]);
      $pasal = htmlspecialchars($data["pasal"]);
      $gambar = htmlspecialchars($data["gambar"]);

      // query update data
      $query = "UPDATE anak SET
                nr = '$nr',
                nama =  '$nama',
                tempat = '$tempat',
                tanggal = '$tanggal',
                jeniskelamin = '$jeniskelamin',
                umur  = '$umur',
                pendidikan = '$pendidikan',
                pasal = '$pasal',
                gambar = '$gambar',
              WHERE id = $id
              ";

      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);
}

?>