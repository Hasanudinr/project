<?php 

require 'functions.php';


if(isset ($_POST["register"]) ) {

  if( registrasi($_POST) > 0 ) {
    echo " <script>
           alert ('user baru berhasil ditambahkan');
           </script>";
  } else {
    echo mysqli_error($conn);
  }


}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reg.css"/>
    <title>SIDAK | Registrasi</title>
  </head>
  <body>
      <div class="container">
      <section class="login-box">

      <h2>REGISTRASI</h2>
      <p>Sistem Informasi Data Anak <br> Lembaga Pembinaan Khusus Anak Kelas II Ternate</p>
      <form action="" method="post">
        <input type="text" name= "username" placeholder="Username" id="username" />
        <input type="password" name= "password" placeholder="Password" id="password" />
        <input type="password" name= "password1" placeholder="Konfirmasi Password" id="password2" />
        <input type="submit" name= "register" value="register">
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>