<?php
require_once "../koneksi.php";
if (!isset($_SESSION)){
    session_start();
}
if($_SESSION != null)
    $user = $_SESSION['username'];
else
    $user = "";
    
    $login=mysqli_query($con,"SELECT * FROM `login` where `username` = '".$user."' and `lvl` = '1'" );
    $lg=mysqli_fetch_array($login);
    $uname = $lg['username'];
?>
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
  <script type="text/javascript">
    var d = new Date();

    var month = d.getMonth()+1;
    var day = d.getDate();

    var output = d.getFullYear() + '/' +
    (month<10 ? '0' : '') + month + '/' +
    (day<10 ? '0' : '') + day;

    $("#tgl_proses").val(output + " 00:01:00");
  </script>
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
              <a class="nav-link active" href="kotakmasuk.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Kotak Masuk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="kotakmasuk.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Pesanan Di Proses</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="kotakmasuk.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Pesanan Selesai</span>
              </a>
            </li>
            <li class="nav-item">
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
              <h3 class="mb-0">Update Pesanan</h3>
            </div>
            <form action="proses_upgrade_progress.php" method="POST">
                <div class="pl-lg-4">
                  <div class="row">
                    <div style="display: none;">
                      <input type="text" name="id" id="id" class="form-control" placeholder="id" value="<?php echo $_GET['id']?>">
                      <input type="text" name="uname" id="uname" class="form-control" placeholder="id" value="<?php echo $uname?>">
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Update Progress</label>
                        <select name="status" id="status" class="form-control">
                        <option value="-">-- Pilih --</option>
                        <?php $jenisAc = mysqli_query($con,"SELECT * FROM `status` where `status` not in ('1','2','3','X','C')" );
                              while ($data = mysqli_fetch_array($jenisAc)) {
                              $status = $data['status'];
                              $keterangan = $data['keterangan'];
                        ?>
                        <option value="<?php echo $status; ?>"><?php echo $keterangan;?></option>
                        <?php }?>
                      </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Tanggal Proses</label>
                        <input type="datetime-local" id="tgl_proses" name="tgl_proses" class="form-control">
                        <!--input class="form-control valid" name="tgl_proses" id="telp" type="telp" value="<?php echo date("Y-m-d H:i:s")?>" readonly=true-->
                        <!--input type="datetime-local" id="tgl_proses" name="tgl_proses" class="form-control" value=""--> 
                        <!-- <input type="date" id="tgl_proses" name="tgl_proses" class="form-control" value="09/09/2020"> -->
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address"></label>
                        <a href="detilTransaksi.php?id=<?php echo  $_GET['id']?>" class="genric-btn success radius">Masukan Detail</a>
                        <!-- <input type="date" id="tgl_proses" name="tgl_proses" class="form-control"> -->
                      </div>
                    </div>
                  </div> 



                  
                  <h6 class="heading-small text-muted mb-4">Keterangan</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Keterangan</label>
                    <textarea rows="4" class="form-control" name="Keterangan" placeholder="A few words about you ..."></textarea>
                  </div>
                </div>
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary my-4">Update Pesanan</button>
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