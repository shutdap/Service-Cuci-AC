
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
          <h2>ADMIN</h2>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a class="nav-link active" href="register.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li> -->
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
            </li>           
            <li class="nav-item">
              <a class="nav-link active" href="laporan1.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Laporan</span>
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
              <h6 class="h2 text-white d-inline-block mb-0">Kotak Masuk</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kotak Masuk</li>
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
              <h3 class="mb-0">Kotak Masuk</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" >Nama Pemesan</th>
                    <th scope="col" class="sort" >Alamat</th>
                    <th scope="col" class="sort" >Jenis AC</th>
                    <th scope="col" class="sort" >Tanggal Pemesanan</th>
                    <th scope="col" class="sort" >Jenis Layanan</th>
                    <th scope="col" class="sort" >Jumlah Unit</th>
                    <th scope="col" class="sort" >Harga</th>
                    <th scope="col" class="sort" >Petugas</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" >Bukti Pembayaran</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    require_once "../koneksi.php";
                    $sql = "SELECT t.*,ja.deskripsi, l.keterangan,l.jenisLayanan as layanan,t.id as tasksid,s.keterangan as status_code FROM `task` t left JOIN `jenis_ac` ja on t.jenis_ac = ja.id 
                            INNER JOIN layanan l on t.jenis_layanan = l.jenisLayanan INNER JOIN `status` s on t.status = s.status
                            WHERE t.`status` in ('1','2')";
                    $query = mysqli_query($con, $sql) or die("Gagal". mysqli_error($con));
                    while($tampil = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                    <td><?php echo $tampil['nm_pemesan']; ?></td>
                    <td><?php echo $tampil['alamat']; ?></td>
                    <?php $des = $tampil['jenis_ac'] ; if( $des != "MIXED"){ ?>
                        <td><?php echo $tampil['deskripsi']; ?></td>
                      <?php }else {?>
                        <td><a href="../lihatdetailNew.php?id=<?php echo $tampil['id'];?>" class="genric-btn success radius">Lihat Detail</a></td>
                      <?php }?>
                    <td><?php echo $tampil['tgl_pesan']; ?></td>
                    <td><?php echo $tampil['layanan']; ?></td>
                    <td><?php echo $tampil['jm_unit']; ?></td>
                    <?php
                      require_once "../koneksi.php";
                      $tasksid = $tampil['tasksid'];
                      $sum = "SELECT sum(`harga`) as harga FROM `detil_ac` where `tasks_id` = '$tasksid' ";
                      $query2 = mysqli_query($con, $sum) or die("Gagal". mysqli_error($con));
                      $show = mysqli_fetch_array($query2);

                      $sum1 = "SELECT sum(`harga`) as harga1 FROM `detil_transaksi` where `tasks_id` = '$tasksid' ";
                      $query3 = mysqli_query($con, $sum1) or die("Gagal". mysqli_error($con));
                      $show1 = mysqli_fetch_array($query3);



                      $harga1 = $show['harga'];
                      $harga2 = $show1['harga1'];
                      $total = $show['harga'] + $show1['harga1'];
                      if( $harga1 > 0 || $harga2 > 0){
                    ?>
                      <td><?php echo $total; ?></td>
                    <?php } else {?>
                      <td><?php echo $tampil['harga']; ?></td>
                    <?php } ?>
                    <td><?php echo $tampil['petugas']; ?></td>
                    <td><?php echo $tampil['status_code']; ?></td>
                    <?php
                      if($tampil['bukti_tf'] == null and $tampil['bukti_tf'] == ""){
                    ?>
                      <td>Belum Ada Pembayaran</td>
                    <?php } else  {?>
                      <td><?php echo "<img src='../tf/".$tampil['bukti_tf']."' width='100' height='100'>"?></td>
                    <?php }?>
                    <td>
                      <a href="assignPetugas.php?id=<?php echo $tampil['id']; ?>">Assign Petugas</a></a>
                    </td>

                    <td>
                      <a href="detail.php?id=<?php echo $tampil['id']; ?>">Detail Pesanan</a></a>
                    </td>
                    <td>
                      <a href="logtracking.php?id=<?php echo $tampil['id']; ?>">Tracking</a></a>
                    </td>

                  </tr>
                  <?php }?>
                </tbody>
              </table>
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