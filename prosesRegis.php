<?php
	include 'koneksi.php';


	$fristName = $_POST['fristName'];
	$lastName = $_POST['lastName'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$notelp = $_POST['notelp'];
	$password = $_POST['password'];

$query=mysqli_query($con,"INSERT INTO `login`(`frist_name`, `last_name`, `username`, `password`, `alamat`, `email`, `notelp`, `lvl`) 
	VALUES ('$fristName','$lastName','$username','$password','$address','$email','$notelp','2')");

if ($query) 
{
	echo "<script>alert('Berhasil Daftar');window.location='login.php'</script>";
}
else 
{
	echo "<script>alert('Gagal');window.location='login.php'</script>";
}
?>