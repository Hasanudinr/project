<?php 

  require 'functions.php';


      // cek apakah submit sudah ditekan atau belum
     if (isset($_POST["submit"]))  {
      
      // cek apakah data berhasil di tambahkan atau tidak
      if (tambah($_POST) > 0 ){
          echo "<script>
                alert ('data berhasil ditambahkan');
                document.location.href = 'dataanak.php';
                </script>";
      } else { 
        echo "<script>
                alert ('data gagal ditambahkan');
                document.location.href = 'dataanak.php';
                </script>";
      }
      
}
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./admdashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./admdashboard/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="./admdashboard/css/style.css" />
    <title>SIDAK | Data Anak</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Sistem Informasi Data Anak</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Ubah Password</a></li>
                <li><a class="dropdown-item" href="reg.php">Registrasi</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Data Anak</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Tambah Anak</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Stackholder</span>
              </a>
            </li>

            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Galeri</div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Kepribadian</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Keterampilan</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Tambah Anak Didik Pemasyarakatan</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Table Input
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped data-table" style="width: 100%">
                    <thead>
                      <form action="" method="post">
                      <tr>
                        <th>
                          <label for="nr">Nomor Register</label>
                          <input type="text" name="nr" id="nr" required>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" required>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="tempat">Tempat</label>
                          <input type="text" name="tempat" id="tempat" require>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="tgllahir">Tanggal Lahir</label>
                          <input type="date" name="tgllahir" id="tgllahir" required>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="umur">Umur</label>
                          <input type="text" name="umur" id="umur" required>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="jk">Jenis Kelamin</label>
                          <input type="radio" name="jk" id="jk" value="L"> Laki - Laki
                          <input type="radio" name="jk" id="jk" value="P"> Perempuan
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="agama">Agama</label>
                          <input type="text" name="agama" id="agama">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="pendidikan">Pendidikan</label>
                          <input type="text" name="pendidikan" id="pendidikan" required>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="kejahatan">Kejahatan</label>
                          <input type="text" name="kejahatan" id="kejahatan" required>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="pasal">Pasal</label>
                          <input type="text" name="pasal" id="pasal" required>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="akte">Akte Kelahiran</label>
                          <input type="radio" name="akte" id="akte" value="ada"> Ada
                          <input type="radio" name="akte" id="akte" value="tidak"> Tidak Ada
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="kk">Kartu Keluarga</label>
                          <input type="radio" name="kk" id="kk" value="ada"> Ada
                          <input type="radio" name="kk" id="kk" value="tidak"> Tidak Ada
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="ktp">Kartu Tanda Penduduk</label>
                          <input type="radio" name="ktp" id="ktp" value="ada"> Ada
                          <input type="radio" name="ktp" id="ktp" value="tidak"> Tidak Ada
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="ijazah">Ijazah Terakhir</label>
                          <input type="teks" name="ijazah" id="ijazah"> 
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <label for="foto">foto</label>
                          <input type="teks" name="foto" id="foto" required> 
                        </th>
                      </tr>
                      <tr>
                        <th>
                          <button type="submit" name="submit">Tambah Data</button>
                       </th>
                      </tr>
                      </form>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./admdashboard/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./admdashboard/js/jquery-3.5.1.js"></script>
    <!-- <script src="./admdashboard/js/jquery.dataTables.min.js"></script> -->
    <script src="./admdashboard/js/dataTables.bootstrap5.min.js"></script>
    <script src="./admdashboard/js/script.js"></script>
  </body>
</html>