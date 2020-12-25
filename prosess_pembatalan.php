<?php
	include 'koneksi.php';
	var_dump($_POST);

	$id=$_POST['id'];
	$uname=$_POST['uname'];
	$message = $_POST['message'];

	$update = mysqli_query($con,"UPDATE `task` SET `status`='C' WHERE id='".$id."'");

	if($update){ // Cek jika proses simpan ke database sukses atau tidak// Jika Sukses, Lakukan :
		$query1=mysqli_query($con,"INSERT INTO `log`(`id_pesanan`, `created_by`, `status`, `deskripsi`,`logPetugas`)
	VALUES ('$id','$uname','C','','$uname')");	
		echo "<script>alert('Berhasil');window.location='tracking.php'</script>";
		}else{
			// Jika Gagal, Lakukan :
			echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');window.location='batal.php?id=$id'</script>";
		}


?>