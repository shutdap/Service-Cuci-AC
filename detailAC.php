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
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="saveDetilAc.php" method="POST">
                        <div style="display: none;">
                            <input class="form-control valid" name="tasksid" id="tasksid" type="tasksid" value="<?php echo $_GET['id']?>">
                        </div>                  
                        <div>
                            <h4>Jenis-Jenis AC</h4>
                        </div>
                        <div class="col-sm-6">
                            <select name="jenis_ac" id="jenis_ac" class="form-control">
                                <option value="-">-- Pilih Jenis AC --</option>
                                <?php
                                require_once "koneksi.php";
                                $jenisAc = mysqli_query($con,"SELECT * FROM `jenis_ac`" );
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
                        <div class="text-center">
                     <button type="submit" class="btn btn-primary my-4">Submit</button>
                  </div>
                    </form>
                    <div class="we-create-area">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-12">
                        <div class="what-we-do we-padding">
                <div class="container">
                    <div class="col_full">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Jenis AC</th>
                                        <th>Jumlah Unit</th>
                                        <th>Harga</th>                                
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require_once "koneksi.php";
                                    $tasksid = $_GET['id'];
                                    $sql = "SELECT da.*,j.jenis FROM `detil_ac` da join `jenis_ac` j on j.id = da.jenis_ac WHERE `tasks_id` = '$tasksid'";
                                    $query = mysqli_query($con, $sql) or die("Gagal". mysqli_error($con));
                                    while($tampil = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $tampil['jenis']; ?></td>
                                            <td><?php echo $tampil['jm_unit']; ?></td>
                                            <td><?php echo $tampil['harga']; ?></td>
                                        </tr>
                                    <?php };?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
                    </div>
                    
                </div>
            </div>
                </div> 
            </div>
   </body>
   </html>