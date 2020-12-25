<?php
	include 'koneksi.php';
	// var_dump($_POST);

	$id=$_POST['id'];
	$uname=$_POST['uname'];
	$bukti_tf=$_FILES ['buktiPembayaran']['name'];
	$tmp=$_FILES['buktiPembayaran']['tmp_name'];
	$tf_baru = date('dmYHis').$bukti_tf;
	$path="tf/".$tf_baru;
	$bktbayar = $_POST['bktbayar'];


if($bktbayar == "tf")
{
	if($bukti_tf == null)
	{
		echo "<script>alert('Maaf, Sertakan Bukti Pembayaran.');window.location='pembayaran.php?id=$id'</script>";
	}
	else
	{
		if (move_uploaded_file($tmp,$path)) {
		$query= "SELECT * FROM `task` WHERE `id`='".$id."'";
		$sql = mysqli_query($con, $query);
		$data = mysqli_fetch_array($sql);

		if(is_file("images/".$data['bukti_tf']))unlink("images/".$data['bukti_tf']);

			$update = mysqli_query($con,"UPDATE `task` SET `bukti_tf` ='".$tf_baru."',`status`=2,`jenis_pembayaran`='".$bktbayar."' WHERE id='".$id."'");

			if($update){ // Cek jika proses simpan ke database sukses atau tidak// Jika Sukses, Lakukan :
				$query1=mysqli_query($con,"INSERT INTO `log`(`id_pesanan`, `created_by`, `status`, `deskripsi`,`logPetugas`)
			VALUES ('$id','$uname','2','','$uname')");	
				echo "<script>alert('Berhasil');window.location='index.php'</script>";
				}else{
					// Jika Gagal, Lakukan :
					echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');window.location='pembayaran.php'</script>";
				}
		}
	}
	
}
else 
{
	$update = mysqli_query($con,"UPDATE `task` SET `bukti_tf` ='',`status`=2,`jenis_pembayaran`='".$bktbayar."' WHERE id='".$id."'");

	if($update){ // Cek jika proses simpan ke database sukses atau tidak// Jika Sukses, Lakukan :
		$query1=mysqli_query($con,"INSERT INTO `log`(`id_pesanan`, `created_by`, `status`, `deskripsi`,`logPetugas`)
	VALUES ('$id','$uname','2','','$uname')");	
		echo "<script>alert('Berhasil');window.location='index.php'</script>";
		}else{
			// Jika Gagal, Lakukan :
			echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');window.location='pembayaran.php?id=$id'</script>";
		}
}


?>