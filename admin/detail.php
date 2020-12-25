<?php
require_once "../koneksi.php";
if (!isset($_SESSION)){
    session_start();
}
if($_SESSION != null)
    $user = $_SESSION['username'];
else
    $user = "";
    
    $login=mysqli_query($con,"SELECT * FROM `login` where `username` = '".$user."' and `lvl` = '2'" );
    $lg=mysqli_fetch_array($login);
    $id = $_GET['id'];
?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Service AC </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../assets/css/flaticon.css">
            <link rel="stylesheet" href="../assets/css/slicknav.css">
            <link rel="stylesheet" href="../assets/css/animate.min.css">
            <link rel="stylesheet" href="../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/css/slick.css">
            <link rel="stylesheet" href="../assets/css/nice-select.css">
            <link rel="stylesheet" href="../assets/css/style.css">
   </head>
   <body>
       <header>
        <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <!-- <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> -->
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            
                        </div>             
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </header>
    <div class="what-we-do we-padding">
        <div class="container">
            <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                       <span></span>
                      <h2>Detail Pemesanan</h2>
                    </div>
                </div>
            </div>            
            <section class="sample-text-area">
                <div class="container box_1170">
                    <?php
                        require_once "../koneksi.php";
                        $sql = "SELECT t.*,ja.deskripsi,l.keterangan as jenisLayanan FROM `task` t INNER JOIN `jenis_ac` ja on t.jenis_ac = ja.id INNER JOIN layanan l on t.jenis_layanan = l.jenisLayanan where t.id = '$id'";
                        $query = mysqli_query($con, $sql) or die("Gagal". mysqli_error($con));
                        while($tampil = mysqli_fetch_array($query)){
                    ?>
                    <h3 class="text-heading">Pesanan Atas Nama : <?php echo $tampil['nm_pemesan']; ?></h3>
                    <h3 class="text-heading">Alamat : <?php echo $tampil['alamat']; ?></h3>
                    <h3 class="text-heading">No.Telepon : <?php echo $tampil['telp']; ?></h3>
                    <h3 class="text-heading">Tanggal Pemesanan : <?php echo $tampil['tgl_pesan']; ?></h3>
                    <h3 class="text-heading">Layanan Yang Di Pesan : <?php echo $tampil['jenisLayanan']; ?></h3>
                    <h3 class="text-heading">Jenis AC : <?php echo $tampil['deskripsi']; ?></h3>
                    <h3 class="text-heading">Jumlah Unit : <?php echo $tampil['jm_unit']; ?></h3>
                    <?php if($tampil['jenis_layanan'] != "perbaikan"){?>
                    <h3 class="text-heading">Harga : <?php echo $tampil['harga']; ?></h3>
                    <?php }?>
                    <h3 class="text-heading">Keterangan Tambahan : <?php echo $tampil['keterangan']; ?></h3>
                    <?php }?>
                </div>
                <div class="button-group-area mt-40">
                <a href="kotakmasuk.php" class="genric-btn success radius">Kembali</a>
            </div>
            </section>
            
        </div>
    </div>
   </body>
   </html>