<?php 
require 'functions.php';

$andikpas = query ("SELECT * FROM andikpas");

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
              <input class="form-control" type="search" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off" />
              <button class="btn btn-primary" type="submit" name="submit">
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
            <h4>Data Anak Didik Pemasyarakatan</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Table Anak
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped data-table" style="width: 100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nomor Register</th>
                        <th>Nama</th>
                        <th>Tempat</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Pendidikan</th>
                        <th>Kejahatan</th>
                        <th>Pasal</th>
                        <th>Akte</th>
                        <th>KK</th>
                        <th>KTP</th>
                        <th>Ijazah</th>
                        <th>Foto</th>
                        <th>Ket</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($andikpas as $row) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nr"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["tempat"]; ?></td>
                        <td><?= $row["tgllahir"]; ?></td>
                        <td><?= $row["umur"]; ?></td>
                        <td><?= $row["jk"]; ?></td>
                        <td><?= $row["agama"]; ?></td>
                        <td><?= $row["pendidikan"]; ?></td>
                        <td><?= $row["kejahatan"]; ?></td>
                        <td><?= $row["pasal"]; ?></td>
                        <td><?= $row["akte"]; ?></td>
                        <td><?= $row["kk"]; ?></td>
                        <td><?= $row["ktp"]; ?></td>
                        <td><?= $row["ijazah"]; ?></td>
                        <td><img src="img/<?= $row["foto"]; ?>" width="40"></td>
                        <td>
                          <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin')">Hapus</a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
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
    <script src="./admdashboard/js/jquery.dataTables.min.js"></script>
    <script src="./admdashboard/js/dataTables.bootstrap5.min.js"></script>
    <script src="./admdashboard/js/script.js"></script>
  </body>
</html>