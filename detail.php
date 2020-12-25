<?php
require_once "koneksi.php";
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
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
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
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">    
                                        <li><a href="index.php"> Home</a></li>
                                        
<!--                                         <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li> -->
                                        <?php
                                        if($lg != null){
                                        ?>
                                            <li><a href="tracking.php">Tracking</a></li>
                                            <li><a href="logout.php">Log Out</a></li>
                                        <?php }else {?>
                                             <li><a href="login.php">Login</a></li>
                                        <?php }?>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="#" class="btn header-btn">Contact Us</a>
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
                        require_once "koneksi.php";
                        $sql = "SELECT t.*,ja.deskripsi,l.keterangan as jenisLayanan FROM `task` t left JOIN `jenis_ac` ja on t.jenis_ac = ja.id INNER JOIN layanan l on t.jenis_layanan = l.jenisLayanan where t.id = '$id'";
                        $query = mysqli_query($con, $sql) or die("Gagal". mysqli_error($con));
                        while($tampil = mysqli_fetch_array($query)){
                    ?>
                    <h3 class="text-heading">Pesanan Atas Nama : <?php echo $tampil['nm_pemesan']; ?></h3>
                    <h3 class="text-heading">Alamat : <?php echo $tampil['alamat']; ?></h3>
                    <h3 class="text-heading">No.Telepon : <?php echo $tampil['telp']; ?></h3>
                    <h3 class="text-heading">Tanggal Pemesanan : <?php echo $tampil['tgl_pesan']; ?></h3>
                    <h3 class="text-heading">Layanan Yang Di Pesan : <?php echo $tampil['jenisLayanan']; ?></h3>
                    <?php $des = $tampil['jenis_ac'] ;if( $des != "MIXED"){ ?>
                        <h3 class="text-heading">Jenis AC : <?php echo $tampil['deskripsi']; ?></h3>
                        <h3 class="text-heading">Jumlah Unit : <?php echo $tampil['jm_unit']; ?></h3>
                    <?php }?>                    

                    <?php if($tampil['jenis_layanan'] != "perbaikan"){?>
                        <?php $des = $tampil['jenis_ac'] ;if( $des != "MIXED"){ ?>
                            <h3 class="text-heading">Harga : <?php echo $tampil['harga']; ?></h3>
                        <?php } else {?>
                            <h3 class="text-heading">Detil Transaksi</h3>
                            <div class="table-responsive">
                                  <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                      <tr>
                                        <th>Jenis AC</th>
                                        <th>Jumlah Unit</th>
                                        <th>Harga</th>   
                                      </tr>
                                    </thead>
                                    <tbody class="list">
                                      <?php
                                        require_once "koneksi.php";
                                        $sql3 = "SELECT da.*,j.jenis FROM `detil_ac` da join `jenis_ac` j on j.id = da.jenis_ac WHERE `tasks_id` =  '$id'";
                                        $query3 = mysqli_query($con, $sql3) or die("Gagal". mysqli_error($con));
                                        while($tampil3 = mysqli_fetch_array($query3)){
                                      ?>
                                      <tr>
                                        <tr>
                                            <td><?php echo $tampil3['jenis']; ?></td>
                                            <td><?php echo $tampil3['jm_unit']; ?></td>
                                            <td><?php echo $tampil3['harga']; ?></td>
                                        </tr>                   
                                      </tr>
                                    <?php }?>
                                    <?php
                                    require_once "koneksi.php";
                                    $id= $_GET['id'];
                                    $sql4 = "SELECT sum(harga) as total FROM `detil_ac` WHERE `tasks_id` = '$id'";
                                    $query4 = mysqli_query($con, $sql4) or die("Gagal". mysqli_error($con));
                                    while($tampil4 = mysqli_fetch_array($query4)){
                                  ?>
                                  <tr>
                                    <td colspan="2">Total Biaya = <?php echo $tampil4['total']; ?></td>
                                  </tr>
                                  <?php }?>
                                    </tbody>
                                  </table>
                                </div>
                        <?php }?>
                    <?php } else {?>
                    <h3 class="text-heading">Detil Transaksi</h3>
                        <div class="table-responsive">
                          <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col" class="sort" >Nama Spare Part</th>
                                <th scope="col" class="sort" >Harga</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                              <?php
                                require_once "koneksi.php";
                                $sql2 = "SELECT * FROM `detil_transaksi` WHERE `tasks_id` = '$id'";
                                $query2 = mysqli_query($con, $sql2) or die("Gagal". mysqli_error($con));
                                while($tampil2 = mysqli_fetch_array($query2)){
                              ?>
                              <tr>
                                <td><?php echo $tampil2['nama_barang']; ?></td>
                                <td><?php echo $tampil2['harga']; ?></td>                    
                              </tr>
                              <?php }?>
                              <?php
                                require_once "koneksi.php";
                                $id= $_GET['id'];
                                $sql1 = "SELECT sum(harga) as total FROM `detil_transaksi` WHERE `tasks_id` = '$id'";
                                $query1 = mysqli_query($con, $sql1) or die("Gagal". mysqli_error($con));
                                while($tampil1 = mysqli_fetch_array($query1)){
                              ?>
                              <tr>
                                <td colspan="2">Total Biaya = <?php echo $tampil1['total']; ?></td>
                              </tr>
                              <?php }?>
                            </tbody>
                          </table>
                        </div>
                    <?php }?>
                    <h3 class="text-heading">Keterangan Tambahan : <?php echo $tampil['keterangan']; ?></h3>
                    <?php }?>
                </div>
                <div class="button-group-area mt-40">
                <a href="pembayaran.php?id=<?php echo  $id?>" class="genric-btn success radius">Pembayaran</a>
            </div>
            </section>
            
        </div>
    </div>
   </body>
   </html>