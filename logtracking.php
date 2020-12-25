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
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />

        <!-- Stylesheets
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/dark.css" type="text/css" />
        <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

        <!-- Bootstrap Data Table Plugin -->
        <link rel="stylesheet" href="css/components/bs-datatable.css" type="text/css" />

        <link rel="stylesheet" href="css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />


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

            <style type="text/css">
                ul.timeline {
                    list-style-type: none;
                    position: relative;
                }
                ul.timeline:before {
                    content: ' ';
                    background: #d4d9df;
                    display: inline-block;
                    position: absolute;
                    left: 29px;
                    width: 2px;
                    height: 100%;
                }
                ul.timeline > li {
                    margin: 20px 0;
                    padding-left: 20px;
                }
                ul.timeline > li:before {
                    content: ' ';
                    background: white;
                    display: inline-block;
                    position: absolute;
                    border-radius: 50%;
                    border: 3px solid #22c0e8;
                    left: 20px;
                    width: 20px;
                    height: 20px;
                    z-index: 400;
                }
                .rapih {
                    position: relative;
                    left: 15px;
                    word-wrap: break-word;
                    text-align: justify;
                }
            </style>
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
    <body>
        <?php
            $id = $_GET['id'];
            $sql ="SELECT t.*,(SELECT `keterangan` from `status` where `status` = l.status) as keterangan,l.status as log_status,
            l.deskripsi as log_des,l.logPetugas FROM `task` t INNER JOIN `status` s on t.status = s.status LEFT JOIN `log` l on t.id = l.id_pesanan where t.id = '$id'";
             $query = mysqli_query($con, $sql) or die("Gagal". mysqli_error($con));
        ?>
        <div class="what-we-do we-padding">
            <div class="container">
                <section id="page-title">
            <div class="container clearfix">
            </div>
        </section><!-- #page-title end -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline">
                        <?php
                        while ($tampil = mysqli_fetch_array($query)) {
                            ?>
                            <li>
                                
                                </span>
                                <span class="rapih">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php
                                        echo $tampil['keterangan'];
                                    ?>  
                                    </p>
                                    <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php
                                        if ($tampil['tgl_proses'] == '0000-00-00 00:00:00') {
                                            echo $tampil['tgl_pesan'];
                                        } else {
                                            echo $tampil['tgl_proses'];
                                        }
                                        ?>   
                                    </p>
                                    <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php
                                        echo $tampil['log_des'];
                                    ?>  
                                    </p>
                                <p class="small">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Diproeses Oleh:
                                    <strong>
                                        <?php
                                        if ($tampil['logPetugas'] == NULL) {
                                            echo 'menunggu respon admin';
                                        } else {
                                            echo $tampil['logPetugas'];
                                        }
                                        ?>    
                                        </strong>
                                </p>
                                </span>
                            </li>
                        <?php } ?>
                     </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <br />

    </body>
    </html>