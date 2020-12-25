<?php
	include '../koneksi.php';

	 // var_dump($_POST);
	$petugas = $_POST['petugas'];
	$Keterangan = $_POST['Keterangan'];
	$id = $_POST['id'];
	$tgl_proses = $_POST['tgl_proses'];
	// echo date('yy-m-d', $date);
	if($petugas == "-")
	{
		echo "<script>alert('Isi data dengan lengkap BOI !!!');window.location='assignPetugas.php?id=$id'</script>";
	}
	else
	{
		$date = strtotime("+ 0 day");
	$date1 = strtotime("+ 8 day");
// echo date('yy-m-d', $date);

	if($tgl_proses < date('yy-m-d', $date))
	{
		echo "<script>alert('Tanggal Tidak Boleh Lebih Kecil Dari hari ini');window.location='assignPetugas.php?id=$id'</script>";
	}
	else
		if($tgl_proses >= date('yy-m-d', $date1))
{
	echo "<script>alert('Tanggal Tidak Boleh Lebih besar Dari hari ini');window.location='assignPetugas.php?id=$id'</script>";
}
else
	{
			$query=mysqli_query($con,"UPDATE `task` SET `petugas`='$petugas',`deskripsi_proses`='$Keterangan',`status`='3', `tgl_proses`= '$tgl_proses' WHERE `id` = '$id' ");

			if ($query) 
			{
				$query1=mysqli_query($con,"INSERT INTO `log`(`id_pesanan`, `created_by`, `status`, `deskripsi`,`tgl_proses`,`logPetugas`)
						VALUES ('$id','admin','3','$Keterangan','$tgl_proses','admin')");
				echo "<script>alert('Berhasil');window.location='index.php'</script>";
			}
			else 
			{
				echo "<script>alert('Gagal');window.location='index.php'</script>";
			}	
		}
	}	
	
?>