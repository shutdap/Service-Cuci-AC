<?php
	include 'koneksi.php';

	$username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con,"SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'");
    $hasil=mysqli_fetch_array($query);
    $cek=mysqli_num_rows($query);
    $user = $hasil['username'];

    if($cek > 0){
 
    $data = mysqli_fetch_assoc($query);
 
    // cek jika user login sebagai admin
    if($hasil['lvl']== 0){
        session_start();
        // buat session login dan username
        $_SESSION['username']=$hasil['username'];
        $_SESSION['password']=$hasil['password'];
        $_SESSION['lvl'] = $hasil['lvl'];
        // alihkan ke halaman dashboard admin
        header('Location: ../skripsi1/admin/index.php'); 
        // header("location:../admin/index.php");
 		// echo "<script>alert('selamat datang admin')</script>";
    // cek jika user login sebagai pegawai
    }else if($hasil['lvl']== 1){
        session_start();
        // buat session login dan username
        $_SESSION['username']=$hasil['username'];
        $_SESSION['password']=$hasil['password'];
        $_SESSION['lvl'] = $hasil['lvl'];
        // alihkan ke halaman dashboard pegawai
        header('Location:../skripsi1/petugas/index.php');
        // header('Location:../index.php?us = $username'); 
        // echo "<script>alert('selamat datang petugas')</script>";
    }
    else if($hasil['lvl']== 2)
    {
    	session_start();
        // buat session login dan username
        $_SESSION['username']=$hasil['username'];
        $_SESSION['password']=$hasil['password'];
        $_SESSION['lvl'] = $hasil['lvl'];
        // alihkan ke halaman dashboard pegawai
        // echo "<script>document.location.href ='../petugas/index.php'; </script>";
       header('Location:../skripsi1/index.php');
    }
    else{
 
        // alihkan ke halaman login kembali
        echo "<script>alert('Gagal Login');window.location='login.php'</script>";
    }   
}else{
   echo "<script>alert('Gagal Login');window.location='login.php'</script>";
}
?>