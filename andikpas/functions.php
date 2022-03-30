<?php 
// koneksi data ke data base

$conn = mysqli_connect("localhost", "root", "", "lpka");

function query ($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  
  $row = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows [] = $row;
  }
  return $rows;
  }


function tambah ($data) {
    
    global $conn;
    
    // abmil data dari tiap elemen
    $nr  = htmlspecialchars ($data["nr"]);
    $nama  = htmlspecialchars ($data["nama"]);
    $tempat = htmlspecialchars ($data["tempat"]);
    $tgllahir  = htmlspecialchars ($data["tgllahir"]);
    $umur  = htmlspecialchars ($data["umur"]);
    $jk  = htmlspecialchars ($data["jk"]);
    $agama  = htmlspecialchars ($data["agama"]);
    $pendidikan  = htmlspecialchars ($data["pendidikan"]);
    $kejahatan  = htmlspecialchars ($data["kejahatan"]);
    $pasal  = htmlspecialchars ($data["pasal"]);
    $akte  = htmlspecialchars ($data["akte"]);
    $kk  = htmlspecialchars ($data["kk"]);
    $ktp  = htmlspecialchars ($data["ktp"]);
    $ijazah  = htmlspecialchars ($data["ijazah"]);
    $foto = htmlspecialchars ($data["foto"]);

    // query inset data
    $query = "INSERT INTO andikpas VALUES 
              ('', '$nr', '$nama', '$tempat', '$tgllahir', '$umur', '$jk', '$agama',
               '$pendidikan', '$kejahatan', '$pasal', '$akte', '$kk', '$ktp', '$ijazah', '$foto')";
              
        
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

function hapus ($id) {

  global $conn;

  mysqli_query($conn, "DELETE FROM andikpas WHERE id = $id");

  return mysqli_affected_rows($conn);

}


function ubah ($data) {

  global $conn;

      // abmil data dari tiap elemen
      $id = $data ["id"];
      $nr  = htmlspecialchars ($data["nr"]);
      $nama  = htmlspecialchars ($data["nama"]);
      $tempat = htmlspecialchars ($data["tempat"]);
      $tgllahir  = htmlspecialchars ($data["tgllahir"]);
      $umur  = htmlspecialchars ($data["umur"]);
      $jk  = htmlspecialchars ($data["jk"]);
      $agama  = htmlspecialchars ($data["agama"]);
      $pendidikan  = htmlspecialchars ($data["pendidikan"]);
      $kejahatan  = htmlspecialchars ($data["kejahatan"]);
      $pasal  = htmlspecialchars ($data["pasal"]);
      $akte  = htmlspecialchars ($data["akte"]);
      $kk  = htmlspecialchars ($data["kk"]);
      $ktp  = htmlspecialchars ($data["ktp"]);
      $ijazah  = htmlspecialchars ($data["ijazah"]);
      $foto = htmlspecialchars ($data["foto"]);

      // query inset data
      $query = "UPDATE andikpas SET
                nr = '$nr', nama = '$nama', tempat = '$tempat', tgllahir = '$tgllahir', 
                umur = '$umur', jk = '$jk', agama = '$agama', pendidikan = '$pendidikan',
                kejahatan = '$kejahatan', pasal = '$pasal', akte = '$akte', kk = '$kk',
                ktp = '$ktp', ijazah = '$ijazah', foto = '$foto'
                WHERE id = $id";
                
          
      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);



}













function registrasi ($data) {
  global $conn;

  $username = strtolower(stripslashes($data ["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password1 = mysqli_real_escape_string($conn, $data["password1"]);

// cek username sudah ada atau belum
$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if( mysqli_fetch_assoc($result)) {
    echo "<script>
          alert ('username sudah terdaftar!')
          </script>";
    return false;
  }

  // cek konfirmasi password
  if ( $password !== $password1) {
    echo "<script>
          alert ('konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }

// enkripsi password
$password = password_hash ($password, PASSWORD_DEFAULT);


// tambahkan userbaru ke database
mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

return mysqli_affected_rows($conn);


}



?>