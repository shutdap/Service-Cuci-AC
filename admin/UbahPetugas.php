<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin</title>
  <!-- Favicon -->
  <link rel="icon" href="../assetsAdminAdmin/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assetsAdmin/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assetsAdmin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assetsAdmin/css/argon.css?v=1.2.0" type="text/css">
</head>
<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <h2>SERVICE AC</h2>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="register.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="dataPesanan.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Data Pesanan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="kotakmasuk.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Kotak Masuk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="pesananDiproses.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Pesanan Di Proses</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="pesananSelesai.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Pesanan Selesai</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="daftarPetugas.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Daftar Petugas</span>
              </a>
            </li>            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center  ml-md-auto ">
              <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
              </li>
            </ul>
        </div>
      </div>
    </nav>
   
   <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Petugas</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Petugas</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Petugas</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Assign Petugas</h3>
            </div>
            <form action="ubah_petugas.php" method="POST">
                <div class="pl-lg-4">
                  <?php
                    require_once "../koneksi.php";
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `login` WHERE `id` = $id";
                    $query = mysqli_query($con, $sql) or die("Gagal". mysqli_error($con));
                    while($tampil = mysqli_fetch_array($query)){
                  ?>
                  <div class="row">
                    <div style="display: none;">
                      <input type="text" name="id" id="id" class="form-control" placeholder="id" value="<?php echo $_GET['id']?>">
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" value="<?php echo $tampil['frist_name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" value="<?php echo $tampil['alamat']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="email" value="<?php echo $tampil['email']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Nomor Telepon</label>
                        <input type="text" name="notelp" id="notelp" class="form-control" placeholder="notelp" value="<?php echo $tampil['notelp']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Password</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="password" value="<?php echo $tampil['password']?>">
                      </div>
                    </div>
                    <?php }?>
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary my-4">assing</button>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>    
  </div>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assetsAdmin/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assetsAdmin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assetsAdmin/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assetsAdmin/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assetsAdmin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assetsAdmin/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assetsAdmin/js/argon.js?v=1.2.0"></script>
  
</body>
</html>