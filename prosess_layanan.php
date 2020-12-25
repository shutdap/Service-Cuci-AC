<?php
include 'koneksi.php';
 var_dump($_POST);
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$jenis_ac=$_POST['jenis_ac'];
$tgl_pesan=$_POST['tgl_pesan'];
$message=$_POST['message'];
$user_planggan=$_POST['user_planggan'];
$jenis_layanan=$_POST['jenis_layanan'];
$jm_unit=$_POST['jm_unit'];

if($status == "-" || $jm_unit == "")
{
	echo "<script>alert('Isi data dengan lengkap BOI !!!');window.location='layanan.php?type=$jenis_layanan'</script>";
}
else
{
	$date = strtotime("+ 0 day");
	$date1 = strtotime("+ 8 day");
// echo date('yy-m-d', $date);

	if($tgl_pesan < date('yy-m-d', $date))
	{
		echo "<script>alert('Tanggal Tidak Boleh Lebih Kecil Dari hari ini');window.location='layanan.php?type=$jenis_layanan'</script>";
	}
	else
		if($tgl_pesan >= date('yy-m-d', $date1))
{
	echo "<script>alert('Tanggal Tidak Boleh Lebih besar Dari hari ini');window.location='layanan.php?type=$jenis_layanan'</script>";
}
else
	{
		$getHarga = mysqli_query($con,"SELECT * FROM `jenis_ac` WHERE `id` = '$jenis_ac'" );
		while ($data = mysqli_fetch_array($getHarga)) 
		{
		 	$harga = $jm_unit * $data['harga'];
		}

		if($jenis_layanan == "perbaikan")
			$harga1 = 0;
		else
			$harga1 = $harga;

		$query=mysqli_query($con,"INSERT INTO `task`(`nm_pemesan`, `alamat`, `telp`, `jenis_ac`, `tgl_pesan`, `keterangan`, `user_pelangan`, `jenis_layanan`, `petugas`, `harga`, `status`,`jm_unit`)
			VALUES ('$nama','$alamat','$telp','$jenis_ac','$tgl_pesan','$message','$user_planggan','$jenis_layanan','','$harga','1','$jm_unit')");


		if ($query) 
		{
			$select = mysqli_query($con,"select `id` from `task` WHERE `user_pelangan` = '$user_planggan' ORDER BY `id` DESC LIMIT 1");
			$data =mysqli_fetch_array($select);
			$id_pesanan= $data['id'];


			$query1=mysqli_query($con,"INSERT INTO `log`(`id_pesanan`, `created_by`, `status`, `deskripsi`,`logPetugas`)
			VALUES ('$id_pesanan','$user_planggan','1','$message','$user_planggan')");
			if($query1)
			{
				echo "<script>
					var r = confirm('Ingin Tambah Jenis AC ?');
					if (r == true) {
					    alert('Berhasil');window.location='detailAC1.php?id=$id_pesanan&jenis_ac=$jenis_ac&harga=$harga&jm_unit=$jm_unit';
					  } else {
					    alert('Berhasil');window.location='detail.php?id=$id_pesanan';
					  }
				</script>";
			}

				
			// echo "<script>alert('Berhasil');window.location='detail.php?id=$id_pesanan'</script>";
		}
		else 
		{
			echo "<script>alert('Gagal');window.location='index.php'</script>";
		}
	}
}

?>