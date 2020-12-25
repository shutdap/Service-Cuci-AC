<?php
	include 'koneksi.php';
	$id=$_GET['id'];
	$harga=$_GET['harga'];
	$jenis_ac=$_GET['jenis_ac'];
	$jm_unit=$_GET['jm_unit'];

	$query=mysqli_query($con,"UPDATE `task` SET `jenis_ac`='MIXED' WHERE `id` = '$id' ");

	$query1=mysqli_query($con,"INSERT INTO `detil_ac`(`tasks_id`, `jenis_ac`, `jm_unit`, `harga`) VALUES ('$id','$jenis_ac','$jm_unit','$harga')");

	if ($query1) 
	{
		echo "<script>alert('berhasil');window.location='detailAC.php?id=$id'</script>";
	}
?>