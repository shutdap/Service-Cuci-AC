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
                                <!-- <a href="#" class="btn header-btn">Contact Us</a> -->
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


    <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Service AC<br>Merawat Ac Dengan Jaminan Garansi</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Rawat AC dengan cara yang salah dan asal akan memperpendek umur unitmu lho. Pastikan selalu gunakan jasa profesional untuk dapatkan hasil dan pengalaman terbaik dengan jaminan garansi</p>
                                    <!-- Hero-btn -->
                                   <!--  <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Contact Us</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="images/acrepair.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="what-we-do we-padding">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2>Berbagai Macam Layanan Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon">
                                <img src="images/bongkarpasang.jpg" alt="" width="150" height="150">
                            </div>
                            <div class="do-caption">
                                <h4>Bongkar Pasang AC</h4>
                                <p>Dapatkan layanan profesional dari pakar jasa AC dengan harga tetap</p>
                            </div>
                            <div class="do-btn">
                                <?php
                                    if($lg != null){
                                ?>
                                <a href="layanan.php?type=bongkarpasang"><i class="ti-arrow-right"></i> Request now</a>
                            <?php } else {?>
                                <a href="login.php"><i class="ti-arrow-right"></i> Request now</a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-do active text-center mb-30">
                            <div class="do-icon">
                                <img src="images/perbaikan.png" alt="" width="150" height="150">
                            </div>
                            <div class="do-caption">
                                <h4>Perbaikan AC</h4>
                                <p>Perbaikan AC oleh para ahli yang terlatih dan terpercaya</p>
                            </div>
                            <div class="do-btn">
                                <?php
                                    if($lg != null){
                                ?>
                                <a href="layanan.php?type=perbaikan"><i class="ti-arrow-right"></i> Request now</a>
                            <?php } else {?>
                                <a href="login.php"><i class="ti-arrow-right"></i> Request now</a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon">
                                <img src="images/acrepair.jpg" alt="" width="150" height="100">
                            </div>
                            <div class="do-caption">
                                <h4>Cuci AC / Tambah Freon AC</h4>
                                <p>Buat AC Anda kembali dingin dengan perawatan rutin dari teknisi kami</p>
                            </div>
                            <div class="do-btn">
                                <?php
                                   if($lg != null){
                                ?>
                                <a href="layanan.php?type=tambahfreon"><i class="ti-arrow-right"></i> Request now</a>
                            <?php } else {?>
                                <a href="login.php"><i class="ti-arrow-right"></i> Request now</a>
                            <?php } ?>
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