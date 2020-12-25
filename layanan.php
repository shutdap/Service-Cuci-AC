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
            <div class="row">
                <div class="col-12">
                    <?php if($_GET['type'] == "bongkarpasang"){?>
                        <h2 class="contact-title">Layanan Bongkar Pasang AC</h2>
                    <?php }else if($_GET['type'] == "perbaikan"){?>
                        <h2 class="contact-title">Perbaikan AC</h2>
                    <?php }else if($_GET['type'] == "tambahfreon"){?>
                        <h2 class="contact-title">Cuci AC / Tambah Freon AC</h2>
                    <?php }?>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="prosess_layanan.php" method="POST">
                        <div style="display: none;">
                            <input class="form-control valid" name="user_planggan" id="user_planggan" type="user_planggan" value="<?php echo $lg['username']?>">
                            <input class="form-control valid" name="jenis_layanan" id="jenis_layanan" type="jenis_layanan" value="<?php echo $_GET['type']?>">
                        </div>
                        <div>
                            <h4>Nama</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="nama" readonly id="nama" type="nama" value="<?php echo $lg['frist_name']?>">
                            </div>
                        </div>
                        <div>
                            <h4>Alamat</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="alamat" id="alamat" type="alamat" value="<?php echo $lg['alamat']?>">
                            </div>
                        </div>
                        <div>
                            <h4>No.Telepon</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="telp" id="telp" type="telp" value="<?php echo $lg['notelp']?>">
                            </div>
                        </div>                        
                        <div>
                            <h4>Jenis-Jenis AC</h4>
                        </div>
                        <div class="col-sm-6">
                            <select name="jenis_ac" id="jenis_ac" class="form-control">
                                <option value="-">-- Pilih Jenis AC --</option>
                                <?php
                                $kategori = $_GET['type']; 
                                $jenisAc = mysqli_query($con,"SELECT * FROM `jenis_ac` where kategori = '$kategori'" );
                                    while ($data = mysqli_fetch_array($jenisAc)) {
                                        $id = $data['id'];
                                        $jenis = $data['jenis'];
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $jenis;?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div>
                            <h4>Jumlah Unit</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="jm_unit" id="jm_unit" type="jm_unit">
                            </div>
                        </div>
                        <br/>
                        <div>
                            <h4>Tanggal Pemesanan</h4>
                        </div>
                        <div class="col-sm-6">
 							<input type="datetime-local" id="tgl_pesan" name="tgl_pesan">
                            <!--input class="form-control valid" name="tgl_pesan" id="telp" type="telp" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d H:i:s")?>" readonly=true>
                            <<input type="datetime-local" id="tgl_pesan" name="tgl_pesan"> -->
                        </div>
                        <br/>
                        <div>
                            <h4>Keterangan Tambahan</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"></textarea>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                           <button type="submit" class="button button-contactForm boxed-btn">Pesan</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Jl Raya Jakarta - Serang KM 15, Kp Asem </h3>
                                <p>Kragilan, Banten</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+62 852-1499-1361</h3>
                                <p>Senin - Jumat, 09:00 - 16:00</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>Admqualitytehnik@yahoo.com</h3>
                                <p>Penawaran Lebih lanjut ? Kirim kami email</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    
    <div class="we-create-area">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-12">
                        <div class="we-create-img">
                            <img src="images/langkahlangkah.png" alt="" width="300" height="400">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
   </body>
   </html>