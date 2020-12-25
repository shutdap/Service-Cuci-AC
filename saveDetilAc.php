<?php
	include 'koneksi.php';
	$tasksid=$_POST['tasksid'];
	$jenis_ac=$_POST['jenis_ac'];
	$jm_unit=$_POST['jm_unit'];


	$getHarga = mysqli_query($con,"SELECT * FROM `jenis_ac` WHERE `id` = '$jenis_ac'" );
	while ($data = mysqli_fetch_array($getHarga)) 
	{
	 	$harga = $jm_unit * $data['harga'];
	}

	$getjenislayanan = mysqli_query($con,"SELECT * FROM `task` WHERE `id` = '$tasksid'" );
	while ($data = mysqli_fetch_array($getjenislayanan)) 
	{
	 	$jenis_layanan = $data['jenis_layanan'];
	}
	
	if($jenis_layanan == "perbaikan")
		$harga1 = 0;
	else
		$harga1 = $harga;

	$query1=mysqli_query($con,"INSERT INTO `detil_ac`(`tasks_id`, `jenis_ac`, `jm_unit`, `harga`) VALUES ('$tasksid','$jenis_ac','$jm_unit','$harga1')");

	if($query1)
	{
		echo "<script>alert('Berhasil');window.location='detailAC.php?id=$tasksid'</script>";
	}
?>