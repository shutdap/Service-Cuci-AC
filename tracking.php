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
    $uname = $lg['username'];
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
            <div class="col_full">
                    <div class="table-responsive">
                        <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nama Pemesan</th>
                                <th>Alamat</th>
                                <th>No.Telepon</th>
                                <th>Jenis AC</th>
                                <th>Jenis Layanan</th>
                                <th>Petugas</th>
                                <th>Detail</th>
                                <th>Menu Pembayaran</th>
                                <th>Menu Pembatalan Pesanan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once "koneksi.php";
                            $sql = "SELECT t.*,ja.deskripsi, l.keterangan FROM `task` t left JOIN `jenis_ac` ja on t.jenis_ac = ja.id 
                                    INNER JOIN layanan l on t.jenis_layanan = l.jenisLayanan where user_pelangan = '$uname'";
                            $query = mysqli_query($con, $sql) or die("Gagal". mysqli_error($con));
                            while($tampil = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $tampil['nm_pemesan']; ?></td>
                                    <td><?php echo $tampil['alamat']; ?></td>
                                    <td><?php echo $tampil['telp']; ?></td>
                                    <?php
                                        $des = $tampil['jenis_ac'] ;
                                        if( $des != "MIXED"){ 
                                    ?>
                                        <td><?php echo $tampil['deskripsi']; ?></td>
                                    <?php } else { ?>
                                        <td><a href="lihatdetailNew.php?id=<?php echo $tampil['id'];?>" class="genric-btn success radius">Lihat Detail</a></td>
                                    <?php }?>
                                     <td><?php echo $tampil['keterangan']; ?></td>
                                      <td><?php echo $tampil['petugas']; ?></td>
                                    <td>
                                        <a href="logtracking.php?id=<?php echo $tampil['id']; ?>"><font color="#57a2f7">Detail Tracking</font></a>
                                    </td>                                    
                                    <?php
                                        $status = $tampil['status'];
                                        if($status == "C"){ 
                                    ?>
                                    <td>
                                       
                                    </td>
                                    <td>
                                        <font color="#57a2f7">Pesanan Telah Di Batalkan</font>
                                    </td>
                                    <?php } else { ?>
                                    <td>
                                        <a href="detail.php?id=<?php echo $tampil['id']; ?>"><font color="#57a2f7">Menu Pembayaran</font></a>
                                    </td>
                                    <td>
                                        <a href="batal.php?id=<?php echo $tampil['id']; ?>"><font color="#57a2f7">Pembatalan Pesanan</font></a>
                                    </td>
                                    <?php }?>
                                </tr>
                            <?php };?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    </body>
    </html>