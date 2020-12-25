<?php
	include '../koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$notelp = $_POST['notelp'];
	$password = $_POST['password'];

$query=mysqli_query($con,"UPDATE `login` SET `frist_name`='".$nama."',`password`='".$password."',`alamat`='".$alamat."',`email`='".$email."',`notelp`='".$notelp."' WHERE `id` = '".$id."'");
if ($query) 
{
	echo "<script>alert('Berhasil');window.location='index.php'</script>";
}
else 
{
	echo "<script>alert('Gagal');window.location='daftarPetugas.php'</script>";
}
?>