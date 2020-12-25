<?php
	include '../koneksi.php';

	$id = $_GET['id'];	
	$query=mysqli_query($con,"DELETE FROM `login` WHERE `id` = '".$id."'");
if ($query) 
{
	echo "<script>alert('Berhasil');window.location='daftarPetugas.php'</script>";
}
else 
{
	echo "<script>alert('Gagal');window.location='daftarPetugas.php'</script>";
}

?>